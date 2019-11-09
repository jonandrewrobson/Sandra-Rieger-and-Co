/***********************************************
 * PROGRESS BAR CIRCLE
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof $.fn.circleProgress == 'undefined') {
		return;
	}

	$('.vlt-progress-bar-circle').each(function() {

		var $duration = 3000,
			$delay = 150;

		var $this = $(this),
			finalValue = $this.data('value') || 0,
			size = $this.data('size') || 160,
			thickness = $this.data('thickness') || 4,
			fill = $this.data('bar-color') || '#ee3364',
			emptyFill = $this.data('track-color') || 'rgba(0,0,0,.1)',
			barContainer = $this.find('.vlt-progress-bar-circle__bar'),
			finalValueContainer = $this.find('.vlt-progress-bar-circle__bar > h5'),
			obj = {
				count: 0
			};

		// predraw
		barContainer.circleProgress({
			startAngle: -Math.PI / 2,
			value: 0,
			size: size,
			thickness: thickness,
			fill: fill,
			emptyFill: emptyFill,
			animation: {
				duration: $duration,
				easing: 'circleProgressEasing',
				delay: $delay
			}
		});

		$(this).one('inview', function() {

			barContainer.circleProgress({
				value: finalValue / 100,
			});

			anime({
				targets: obj,
				count: finalValue,
				round: 1,
				easing: 'linear',
				duration: $duration,
				delay: $delay,
				update: function() {
					finalValueContainer.text(obj.count);
				}
			});

		});
	});

})(jQuery);