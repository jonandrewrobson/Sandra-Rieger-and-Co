/***********************************************
 * FIT TEXT
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof $.fn.fitText == 'undefined') {
		return;
	}

	function fit_text() {
		$('.vlt-fit-text').each(function() {
			var $this = $(this),
				compressor = $this.data('comp-rate') || 1;
			$this.fitText(compressor, {
				minFontSize: $this.data('min-size') || Number.NEGATIVE_INFINITY,
				maxFontSize: $this.data('max-size') || Number.POSITIVE_INFINITY
			});
		});
	}

	VLTJS.window.trigger('resize');

	fit_text();
	VLTJS.debounceResize(fit_text);

})(jQuery);