<?php
/**
 * Credit Card - Plain email instructions.
 *
 * @author  BoaCompra
 * @package Boacompra_Woocommerce/Templates
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

_e( 'Payment', 'boacompra-woocommerce' );

echo "\n\n";

echo sprintf( __( 'Payment successfully made using credit card in %s.', 'boacompra-woocommerce' ), $installments . 'x' );

echo "\n\n****************************************************\n\n";
