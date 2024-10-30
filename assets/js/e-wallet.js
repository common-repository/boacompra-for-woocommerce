(function( $ ) {
	'use strict';

	$(function() {

    $('form.checkout').on('click', '#boacompra_wallet_pagseguro_label', function() {

      $('#boacompra_wallet_pagseguro_img').addClass('wallet-options-img-disable');

      $('#boacompra_wallet_paypal_img').removeClass('wallet-options-img-disable');

		});

    $('form.checkout').on('click', '#boacompra_wallet_paypal_label', function() {

      $('#boacompra_wallet_paypal_img').addClass('wallet-options-img-disable');

      $('#boacompra_wallet_pagseguro_img').removeClass('wallet-options-img-disable');

		});

  });

}( jQuery ));
