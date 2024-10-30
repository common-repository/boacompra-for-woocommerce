<?php
/**
 * Bank Slip - HTML email instructions.
 *
 * @author  BoaCompra
 * @package Boacompra_Woocommerce/Templates
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<h2><?php _e('Payment', 'boacompra-woocommerce'); ?></h2>

<p class="order_details">

	<?php if ($tax_message === 'yes') : ?>

		<br />

		<?php _e('Some payment methods may incur administrative fees.', 'boacompra-woocommerce' ); ?>

	<?php endif; ?>

	<?php _e('Use the link below to view your bank slip. You can print and pay it on your internet banking or in a lottery retailer.', 'boacompra-woocommerce'); ?>

	<br />

	<a class="button" href="<?php echo esc_url($bank_slip_url); ?>" target="_blank"><?php _e('Pay the bank slip', 'boacompra-woocommerce'); ?></a>

	<br />

	<?php _e('After we receive the bank slip payment confirmation, your order will be processed.', 'boacompra-woocommerce'); ?>

</p>
