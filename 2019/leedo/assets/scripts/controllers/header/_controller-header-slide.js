/***********************************************
 * HEADER SLIDE
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof $.fn.superclick == 'undefined') {
		return;
	}

	var menu = $('.vlt-slide-navigation ul.sf-menu:not(.vlt-onepage-nav)'),
		menuItem = $('.vlt-slide-navigation ul.sf-menu > li'),
		menuHolder = $('.vlt-slide-navigation-holder'),
		menuOpen = $('#vlt-slide-menu-open'),
		menuClose = $('#vlt-slide-menu-close'),
		navbarOverlay = $('.vlt-navbar-overlay'),
		onepageMenu = $('.vlt-is--header-slide.vlt-is--onepage-navigation'),
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
				targets: navbarOverlay.get(),
				duration: 150,
				opacity: [0, 1],
				begin: function() {
					navbarOverlay.css('visibility', 'visible');
				}
			})
			.add({
				targets: menuHolder.get(),
				translateX: ['100%', 0],
				begin: function() {
					// show overlay
					navbarOverlay.fadeIn(150);

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
			}, '-=150')
			.add({
				targets: menuItem.get(),
				opacity: [0, 1],
				duration: 300,
				translateX: [50, 0],
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
				translateX: 50,
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
				targets: navbarOverlay.get(),
				duration: 150,
				opacity: 0
			})
			.add({
				targets: menuHolder.get(),
				translateX: '100%',
				complete: function() {

					// hide overlay
					navbarOverlay.css('visibility', 'hidden');

					// hide holder
					menuHolder.css('visibility', 'hidden');

				}
			}, '-=150');

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

	navbarOverlay.on('click', function(e) {
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