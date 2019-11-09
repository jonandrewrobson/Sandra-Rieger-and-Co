/***********************************************
 * HEADER / ANIMATED
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof anime == 'undefined') {
		return;
	}

	var menuItem = $('.vlt-header--animated .vlt-default-navigation ul.sf-menu > li'),
		menuToggle = $('#vlt-menu-animated-toggle'),
		menuIsOpen = false;

	menuToggle.on('click', function(e) {
		e.preventDefault();
		if (!menuIsOpen) {
			_open_menu();
		} else {
			_close_menu();
		}
	});

	menuItem.css('visibility', 'hidden');

	function _open_menu() {
		menuToggle.addClass('vlt-menu-burger--opened');
		anime({
			targets: menuItem.find('> a > span').get(),
			opacity: [0, 1],
			easing: 'easeInOutSine',
			duration: 300,
			translateX: [20, 0],
			delay: anime.stagger(100, {
				from: 'last'
			}),
			begin: function() {
				menuItem.css('visibility', 'visible');
			}
		});
		menuIsOpen = true;
	}

	function _close_menu() {
		menuToggle.removeClass('vlt-menu-burger--opened');
		anime({
			targets: menuItem.find('> a > span').get(),
			opacity: [1, 0],
			easing: 'easeInOutSine',
			duration: 300,
			translateX: [0, 20],
			delay: anime.stagger(100, {
				from: 'last'
			}),
			complete: function() {
				menuItem.css('visibility', 'hidden');
			}
		});
		menuIsOpen = false;
	}

})(jQuery);