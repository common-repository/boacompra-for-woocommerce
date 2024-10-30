<?php
/**
 * Bank Slip - Payment instructions.
 *
 * @author  BoaCompra
 * @package Boacompra_Woocommerce/Templates
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<div id="boacompra-bank-slip-instructions">

	<p>

		<?php echo __( 'After clicking on "Place order", you will have access to the bank slip, which you can print and pay on your internet banking or in a lottery retailer.', 'boacompra-woocommerce'); ?><br />

		<?php echo __( 'Note: The order will be confirmed only after the payment approval.', 'boacompra-woocommerce'); ?>

		<?php if ($tax_message && $tax_message === 'yes') : ?>

			<br />

			<strong><?php _e( 'Tax', 'boacompra-woocommerce' ); ?>:</strong> <?php _e('R$ 1,50 (rate applied to cover management risk costs of the payment method).', 'boacompra-woocommerce' ); ?>

		<?php endif; ?>

	</p>

</div>
