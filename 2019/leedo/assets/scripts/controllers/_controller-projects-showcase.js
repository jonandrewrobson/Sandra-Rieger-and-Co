/***********************************************
 * PROJECTS SHOWCASE STYLE 1
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	var el = $('.vlt-projects-showcase--style-1');

	el.each(function() {

		var $this = $(this);
		var container = $this.find('.swiper-container');

		// wrap each slide
		$this.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');

		var swiper = new Swiper(container, {
			init: false,
			lazy: true,
			loop: false,
			mousewheel: {
				releaseOnEdges: true,
			},
			slidesPerView: 1,
			speed: 1000,
			touchReleaseOnEdges: true,
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
			}
		});

		VLTJS.window.on('vlt.preloader_done', function() {
			swiper.init();
		});

		// fix transform for each item
		if (typeof $.fn.matchHeight !== 'undefined') {

			function vlthemes_content_position() {
				setTimeout(function() {
					$('.vlt-projects-showcase--style-1 .vlt-projects-showcase__content > div').matchHeight();
				}, 100);
			}

			vlthemes_content_position();
			VLTJS.debounceResize(vlthemes_content_position);
		}

	});

})(jQuery);

/***********************************************
 * PROJECTS SHOWCASE STYLE 2
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	var el = $('.vlt-projects-showcase--style-2');

	el.each(function() {
		var $this = $(this);
		var container = $this.find('.swiper-container');

		// wrap each slide
		$this.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');

		var swiper = new Swiper(container, {
			init: false,
			direction: 'vertical',
			lazy: true,
			loop: false,
			parallax: true,
			mousewheel: {
				releaseOnEdges: true,
			},
			slidesPerView: 1,
			speed: 1000,
			touchReleaseOnEdges: true,
			pagination: {
				el: $this.find('.vlt-swiper-pagination'),
				clickable: true,
			}
		});

		VLTJS.window.on('vlt.preloader_done', function() {
			swiper.init();
		});

	});

})(jQuery);

/***********************************************
 * PROJECTS SHOWCASE STYLE 3
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	var el = $('.vlt-projects-showcase--style-3');

	el.each(function() {
		var $this = $(this);
		var container = $this.find('.swiper-container');

		// wrap each slide
		$this.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');

		var swiper = new Swiper(container, {
			init: false,
			direction: 'vertical',
			lazy: true,
			loop: false,
			parallax: true,
			mousewheel: {
				releaseOnEdges: true,
			},
			slidesPerView: 1,
			speed: 1000,
			touchReleaseOnEdges: true,
			pagination: {
				el: $this.find('.vlt-swiper-pagination > .container'),
				clickable: false,
				renderBullet: function(index, className) {
					return '<span class="' + className + '">0' + (index + 1) + " - " + VLTJS.addLedingZero(container
						.find('.swiper-slide').length) + "</span>"
				}
			}
		});

		VLTJS.window.on('vlt.preloader_done', function() {
			swiper.init();
		});

	});

})(jQuery);

/***********************************************
 * PROJECTS SHOWCASE STYLE 4 / STYLE 6
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	var el = $('.vlt-projects-showcase--style-4')
		.add('.vlt-projects-showcase--style-6');

	el.each(function() {

		var $this = $(this);
		var images = $this.find('.vlt-projects-showcase__images');
		var projectsLinks = $this.find('.vlt-projects-showcase__links');
		var container = images.find('.swiper-container');

		// wrap each slide
		images.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');

		// add active class
		projectsLinks.find('li').eq(0).addClass('is-active');

		var swiper = new Swiper(container, {
			init: false,
			loop: false,
			effect: 'fade',
			lazy: true,
			slidesPerView: 1,
			allowTouchMove: false,
			speed: 1000,
			on: {
				init: function() {
					projectsLinks.on('mouseenter', 'li', function(e) {
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

/***********************************************
 * PROJECTS SHOWCASE STYLE 5
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	var el = $('.vlt-projects-showcase--style-5');

	el.each(function() {

		var $this = $(this);
		var container = $this.find('.swiper-container');

		// wrap each slide
		$this.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');

		var swiper = new Swiper(container, {
			init: false,
			direction: 'vertical',
			lazy: true,
			loop: false,
			parallax: true,
			mousewheel: {
				releaseOnEdges: true,
			},
			slidesPerView: 1,
			speed: 1000,
			touchReleaseOnEdges: true,
			pagination: {
				el: $this.find('.vlt-swiper-pagination > .container'),
				clickable: false,
				renderBullet: function(index, className) {
					return '<span class="' + className + '">0' + (index + 1) + " - " + VLTJS.addLedingZero(container.find('.swiper-slide').length) + "</span>"
				}
			}
		});

		VLTJS.window.on('vlt.preloader_done', function() {
			swiper.init();
		});

	});

})(jQuery);

/***********************************************
 * PROJECTS SHOWCASE STYLE 7
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Swiper == 'undefined') {
		return;
	}

	var el = $('.vlt-projects-showcase--style-7');

	el.each(function() {

		var $this = $(this);
		var container = $this.find('.swiper-container');
		var pagination = $this.find('.vlt-swiper-pagination > .container');

		// wrap each slide
		$this.find('.swiper-wrapper > *').wrap('<div class="swiper-slide">');

		var swiper = new Swiper(container, {
			init: false,
			preloadImages: false,
			lazy: true,
			loop: false,
			parallax: true,
			freeMode: true,
			slidesPerView: 1,
			speed: 1000,
			mousewheel: true,
			pagination: {
				el: pagination,
				clickable: true,
				renderBullet: function(index, className) {
					return '<span class="' + className + '">0' + (index + 1) + " - " + VLTJS.addLedingZero(container.find('.swiper-slide').length) + "</span>"
				}
			},
			on: {
				init: function() {
					$this.css({
						'background-color': container.find('[data-background-color]').eq(0).data('background-color')
					});
				},
				slideChange: function() {
					$this.css({
						'background-color': container.find('[data-background-color]').eq(swiper.activeIndex).data('background-color')
					});
				}
			}
		});

		VLTJS.window.on('vlt.preloader_done', function() {
			swiper.init();
		});

	});

})(jQuery);