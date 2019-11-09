/***********************************************
 * HEADER MOBILE
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof $.fn.superclick == 'undefined') {
		return;
	}

	var navbarMain = $('.vlt-navbar--mobile');

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

	});

	// navigation
	var menu = $('.vlt-mobile-navigation'),
		menuToggle = $('#vlt-mobile-menu-toggle'),
		onepageMenu = $('.vlt-is--onepage-navigation'),
		menuIsOpen = false;

	menu.find('ul.sf-menu:not(.vlt-onepage-nav)').superclick({
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

	function _open_menu() {
		menu.slideDown();
		menuToggle.addClass('vlt-menu-burger--opened');
		menuIsOpen = true;
	}

	function _close_menu() {
		menu.slideUp();
		menuToggle.removeClass('vlt-menu-burger--opened');
		menuIsOpen = false;
	}

	menuToggle.on('click', function(e) {
		e.preventDefault();
		if (!menuIsOpen) {
			_open_menu();
		} else {
			_close_menu();
		}
	});

	// click on ESC
	VLTJS.document.keyup(function(e) {
		if (e.keyCode === 27) {
			e.preventDefault();
			_close_menu();
		}
	});

	menu.find('a[href^="#"]').not('[href="#"]').on('click', function(e) {
		e.preventDefault();
		_close_menu();
	});

	onepageMenu.on('click', 'ul.sf-menu.vlt-onepage-nav a', function(e) {
		e.preventDefault();
		_close_menu();
	});

})(jQuery);