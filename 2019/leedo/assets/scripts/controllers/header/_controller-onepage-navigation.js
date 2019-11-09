
/***********************************************
 * ONEPAGE NAVIGATION
 ***********************************************/
(function($) {

	'use strict';

	function vlthemes_onepage_navigation() {

		// onepage active menu item
		if (VLTJS.html.hasClass('vlt-is--onepage-navigation')) {
			var sections = {},
				scrollThreshold = 0.5,
				parent = null,
				linkHref = null,
				topPos = null,
				target = null;

			$('.vlt-onepage-nav > li').each(function(i) {
				linkHref = $(this).find('a').attr('href').split('#')[1];
				target = $('#' + linkHref);

				if (target.length) {
					topPos = target.offset().top;
					sections[linkHref] = Math.round(topPos);
				}
			});

			function _get_section(windowPos) {
				var value = null,
					windowHeight = Math.round(VLTJS.window.height() * scrollThreshold);

				for (var section in sections) {
					if ((sections[section] - windowHeight) < windowPos) {
						value = section;
					}
				}
				return value;
			}

			function _toggle_active_class(parent) {
				$('.vlt-onepage-nav > li').removeClass('current-menu-item');
				parent.addClass('current-menu-item');
			}

			VLTJS.window.on('scroll resize', function() {
				var windowTop = VLTJS.window.scrollTop(),
					position = _get_section(windowTop);

				if (position !== null) {
					parent = $('.vlt-onepage-nav > li').find('a[href$="#' + position + '"]').parent('li');

					if (!parent.hasClass('current-menu-item')) {
						_toggle_active_class(parent);
					}
				}
			});
		}

	}

	vlthemes_onepage_navigation();
	VLTJS.debounceResize(vlthemes_onepage_navigation);

})(jQuery);