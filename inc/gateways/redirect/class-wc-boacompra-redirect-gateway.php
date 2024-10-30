<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * BoaCompra Payment Redirect Gateway class.
 *
 * Extended by individual payment gateways to handle payments.
 *
 * @class   WC_Boacompra_Redirect_Gateway
 * @extends WC_Payment_Gateway
 * @version 2.0.0
 * @author  BoaCompra
 */
class WC_Boacompra_Redirect_Gateway extends WC_Payment_Gateway {

	/**
	 * Constructor for the gateway.
	 */
	public function __construct() {

		global $woocommerce;

		$this->id                   = 'boacompra-redirect';
		$this->icon                 = apply_filters('boacompra_woocommerce_redirect_icon', '');
		$this->method_title         = __('BoaCompra - Redirect – Hosted Checkout ', 'boacompra-woocommerce' );
		$this->method_description   = __('Accept over 140 payments on BoaCompra’s payment page.', 'boacompra-woocommerce' );
		$this->has_fields           = true;
		$this->view_transaction_url = 'https://billing-partner.boacompra.com/transactions_test.php/%s';
		$this->supports             = array(
			'subscriptions',
			'products',
			'subscription_cancellation',
			'subscription_reactivation',
			'subscription_suspension',
			'subscription_amount_changes',
			'subscription_payment_method_change',
			'subscription_payment_method_change_customer',
			'subscription_payment_method_change_admin',
			'subscription_date_changes',
			'refunds'
		);

		/**
		 * Load the form fields.
		 */
		$this->init_form_fields();

		/**
		 * Load the settings.
		 */
		$this->init_settings();

		/**
		 * Options.
		 */
		$this->title            = $this->get_option('title');
		$this->description      = $this->get_option('description');
		$this->merchant_id      = $this->get_option('merchantid');
		$this->secret_key       = $this->get_option('secretkey');
		$this->ignore_due_email = $this->get_option('ignore_due_email');
		$this->deadline         = $this->get_option('deadline');
		$this->send_only_total  = $this->get_option('send_only_total', 'no');
		$this->prefix           = $this->get_option('invoice_prefix', 'wc');
		$this->sandbox          = $this->get_option('environment', 'no');
		$this->debug            = $this->get_option('debug');

		/**
		 * Active logs.
		 */
		if ($this->debug === 'yes') {

			if (class_exists('WC_Logger')) {

				$this->log = new WC_Logger();

			} else {

				$this->log = $woocommerce->logger();

			} // end if;

		} // end if;

		$this->api = new WC_Boacompra_API($this, 'redirect', $this->sandbox, $this->prefix);

		/**
		 * Actions
		 */
		add_action('woocommerce_api_wc_boacompra_redirect_gateway', array($this, 'notification_handler'));

		add_action('woocommerce_api_wc_boacompra_hosted_request', array($this, 'redirect_checkout'));

		add_action('woocommerce_update_options_payment_gateways_' . $this->id, array($this, 'process_admin_options'));

		add_action('woocommerce_thankyou_' . $this->id, array($this, 'thankyou_page'));

		if ($this->settings['enabled'] === 'yes') {

			add_action('admin_notices', array($this, 'dependencies_notices'));

		} // end if;

	} // end __construct;

	/**
	 * Returns a value indicating the the Gateway is available or not.
	 *
	 * @return bool
	 */
	public function is_available() {

		// Test if is valid for use.
		$api = !empty($this->merchant_id) && !empty( $this->secret_key);

		$available = parent::is_available() && $api;

		return $available;

	} // end is_available;

	/**
	 * Dependecie notice.
	 *
	 * @return mixed.
	 */
	public function dependencies_notices() {

		if (!class_exists('Extra_Checkout_Fields_For_Brazil')) {

			require_once dirname(WC_BC_PLUGIN_FILE) . '/views/html-notice-ecfb-missing.php';

		} // end if;

	} // end if;

