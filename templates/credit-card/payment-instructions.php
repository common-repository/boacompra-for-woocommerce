<?php
/**
 * Credit Card - Payment instructions.
 *
 * @author  BoaCompra
 * @package Boacompra_Woocommerce/Templates
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<div class="woocommerce-message">
	<span><?php echo sprintf( __( 'Payment successfully made using credit card in %s.', 'boacompra-woocommerce' ), '<strong>' . $installments . 'x</strong>' ); ?></span>
</div>
