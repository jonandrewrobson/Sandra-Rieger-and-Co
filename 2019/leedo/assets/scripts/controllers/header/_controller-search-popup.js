/***********************************************
 * SEARCH POPUP
 ***********************************************/
(function($) {

	'use strict';

	var search = $('.vlt-search-wrapper'),
		searchToggle = $('.vlt-menu-search-icon'),
		searchIsOpen = false;

	function _open_search() {
		// start animation
		if (typeof anime != 'undefined') {
			anime({
				targets: search.get(),
				easing: 'easeInOutQuad',
				duration: 300,
				opacity: [0, 1],
				begin: function() {
					// show search
					search.css('visibility', 'visible');
				},
				complete: function() {
					search.find('input[type="text"]').focus();
				}
			})
		}
		searchIsOpen = true;
	}

	function _close_search() {
		// start animation
		if (typeof anime != 'undefined') {
			anime({
				targets: search.get(),
				easing: 'easeInOutQuad',
				duration: 250,
				opacity: 0,
				complete: function() {
					search.find('input[type="text"]').blur();
					// hide search
					search.css('visibility', 'hidden');
				}
			})
		}
		searchIsOpen = false;
	}

	searchToggle.on('click', function(e) {
		e.preventDefault();
		if (!searchIsOpen) {
			_open_search();
		} else {
			_close_search();
		}
	});

	VLTJS.throttleScroll(function(type, scroll) {
		var start = 300;
		if (scroll > start) {
			_close_search();
		}
	});

	// click on ESC
	VLTJS.document.keyup(function(e) {
		if (e.keyCode === 27) {
			e.preventDefault();
			_close_search();
		}
	});

	search.on('click', function(e) {
		_close_search();
	});

	search.on('click', 'input[type="text"]', function(e) {
		e.stopPropagation();
	});

})(jQuery);