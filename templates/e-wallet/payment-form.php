<?php
/**
 * E=Wallet - Checkout form.
 *
 * @author  BoaCompra
 * @package Boacompra_Woocommerce/Templates
 * @version 1.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<fieldset id="boacompra_wallets">

	<div id="boacompra_wallets_div" class="form-row boacompra-d-flex boacompra-d-flex-inline">

			<?php foreach($wallets as $wallet_key => $wallet_value) : ?>

				<div class="">

					<label id="boacompra_wallet_<?php echo $wallet_key; ?>_label" for='boacompra_wallet_<?php echo $wallet_key; ?>'>

						<img id="boacompra_wallet_<?php echo $wallet_key; ?>_img" class="wallet-options-img" src="<?php echo $wallet_value['img']; ?>">

						<input id="boacompra_wallet_<?php echo $wallet_key; ?>" name="boacompra_wallet" class='wallet-options-input' type='radio' value='<?php echo $wallet_key; ?>'/>

					</label>

				</div>

			<?php endforeach; ?>

	</div>

</fieldset>
