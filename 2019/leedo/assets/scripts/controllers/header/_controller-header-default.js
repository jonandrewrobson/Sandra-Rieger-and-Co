/***********************************************
 * HEADER DEFAULT / ANIMATED
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof $.fn.superfish == 'undefined') {
		return;
	}

	var menu = $('.vlt-header--default ul.sf-menu:not(.vlt-onepage-nav)')
		.add('.vlt-header--animated ul.sf-menu:not(.vlt-onepage-nav)');

	// remove sub-menu class
	menu.find('li.menu-item-has-megamenu ul ul.sub-menu').removeClass();

	menu.superfish({
		popUpSelector: 'ul.sub-menu',
		delay: 0,
		speed: 300,
		speedOut: 300,
		cssArrows: false,
		animation: {
			opacity: 'show',
			marginTop: '0',
			visibility: 'visible'
		},
		animationOut: {
			opacity: 'hide',
			marginTop: '10px',
			visibility: 'hidden'
		}
	});

})(jQuery);