<?php
/**
 * Admin View: Notice - Currency not supported.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="error">
	<p><strong><?php _e( 'boacompra disabled', 'boacompra-woocommerce' ); ?></strong>: <?php printf( __( 'Currency <code>%s</code> is not supported. WooCommerce boacompra only works with Brazilian real (BRL).', 'boacompra-woocommerce' ), get_woocommerce_currency() ); ?>
	</p>
</div>
