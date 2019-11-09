/***********************************************
 * FOOTER FIXED
 ***********************************************/
(function($) {

	'use strict';

	function vlthemes_fixed_footer() {
		var footer = $('.vlt-footer').filter('.vlt-footer--fixed'),
			siteWrapperInner = $('.vlt-site-wrapper__inner'),
			footerHeight = footer.outerHeight();

		siteWrapperInner.css({
			'margin-bottom': footerHeight
		});
	}

	vlthemes_fixed_footer();
	VLTJS.debounceResize(vlthemes_fixed_footer);

})(jQuery);