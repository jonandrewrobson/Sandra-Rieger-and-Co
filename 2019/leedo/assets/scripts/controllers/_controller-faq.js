/***********************************************
 * FAQ
 ***********************************************/
(function($) {

	'use strict';

	$('.vlt-faq-container').each(function() {
		var container = $(this),
			type = container.data('type'),
			index = container.data('active-index'),
			item = container.find('.vlt-faq-item');

		if (index <= 0) {
			item.removeClass('vlt-faq-item--active');
		} else {
			item.eq(index-1).addClass('vlt-faq-item--active').find('.vlt-faq-item__content').show(0);
		}

		switch(type) {

			case 'accordion':

				item.on('click', '.vlt-faq-item__header', function() {
					var $this = $(this),
						parentItem = $this.parent('.vlt-faq-item'),
						content = parentItem.find('.vlt-faq-item__content');

					if (parentItem.hasClass('vlt-faq-item--active')) {
						return;
					}

					item.removeClass('vlt-faq-item--active');
					parentItem.addClass('vlt-faq-item--active');

					item.find('.vlt-faq-item__content').slideUp(300);
					content.slideDown(300);
				});

			break;

			case 'toggle':

				item.on('click', '.vlt-faq-item__header', function() {
					var $this = $(this),
						parentItem = $this.parent('.vlt-faq-item'),
						content = parentItem.find('.vlt-faq-item__content');

					parentItem.toggleClass('vlt-faq-item--active');

					content.slideToggle(300);
				});

			break;
		}

	});

})(jQuery);