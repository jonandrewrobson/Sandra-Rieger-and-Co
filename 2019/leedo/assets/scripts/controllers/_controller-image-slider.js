/***********************************************
 * IMAGE SLIDER
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	var el = $('.vlt-image-slider');

	el.each(function() {

		var $this = $(this);
		var container = $this.find('.swiper-container');

		// wrap each slide
		$this.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');

		var swiper = new Swiper(container, {
			init: false,
			slidesPerView: 1,
			grabCursor: true,
			speed: 1000,
			navigation: {
				nextEl: $this.find('.vlt-swiper-button-next'),
				prevEl: $this.find('.vlt-swiper-button-prev'),
			},
			pagination: {
				el: $this.find('.vlt-swiper-pagination'),
				clickable: true,
			},
		});

		VLTJS.window.on('vlt.preloader_done', function() {
			swiper.init();
		});

	});

})(jQuery);