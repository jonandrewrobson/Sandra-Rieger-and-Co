/***********************************************
 * AWARDS SLIDER
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	var el = $('.vlt-awards-list');

	el.each(function() {

		var $this = $(this);
		var container = $this.find('.swiper-container');

		// wrap each slide
		$this.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');

		var swiper = new Swiper(container, {
			init: false,
			loop: false,
			slidesPerView: 'auto',
			spaceBetween: 110,
			speed: 1000,
			mousewheel: {
				releaseOnEdges: false,
			},
			freeMode: true,
			slidesOffsetBefore: container.get(0).getBoundingClientRect().left + 15,
			slidesOffsetAfter: container.get(0).getBoundingClientRect().left + 15,
		});

		VLTJS.window.on('vlt.preloader_done', function() {
			swiper.init();
		});

	});

})(jQuery);