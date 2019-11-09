/***********************************************
 * PRELOADER
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof NProgress != 'undefined') {
		NProgress.start();
	}

	VLTJS.window.on('load', function() {
		VLTJS.window.trigger('vlt.preloader_done');
		VLTJS.html.addClass('vlt-is-page-loaded');
		if (typeof NProgress != 'undefined') {
			NProgress.done();
		}
	});

})(jQuery);