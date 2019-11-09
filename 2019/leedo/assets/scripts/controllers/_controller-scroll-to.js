/***********************************************
 * SCROLL TO SECTION
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof $.fn.scrollTo == 'undefined') {
		return;
	}

	$('a[href^="#"]').not('[href="#"]').on('click', function(e) {
		e.preventDefault();
		if ($(this).parents('.tabs').length) {
			return;
		}
		VLTJS.html.scrollTo($(this).attr('href'), 500);
	});

})(jQuery);

/***********************************************
 * BACK TO TOP
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof $.fn.scrollTo == 'undefined') {
		return;
	}

	function _show_btn() {
		VLTJS.html.addClass('vlt-is--show-back-to-top');
		$('.vlt-btn--back-to-top').removeClass('hidden').addClass('visible');
	}

	function _hide_btn() {
		VLTJS.html.removeClass('vlt-is--show-back-to-top');
		$('.vlt-btn--back-to-top').removeClass('visible').addClass('hidden');
	}

	_hide_btn();

	VLTJS.throttleScroll(function(type, scroll) {
		var offset = VLTJS.window.height() + 100;

		if ( scroll > offset) {
			if (type === 'down') {
				_hide_btn();
			} else if (type === 'up') {
				_show_btn();
			}
		} else {
			_hide_btn();
		}

	});

	VLTJS.document.on('click', '.vlt-btn--back-to-top', function(e) {
		e.preventDefault();
		VLTJS.html.scrollTo(0, 500);
	});

})(jQuery);