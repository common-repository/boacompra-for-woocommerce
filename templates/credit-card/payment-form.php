<?php
/**
 * Credit Card - Checkout form.
 *
 * @author  BoaCompra
 * @package Boacompra_Woocommerce/Templates
 * @version 1.1.0
 */

if (!defined('ABSPATH')) {

	exit;

} // end if;
?>

<fieldset id="boacompra_credit_card_fields">

	<input type="hidden" id="boacompra_card_token" name="boacompra_card_token" value=""/>

	<input type="hidden" id="boacompra_card_brand" name="boacompra_card_brand" value=""/>

	<div id="new-credit-card">

		<p class="form-row form-row-first boacompra-credit-card-div">

			<label for="boacompra_card_number">

				<?php _e('Card number', 'boacompra-woocommerce' ); ?> <span class="required">*</span>

			</label>

			<input id="boacompra_card_number" class="input-text wc-credit-card-form-card-number" type="text" style="font-size: 1.5em; padding: 8px;" name="boacompra_card_number" data-boacompra="number"/>

		</p>

		<p class="form-row form-row-last boacompra-credit-card-div">

			<label for="boacompra_card_holder_name">

				<?php _e('Name printed on card', 'boacompra-woocommerce'); ?> <span class="required">*</span>

			</label>

			<input id="boacompra_card_holder_name" name="boacompra_card_holder_name" class="input-text" type="text" autocomplete="off" style="font-size: 1.5em; padding: 8px;" data-boacompra="full_name" />

		</p>

		<div class="clear"></div>

		<p class="form-row form-row-first">

			<label for="boacompra_card_expiry"><?php _e('Expiry date (MM/YYYY)', 'boacompra-woocommerce'); ?> <span class="required">*</span></label>

			<input id="boacompra_card_expiry" type="text" name="boacompra_card_expiry" class="input-text wc-credit-card-form-card-expiry" style="font-size: 1.5em; padding: 8px;" maxlength='10'/>

		</p>

		<p class="form-row form-row-last">

			<label for="boacompra_card_cvv"><?php _e( 'Security code', 'boacompra-woocommerce' ); ?> <span class="required">*</span></label>

			<input id="boacompra_card_cvv" name="boacompra_card_cvv" class="input-text wc-credit-card-form-card-cvc" type="text" style="font-size: 1.5em; padding: 8px;" data-boacompra="verification_value" />

		</p>

		<div class="clear"></div>

	</div>

	<?php if ($max_installments > 1) : ?>

	<p class="form-row form-row-wide boacompra">

		<label for="boacompra_card_installments"><?php _e('Installments', 'boacompra-woocommerce' ); ?> <span class="required">*</span></label>

		<select id="boacompra_card_installments" name="boacompra_card_installments" style="font-size: 1.5em; padding: 4px; width: 100%;">

			<option value=""><?php echo __('Type your card number', 'boacompra-woocommerce'); ?></option>

		</select>

	</p>

	<?php else : ?>

		<input type="hidden" value="1" id="boacompra_card_installments" name="boacompra_card_installments">

	<?php endif; ?>

	<div class="clear"></div>

</fieldset>
