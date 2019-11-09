/***********************************************
 * NAVBAR
 ***********************************************/
(function($) {

	'use strict';

	var navbarMain = $('.vlt-navbar--main');

	// sticky navbar
	var navbarHeight = navbarMain.length ? navbarMain.offset().top : 0;

	// fake navbar
	var navbarFake = $('<div class="vlt-fake-navbar">').hide();

	function _fixed_navbar() {
		navbarMain.addClass('vlt-navbar--fixed');
		navbarFake.show();
	}

	function _unfixed_navbar() {
		navbarMain.removeClass('vlt-navbar--fixed');
		navbarFake.hide();
	}

	function _on_scroll_navbar() {
		if (VLTJS.window.scrollTop() >= navbarHeight) {
			_fixed_navbar();
		} else {
			_unfixed_navbar();
		}
	}

	if (navbarMain.hasClass('vlt-navbar--sticky')) {

		VLTJS.window.on('scroll resize', _on_scroll_navbar);

		_on_scroll_navbar();

		// append fake navbar
		navbarMain.after(navbarFake);

		// fake navbar height after resize
		navbarFake.height(navbarMain.innerHeight());

		VLTJS.debounceResize(function() {
			navbarFake.height(navbarMain.innerHeight());
		});

	}

	// hide navbar on scroll

	var navbarHideOnScroll = navbarMain.filter('.vlt-navbar--hide-on-scroll');

	VLTJS.throttleScroll(function(type, scroll) {
		var start = 450;

		function _show_navbar() {
			navbarHideOnScroll.removeClass('vlt-on-scroll-hide').addClass('vlt-on-scroll-show');
		}

		function _hide_navbar() {
			navbarHideOnScroll.removeClass('vlt-on-scroll-show').addClass('vlt-on-scroll-hide');
		}

		// hide or show
		if (type === 'down' && scroll > start) {
			_hide_navbar();
		} else if (type === 'up' || type === 'end' || type === 'start') {
			_show_navbar();
		}

		// add solid color
		if (navbarMain.hasClass('vlt-navbar--transparent') && navbarMain.hasClass('vlt-navbar--sticky')) {
			scroll > navbarMain.height() ? navbarMain.addClass('vlt-navbar--solid') : navbarMain.removeClass('vlt-navbar--solid');
		}
	});

})(jQuery);