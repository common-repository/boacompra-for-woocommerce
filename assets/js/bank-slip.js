(function( $ ) {
	'use strict';

	$( function() {

		let boacompra_barcode = $('#bank_slip_barcode');

		if (boacompra_barcode.length) {

			JsBarcode('#bank_slip_barcode', boacompra_bank_slip.bank_slip_barcode, {
				fontSize: 40,
				background: "#000000",
				lineColor: "#ffffff",
				margin: 40,
			}).init();

		  $('#bank_slip_barcode').css('max-width', '100%');

		} // end if;

		var clipboard = new ClipboardJS('#boacompra_bank_slip_line_button');

	});

}( jQuery ));
