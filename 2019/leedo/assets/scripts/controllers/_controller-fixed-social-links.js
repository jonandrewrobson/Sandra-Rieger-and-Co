/***********************************************
 * FIXED SOCIAL LINKS
 ***********************************************/
(function($) {

	'use strict';

	var el = $('.vlt-fixed-social-links');

	if (!el.length) {
		return;
	}

	VLTJS.window.on('scroll resize', function() {

		$('.vlt-main').each(function() {
			var $this = $(this),
				sT = VLTJS.window.scrollTop(),
				thisH = $this.outerHeight(),
				oT = $this.offset().top,
				winH = VLTJS.window.height() / 2;

			if (sT >= winH && sT <= thisH + oT - winH) {
				el.removeClass('is-hidden').addClass('is-visible');
			} else {
				el.removeClass('is-visible').addClass('is-hidden');
			}
		});

	});

})(jQuery);