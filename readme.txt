=== BoaCompra Payment Gateway for WooCommerce ===
Contributors: boacomprawoocommerce, braising
Tags: woocommerce, boacompra, payment, BoaCompra pagamentos, wc boacompra, gateway de pagamento brasil, payment gateways
Requires at least: 5.0
Tested up to: 5.8
Requires PHP: 5.6
Stable tag: 5.6.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

BoaCompra Payment Gateway for WooCommerce allows merchants to accept over 140 Latin American payment methods directly on your website, thus helping boost sales and conversions in the region.

Our features provide the best payment experience for your customers and include installments and refunds. They are all available by following a few installation steps and do not require technical knowledge.

[youtube https://youtu.be/YU_tVX0-hqs]

### Main advantages ###

* Coverage: Our solution includes 17 countries in Latin America, including the main markets such as Brazil, Mexico, Peru, Colombia, Chile, Argentina, and Uruguay. We also cover Portugal, Spain, Turkey, Greece and Romania.
* Local payment options: Over 140 payment methods are available by installing our plugin, including credit/debit cards, cash-based payments (Boleto, OXXO, RapiPago and more), bank transfers, PIX in Brazil, and e-wallets.
* Integrations to fit your exact business demands: By selecting BoaCompra Payment Page, the customer will be redirected to BoaCompra's payment page to complete a purchase. BoaCompra handles all payment information collection, sensitive data protection, and transaction security. By selecting a payment method with Direct Checkout (credit cards, boleto and e-wallets), you will have complete control over your payment page. Customers pay directly on your interface without redirections.
* Robust risk analysis: Reduce your risk of fraud and chargebacks with our machine learning system, built by a team of experts on the LATAM market.
* Easy set-up: All functionalities are available with a straightforward installation of our plugin.

### Features available ###

* Multicurrency and multilanguage: Our plugin supports multicurrency and multilingual plugins, so checkout will be adapted to display the selected language and currency chosen by the end-user.
* Installments: Offer customers the flexibility of splitting up payment purchases with the guarantee that your company still receives the money all at once, with no extra fees.
* Refunds API: We help avoid chargeback disputes by offering refunds in an integrated solution, where all the processes with the customer are done automatically. Our API supports total or partial refunds for processed payments.
* Recurring payments with Boleto: We are integrated with Woocommerce Subscriptions so you can offer recurring payments to your customers through Boleto Bancário in Brazil.
* Responsive checkout: Provide your clients with a user-friendly experience by using a checkout page adaptable to multiple devices and screen sizes.
* Sandbox environment for testing.
* Log and debug options.

### About BoaCompra ###

BoaCompra by PagSeguro is the localized payment solution to access the full potential of Latin America. We offer local processing in local currency with international funds remittance without the need for a local entity and have been connecting international merchants with local payments for over 15 years. BoaCompra is part of PagBank PagSeguro, the biggest payments fintech in Latin America and a disruptive provider of financial technology solutions for all kinds and business sizes, including POS, e-commerce, and digital banking.

By partnering with BoaCompra, you’ll get the following benefits:

* No local entities required: One simple integration covers all markets without opening multiple bank accounts.
* No cross-border surcharges: All details on transactions and charges are available on our platform, so you don't have to worry about additional undisclosed fees.
* Local customer support 24/7: Our support team speaks your customers' language (Portuguese, Spanish, English, and Turkish) and is available every day to ensure they are thoroughly looked after.
* Account management support: A dedicated regionalized account manager will be assigned to you so that we can ensure all your unique needs and business requirements are met.
* Robust risk analysis: Reduce your risk of fraud and chargebacks with our machine learning system, which we combine with a team full of experts on the LATAM market.

### Security ###

All sensitive information will be tokenized and saved on BoaCompra's environment. BoaCompra is PCI-DSS compliance certified, which means we follow global standards for security to assure trustworthy shopping experiences to your customers.

Compatibility & Requirements

* Compatible with WooCommerce 5+;
* Compatible with WordPress 5+;
* Tested and developed based on BoaCompra's API
* Compatible with PHP 5.4.x to 7;
* Mandatory use of SSL certificate with TLS 1.2 protocol;
* Pages must be served over HTTPS

### Further information ###

You can reach out to one of our payments specialists by accessing our [website](https://boacompra.com/get-in-touch/contact-form).

## Start selling now ###

1. Create an account: Access our [website](https://boacompra.com/get-in-touch/contact-form) and one of our business executives will contact you directly.
2. Download and install our plugin: Your MerchantID and SecretKey should be available at your account. By following the step-by-step installation, you can set the plugin up by yourself.
3. Sell to Latin America and get paid anywhere in the world: Select which payment methods are available at checkout and start selling.

== Installation ==

= Compatibility =

- Compatible with WooCommerce 5+;
- Compatible with WordPress 5+;
- Tested and developed based on BoaCompra's API
- Compatible with PHP 5.4.x to 7;
- Mandatory use of SSL certificate with TLS 1.2 protocol;

= Additional Plugins =

-	For stores transacting in Brazil and using Direct API payment methods (credit cards, boleto, and e-wallets), it's mandatory to install Brazilian Market on WooCommerce to add in your WC store some extra fields end-users must fill in with information to local regulatory authorities.
-	For stores transacting in different countries, we recommend installing WooCommerce - Country Based Payments to configure the methods displayed in each country from your WC Settings.
-	To set up a multi-currency store, we recommend installing Multi-Currency for WooCommerce;
-	To offer Recurring Payments through Boleto - Direct Checkout in Brazil, you should install Woocommerce Subscriptions. More details about the integration with our plugin to follow in this document.

= Installation =

By accessing the Plugins directory (wp-admin/plugin-install), you can upload the plugin files or search for our plugin BoaCompra for WooCommerce.

If you choose to search, please write "BoaCompra for WooCommerce" in the box at the right-hand corner and click "Install now". In the plugins area of WordPress, activate the BoaCompra for WooCommerce module.

If you choose to upload our package, please use the "Add new plugin" tool (wp-admin/plugins.php). Then, in the plugins area of WordPress, activate the BoaCompra for WooCommerce module.

= Settings =

### 1 - Activation ###

* MerchantID & SecretKey

Getting your MerchantID & SecretKey is the first step to create a functional integration. After registering and formalizing your contract with BoaCompra, you will receive a SecretKey, which will be used to reference your account and validate the processed payments.

Your BoaCompra **MerchantID** & **SecretKey** can be found in MyAccount. With the data in hand, please access Payments in Woocommerce Settings (wp-admin/admin.php?page=wc-settings&tab=checkout), select the payment method you wish to use and configure the respective fields.

* Sandbox

A sandbox is an isolated testing environment that enables users to run programs or execute files without affecting the actual application, system, or platform in which they run.

All payment methods on our plugin have a sandbox environment so you can test the integration. To do this, you must activate the sandbox option of the desired method in WooCommerce -> Settings -> Payments -> Select the method and click ‘manage’ -> enable BoaCompra sandbox.

You can change the transaction status in BoaCompra's Sandbox environment through the page: https://billing-partner.boacompra.com/ - Please use the same email and password from MyAccount.

To find the transaction with the ID Order, you need to add the prefix configured in the "Invoice Prefix", concatenated with the Woocommerce order number.

Note: After testing the plugin, you should remember to disable the sandbox environment, otherwise your WooCommerce store won’t run our plugin.

* Invoice Prefix

You can set a prefix to differentiate the ID of your BoaCompra invoices.

* Logs

Enable the option for the module to record everything that is sent and received between your store and BoaCompra. To view the logs, click the Logs link or go to "WooCommerce> System Status> Logs> select log boacompra-payment-xxxxx.log" and click "View" to review details of what has been sent and received between your store and BoaCompra.

### 2 – Payment Method ###

Our plugin provides a total of 5 payment method groups, distributed among 5 different gateways, all with their own individual settings.

* Credit card - Direct Checkout
* e-Wallet - Direct Checkout
* Redirect - Hosted Checkout
* PIX - Hosted Checkout
* Boleto - Hosted Checkout

You should also enable on ‘WWCBP’ the countries you want to accept the payments methods:

* CREDIT CARD - DIRECT CHECKOUT (ONLY FOR BRAZIL)

Customers pay with a credit card directly on your e-commerce checkout without redirections.

Set the maximum number of installments accepted by the store at Credit Card Direct Checkout Settings. Select between 1 and 12 installments.

Note: The interest rate may vary depending on the store's billing ceiling or your contractual negotiation with BoaCompra.

The installments are shown after entering the card number, since it depends on the card's flag to inform the installment rate.

* BOLETO BANCÁRIO - DIRECT CHECKOUT (ONLY FOR BRAZIL)

After clicking on "Place order", the customer is taken to the Thank You page with information about the boleto (Bank Slip Barcode).

By default, when issuing a Boleto Bancário, we show a message referring to the standard billing fee of R$1.50 for issuance.

If you do not want this message to appear at checkout, email and thank you page, just uncheck the option at Boleto Bancário Settings.

* E-WALLETS - DIRECT CHECKOUT (ONLY FOR BRAZIL)

The e-wallet options available are PagSeguro and PayPal. When enabling this payment method, both e-wallets appear to the end-user:

* BOACOMPRA PAYMENT PAGE

After clicking on "Place order", your customer will be redirected to BoaCompra Payment Page to choose among all the payment methods you have made available to him. BoaCompra handles all payment information collection, sensitive data protection, and transaction security.

To enable different payment groups, please access BoaCompra Payment Page Settings:

You can check all available payment methods for your [country here](https://developers.boacompra.com/available-payments/#introduction).

* BOACOMPRA PAYMENT PAGE – PIX

After clicking on "Place order", your customer will be redirected to BoaCompra Payment Page, but only see the PIX option enabled:

### 3 - Refunds ###

You can offer a partial or total refund to your end-user.

To make a refund request, please access the desired order at WooCommerce Orders and click on the "Refund" button. Then, set the "Refunded Total" and click the "Reimbursement R$X,XX by Payment via BoaCompra" button. The module will transmit the request to BoaCompra in real-time.

If the refund cannot be completed automatically, it means BoaCompra does not allow it to be refundable. Please check the methods that are refunded [here](https://developers.boacompra.com/available-payments/#general-list).

### 4 – Recurring Payments through Boleto Direct Checkout and Woocommerce Subscriptions ###

We are integrated with [Woocommerce Subscriptions](https://woocommerce.com/products/woocommerce-subscriptions/) so you can offer recurring payments to your customer through Boleto Bancário in Brazil. If you want this extra service offered by WooCommerce, you should purchase and install Woocommerce Subscription, then process the payment with BoaCompra.

### 5 – Translations ###

The language shown in the plugin is the one settled in WordPress General Settings. Our plugin supports English, Spanish, and Portuguese.

== Screenshots ==

1. Start selling now | Step 01: Create an account
2. Start Selling Now | Step 02: Download and install our plugin
3. Start Selling Now | Step 03: Sell to Latin America and get paid anywhere in the world
4. BoaCompra's Coverage | Offer customers over 140 local payment methods
5. API Checkout View | Select which payments options are available at the checkout, including credit/debit cards, cash payments and e-wallets
6. Hosted Checkout View | Select which payments options are available at checkout

== Changelog ==

= 1.0.0 =
* First release.
= 2.0.0 =
* Complete refactoring of the plugin structure.
* Payment options into individual gateways.
* Added support for Boleto Bancário subscriptions.
* Added support for Multicurrency and Multilanguage
* Added support for the PIX payment method

 == Upgrade Notice ==

= 1.0.0 =
* First release.
= 2.0.0 =
* Complete refactoring of the plugin structure.
* Payment options into individual gateways.
* Added support for Boleto Bancário subscriptions.
* Added support for Multicurrency and Multilanguage
* Added support for the PIX payment method