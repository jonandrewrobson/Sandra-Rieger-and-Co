/***********************************************
 * PROGRESS BAR
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof anime == 'undefined') {
		return;
	}

	$('.vlt-progress-bar').each(function() {

		var $duration = 3000,
			$delay = 150;

		$(this).one('inview', function() {
			var $this = $(this),
				finalValue = $this.data('value') || 0,
				finalValueContainer = $this.find('.percent'),
				barContainer = $this.find('.vlt-progress-bar__bar > span'),
				obj = {
					count: 0
				};

			anime({
				targets: obj,
				count: finalValue,
				round: 1,
				easing: 'linear',
				duration: $duration / 2,
				delay: $delay,
				update: function() {
					finalValueContainer.text(obj.count);
				}
			});

			anime({
				targets: barContainer[0],
				width: finalValue + '%',
				duration: $duration,
				delay: $delay
			});
		});
	});

})(jQuery);