	/**
	 * Initialise Gateway Settings Form Fields.
	 *
	 * @return void.
	 */
	public function init_form_fields() {

		$this->form_fields = array(
			'enabled'         => array(
				'title'   => __('Enable/Disable', 'boacompra-woocommerce'),
				'type'    => 'checkbox',
				'label'   => __('Enable redirect payments with BoaCompra', 'boacompra-woocommerce'),
				'default' => 'no'
			),
			'title'           => array(
				'title'       => __('Title', 'boacompra-woocommerce'),
				'type'        => 'text',
				'description' => __('Payment method title seen on the checkout page.', 'boacompra-woocommerce'),
				'default'     => __( 'BoaCompra', 'boacompra-woocommerce')
			),
			'description'     => array(
				'title'       => __('Description', 'boacompra-woocommerce' ),
				'type'        => 'textarea',
				'description' => __('Payment method description seen on the checkout page.', 'boacompra-woocommerce'),
				'default'     => __('Confirm your order to be redirected to the payment page.', 'boacompra-woocommerce')
			),
			'integration'    => array(
				'title'       => __('Integration settings', 'boacompra-woocommerce'),
				'type'        => 'title',
				'description' => ''
			),
			'merchantid'      => array(
				'title'             => __('MerchantID', 'boacompra-woocommerce'),
				'type'              => 'text',
				'description'       => sprintf(__( 'Your BoaCompra account\'s unique store ID, found in %s.', 'boacompra-woocommerce' ), '<a href="https://myaccount.boacompra.com/" target="_blank">' . __( 'My Account', 'boacompra-woocommerce' ) . '</a>'),
				'default'           => '',
				'custom_attributes' => array(
					'required' => 'required'
				)
			),
			'secretkey'      => array(
				'title'             => __('SecretKey', 'boacompra-woocommerce'),
				'type'              => 'text',
				'description'       => sprintf(__('SecretKey can be found/created in %s.', 'boacompra-woocommerce' ), '<a href="https://myaccount.boacompra.com/" target="_blank">' . __( 'My Account', 'boacompra-woocommerce' ) . '</a>'),
				'default'           => '',
				'custom_attributes' => array(
					'required' => 'required'
				)
			),
			'hosted_options' => array(
				'title'       => __('Payment options available in the redirected checkout.', 'boacompra-woocommerce'),
				'type'        => 'title',
				'description' => '',
			),
			'card'           => array(
				'title'   => __('Credit Card', 'boacompra-woocommerce'),
				'type'    => 'checkbox',
				'label'   => __('Enable Credit Card for Hosted Checkout', 'boacompra-woocommerce'),
				'default' => 'yes',
		  ),
		  'cash'           => array(
				'title'   => __('Cash', 'boacompra-woocommerce'),
				'type'    => 'checkbox',
				'label'   => __('Enable Cash for Hosted Checkout', 'boacompra-woocommerce'),
				'default' => 'yes',
		  ),
		  'wallet'         => array(
				'title'   => __('E-Wallet', 'boacompra-woocommerce'),
				'type'    => 'checkbox',
				'label'   => __('Enable E-Wallet for Hosted Checkout', 'boacompra-woocommerce'),
				'default' => 'yes',
		  ),
		  'transfer'       => array(
				'title'   => __('Transfer', 'boacompra-woocommerce'),
				'type'    => 'checkbox',
				'label'   => __('Enable Transfer for Hosted Checkout', 'boacompra-woocommerce'),
				'default' => 'yes',
		  ),
			'behavior'       => array(
				'title'       => __( 'Integration behavior', 'boacompra-woocommerce' ),
				'type'        => 'title',
				'description' => ''
			),
			'invoice_prefix' => array(
				'title'       => __('Invoice Prefix', 'boacompra-woocommerce'),
				'type'        => 'text',
				'description' => __('Please enter a prefix for your invoice code.', 'boacompra-woocommerce'),
				'placeholder' => '',
				'default'     => 'WC',
				'placeholder' => 'WC',
			),
			'environment'    => array(
				'title'       => __( 'BoaCompra sandbox', 'boacompra-woocommerce' ),
				'type'        => 'checkbox',
				'label'       => __( 'Enable BoaCompra sandbox', 'boacompra-woocommerce' ),
				'default'     => 'no',
				'description' => __( 'Used to test payments.', 'boacompra-woocommerce' )
			),
			'debug'         => array(
				'title'       => __( 'Debugging', 'boacompra-woocommerce' ),
				'type'        => 'checkbox',
				'label'       => __( 'Enable logging', 'boacompra-woocommerce' ),
				'default'     => 'no',
				'description' => sprintf( __( 'Log BoaCompra events, such as API requests, for debugging purposes. The log can be found in %s.', 'boacompra-woocommerce' ), Boacompra_WooCommerce::get_log_view($this->id))
			)
		);

	} // end init_form_fields;

	/**
	 * Payment fields.
	 */
	public function payment_fields() {

		if ($description = $this->get_description()) {

			echo wpautop(wptexturize($description));

		} // end if;

		wc_get_template(
			'redirect/checkout-instructions.php',
			array(),
			'woocommerce/boacompra/',
			Boacompra_WooCommerce::get_templates_path()
		);

	} // end payment_fields;

	/**
	 * Process the payment and return the result.
	 *
	 * @param  int $order_id Order ID.
	 * @return array Redirect.
	 */
	public function process_payment($order_id) {

		return $this->api->process_payment($order_id);

	} // end process_payment;

	/**
	 * Thank You page message.
	 *
	 * @param  int $order_id Order ID.
	 * @return void.
	 */
	public function thankyou_page($order_id) {

		wc_get_template(
			'redirect/payment-instructions.php',
			array(),
			'woocommerce/boacompra/',
			Boacompra_WooCommerce::get_templates_path()
		);

	} // end thankyou_page;

	/**
	 * Handles the notification posts from BoaCompra Gateway.
	 *
	 * @return void
	 */
	public function notification_handler() {

		$this->api->notification_handler();

	} // end notification_handler;

	/**
	 * Process refund.
	 *
	 * @param  int        $order_id Order ID.
	 * @param  float|null $amount Refund amount.
	 * @param  string     $reason Refund reason.
	 * @return boolean True or false based on success, or a WP_Error object.
	 */
	public function process_refund($order_id, $amount = null, $reason = '') {

		return new \WP_Error('error', __('Refunds for this payment method are not allowed.', 'boacompra-woocommerce'));

	} // end process_refund;

	/**
	 * Auto redirect to the Boacompra checkout page.
	 *
	 * @return void
	 */
	public function redirect_checkout() {

		$order_id = wcbc_request('oid', '');

		$order = wc_get_order($order_id);

		if ($order) {

			$return = $this->api->do_hosted_request($order);

			echo $return;

			die();

		} // end if;

	} // end redirect_checkout;

} // end WC_Boacompra_Redirect_Gateway;
