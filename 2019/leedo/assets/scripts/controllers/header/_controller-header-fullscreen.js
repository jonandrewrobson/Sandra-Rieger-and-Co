/***********************************************
 * HEADER FULLSCREEN
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof $.fn.superclick == 'undefined') {
		return;
	}

	var menu = $('.vlt-fullscreen-navigation ul.sf-menu:not(.vlt-onepage-nav)'),
		menuHolder = $('.vlt-fullscreen-navigation-holder'),
		menuItem = $('.vlt-fullscreen-navigation ul.sf-menu > li'),
		menuOpen = $('#vlt-fullscreen-menu-open'),
		menuClose = $('#vlt-fullscreen-menu-close'),
		onepageMenu = $('.vlt-is--header-fullscreen.vlt-is--onepage-navigation'),
		menuIsOpen = false;

	menu.superclick({
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

	menuItem.css('visibility', 'hidden');

	function _open_menu() {
		// start animation
		if (typeof anime != 'undefined') {

			anime.timeline({
				easing: 'easeInOutQuad',
				duration: 600
			})
			.add({
				targets: menuHolder.get(),
				duration: 350,
				opacity: [0, 1],
				begin: function() {

					// show holder
					menuHolder.css('visibility', 'visible');

					// play sound
					if (typeof VLT_MENU_TOGGLE_SOUND_CDATA != 'undefined' && typeof Howl != 'undefined') {
						new Howl({
							src: [VLT_MENU_TOGGLE_SOUND_CDATA.open],
							autoplay: true,
							loop: false,
							volume: 0.4
						});
					}
				}
			})
			.add({
				targets: menuItem.get(),
				opacity: [0, 1],
				duration: 300,
				translateY: [50, 0],
				delay: anime.stagger(100, {
					from: 'first'
				}),
				begin: function() {
					// show menu item
					menuItem.css('visibility', 'visible');
				}
			});
		}

		menuIsOpen = true;
	}

	function _close_menu() {

		// start animation
		if (typeof anime != 'undefined') {

			anime.timeline({
				easing: 'easeInOutQuad',
				duration: 600,
			}).add({
				targets: menuItem.get(),
				opacity: 0,
				duration: 300,
				translateY: 50,
				delay: anime.stagger(100, {
					from: 'last'
				}),
				begin: function() {
					// play sound
					if (typeof VLT_MENU_TOGGLE_SOUND_CDATA != 'undefined' && typeof Howl != 'undefined') {
						new Howl({
							src: [VLT_MENU_TOGGLE_SOUND_CDATA.close],
							autoplay: true,
							loop: false,
							volume: 0.4
						});
					}
				},
				complete: function() {

					// hide menu item
					menuItem.css('visibility', 'hidden');

				}
			})
			.add({
				targets: menuHolder.get(),
				opacity: 0,
				complete: function() {
					// hide holder
					menuHolder.css('visibility', 'hidden');
				}
			}, '-=300');

		}

	menuIsOpen = false;
	}

	menuOpen.on('click', function(e) {
		e.preventDefault();
		if (!menuIsOpen) {
			_open_menu();
		} else {
			_close_menu();
		}
	});

	menuClose.on('click', function(e) {
		e.preventDefault();
		_close_menu();
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