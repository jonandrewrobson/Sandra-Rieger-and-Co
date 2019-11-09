/***********************************************
 * HEADER ASIDE
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof $.fn.superclick == 'undefined') {
		return;
	}

	$('.vlt-header--aside ul.sf-menu:not(.vlt-onepage-nav)').superclick({
		delay: 500,
		cssArrows: false,
		animation: {
			opacity: 'show',
			height: 'show'
		},
		animationOut: {
			opacity: 'hide',
			height: 'hide'
		},
	});

})(jQuery);