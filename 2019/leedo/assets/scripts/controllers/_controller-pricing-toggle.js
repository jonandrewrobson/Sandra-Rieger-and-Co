/***********************************************
 * PRICING TOGGLE
 ***********************************************/
(function($) {

	'use strict';

	var checkbox = $('.vlt-pricing-toggle input[type="checkbox"]'),
		toggler = $('.vlt-pricing-toggle .toggler');

	checkbox.on('click', function() {
		toggler.toggleClass('toggler--is-active');
		$('.vlt-pricing-table--monthly-annually').toggleClass('vlt-pricing-table--is-annually');
	});

	toggler.on('click', function() {
		checkbox.trigger('click');
	});

})(jQuery);