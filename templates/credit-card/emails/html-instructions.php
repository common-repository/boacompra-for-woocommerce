<?php
/**
 * Credit Card - HTML email instructions.
 *
 * @author  BoaCompra
 * @package Boacompra_Woocommerce/Templates
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<h2><?php _e( 'Payment', 'boacompra-woocommerce' ); ?></h2>

<p class="order_details"><?php echo sprintf( __( 'Payment successfully made using credit card in %s.', 'boacompra-woocommerce' ), '<strong>' . $installments . 'x</strong>' ); ?></p>
