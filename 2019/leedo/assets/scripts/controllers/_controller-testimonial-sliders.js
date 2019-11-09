/***********************************************
 * TESTIMONIAL SLIDER STYLE 1
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	var el = $('.vlt-testimonial-slider--style-1');

	el.each(function() {

		var $this = $(this);
		var container = $this.find('.swiper-container');

		// wrap each slide
		$this.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');

		var swiper = new Swiper(container, {
			init: false,
			loop: true,
			slidesPerView: 1,
			spaceBetween: 30,
			grabCursor: true,
			speed: 1000,
			parallax: true,
			autoHeight: true,
			autoplay: {
				delay: $this.data('autoplay-speed') || 5000,
				disableOnInteraction: false
			},
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

/***********************************************
 * TESTIMONIAL SLIDER STYLE 2
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	var el = $('.vlt-testimonial-slider--style-2');

	el.each(function() {

		var $this = $(this);
		var container = $this.find('.swiper-container');

		// wrap each slide
		$this.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');

		var swiper = new Swiper(container, {
			init: false,
			loop: true,
			initialSlide: 1,
			centeredSlides: true,
			slidesPerView: 1,
			spaceBetween: 30,
			grabCursor: true,
			speed: 1000,
			autoplay: {
				delay: $this.data('autoplay-speed') || 5000,
				disableOnInteraction: false
			},
			breakpoints: {
				// when window width is >= 576px
				576: {
					slidesPerView: 1
				},
				// when window width is >= 768px
				768: {
					slidesPerView: 2
				},
				// when window width is >= 992px
				992: {
					slidesPerView: 3
				}
			},
			on: {
				init: function () {
					container.find('.vlt-testimonial-item__content').matchHeight();
				},
				slideChange: function () {
					container.find('.vlt-testimonial-item__content').matchHeight();
				}
			},
		});


		VLTJS.window.on('vlt.preloader_done', function() {
			swiper.init();
		});

	});

})(jQuery);












