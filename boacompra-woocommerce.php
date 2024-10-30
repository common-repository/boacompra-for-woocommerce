<?php
/**
 * Plugin Name: BoaCompra Payment Gateway for WooCommerce
 * Description: BoaCompra Payment Gateway for WooCommerce is made for merchants looking for a boost on sales and conversions in Latin America, as well as Portugal, Spain and Turkey by accepting over 140 local payments options directly in your e-commerce.
 * Plugin URI: https://wordpress.org/plugins/boacompra-for-woocommerce/
 * Text Domain: boacompra-woocommerce
 * Version: 2.0.0
 * Author: BoaCompra
 * Author URI: https://boacompra.com/
 * Network: true
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Domain Path: /lang
*/

if (!defined('ABSPATH')) {

	exit;

} // end if;

if (!class_exists('Boacompra_WooCommerce')) {

	/**
	 * WooCommerce BoaCompra main class.
	 */
	class Boacompra_WooCommerce {

		/**
		 * API Client Name.
		 *
		 * @var string
		 */

		const CLIENT_NAME = 'boacompra-woocommerce';

		/**
		 * CLient Version.
		 */
		const CLIENT_VERSION = '2.0.0';

		/**
		 * Instance of this class.
		 *
		 * @var object
		 */
		protected static $instance = null;

		/**
		 * Initialize the plugin actions.
		 */
		public function __construct() {

			if (!defined('WC_BC_PLUGIN_FILE')) {

				define('WC_BC_PLUGIN_FILE', __FILE__ );

			} // end if;

			/**
			 * Load plugin text domain.
			 */
			add_action('init', array( $this, 'load_plugin_textdomain'));

			include_once 'inc/class-wc-boacompra.php';

			new WC_Boacompra();

		} // end __construct.

		/**
		 * Return an instance of this class.
		 *
		 * @return object A single instance of this class.
		 */
		public static function get_instance() {

			/**
			 * If the single instance hasn't been set, set it now.
			 */
			if (null == self::$instance) {

				self::$instance = new self;

			} // end if;

			return self::$instance;

		} // end get_instance;

		/**
		 * Get templates path.
		 *
		 * @return string
		 */
		public static function get_templates_path() {

			return plugin_dir_path( __FILE__ ) . 'templates/';

		} // end get_templates_path;

		/**
		 * Get assets path.
		 *
		 * @param bool $url
		 * @return string
		 */
		public static function get_assets_path($url = false) {

			$path = plugin_dir_path( __FILE__ ) . 'assets/';

			if ($url) {

				$path = plugins_url( 'assets', __FILE__ );

			} // end if;

			return $path;

		} // end get_assets_path;

		/**
		 * Load the plugin text domain for translation.
		 *
		 * @return void
		 */
		public function load_plugin_textdomain() {

			load_plugin_textdomain('boacompra-woocommerce', false, dirname(plugin_basename(__FILE__)) . '/lang/');

		} // load_plugin_textdomain;

		/**
		 * Get log.
		 *
		 * @return string
		 */
		public static function get_log_view($gateway_id) {

			if (defined('WC_VERSION') && version_compare(WC_VERSION, '2.2', '>=') ) {

				return '<a href="' . esc_url( admin_url( 'admin.php?page=wc-status&tab=logs&log_file=' . esc_attr($gateway_id) . '-' . sanitize_file_name( wp_hash( $gateway_id ) ) . '.log' ) ) . '">' . __( 'System status &gt; logs', 'boacompra-woocommerce' ) . '</a>';

			} // end if;

			return '<code>woocommerce/logs/' . esc_attr( $gateway_id ) . '-' . sanitize_file_name(wp_hash($gateway_id)) . '.txt</code>';

		} // end get_log_view;

	} // end WC_Boacompra;

	add_action('plugins_loaded', array('Boacompra_WooCommerce','get_instance'));

} // end if;
