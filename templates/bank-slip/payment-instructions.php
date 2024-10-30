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

<div class="woocommerce-message">

	<span class="woocommerce-table woocommerce-table--order-details shop_table order_details">

		<div class="woocommerce-column woocommerce-column--1 boacompra_bank_slip_barcode">

			<h3 class="woocommerce-column__title"><?php _e('Bank Slip Barcode', 'boacompra-woocommerce'); ?></h3>

			<div class="">

				<svg id="bank_slip_barcode" jsbarcode-format="code39" jsbarcode-value="<?php echo $bank_slip_barcode; ?>" jsbarcode-textmargin="0" jsbarcode-displayvalue="false" ></svg>

			</div>

		</div>

		<div class="woocommerce-column woocommerce-column--1 boacompra_bank_slip_line_div">

			<input type="text" value="<?php echo $bank_slip_line; ?>" disabled="disabled" name="boacompra_bank_slip_line" class="boacompra_bank_slip_line_input"/>

			<button class="boacompra_bank_slip_line_button" id="boacompra_bank_slip_line_button" data-clipboard-text='<?php echo $bank_slip_line; ?>'><?php _e('Copy Code', 'boacompra-woocommerce'); ?></button><br />

		</div>

		<div class="woocommerce-column woocommerce-column--1 boacompra_bank_slip_pay_div">

			<a class="button boacompra_bank_slip_pay_button" href="<?php echo esc_url($bank_slip_url); ?>" target="_blank">

				<?php _e( 'Pay the bank slip', 'boacompra-woocommerce' ); ?>

			</a>

			<?php _e( 'Please click in the following button to view your bank slip.', 'boacompra-woocommerce' ); ?><br /><?php _e( 'You can print and pay it on your internet banking or in a lottery retailer.', 'boacompra-woocommerce' ); ?><br /><?php _e( 'After we receive the bank slip payment confirmation, your order will be processed.', 'boacompra-woocommerce' ); ?>

		</div>

	</span>

</div>
