/***********************************************
 * PROJECTS PREVIEW
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	var el = $('.vlt-projects-preview');

	el.each(function() {

		var $this = $(this);
		var images = $this.find('.vlt-projects-preview__images');
		var projectsLinks = $this.find('.vlt-projects-preview__links');
		var container = images.find('.swiper-container');

		// wrap each slide
		images.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');

		// add active class
		projectsLinks.find('li').eq(0).addClass('is-active');

		var swiper = new Swiper(container, {
			init: false,
			loop: false,
			slidesPerView: 1,
			effect: 'fade',
			allowTouchMove: false,
			lazy: true,
			speed: 1000,
			on: {
				init: function() {
					projectsLinks.on('click', 'li', function(e) {
						e.preventDefault();
						var currentLink = $(this);
						projectsLinks.find('li').removeClass('is-active');
						currentLink.addClass('is-active');
						swiper.slideTo(currentLink.index());
					});
				},
			}
		});

		VLTJS.window.on('vlt.preloader_done', function() {
			swiper.init();
		});

	});

})(jQuery);