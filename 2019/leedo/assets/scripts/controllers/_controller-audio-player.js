/***********************************************
 * AUDIO PLAYER
 ***********************************************/
(function($) {

	'use strict';

	var el = $('.vlt-audio-player');

	el.each(function() {

		var $this = $(this),
			playButton = $this.find('.vlt-audio-player__button > a'),
			playButtonIcon = playButton.find('i'),
			audio = $this.find('audio'),
			audioObject = audio.get(0);

		audio.on('ended', function() {
			playButtonIcon.removeClass('leedo-pause-button').addClass('leedo-play-button');
		});

		playButton.on('click', function(e) {
			e.preventDefault();
			$('.vlt-audio-player__button > a > i').removeClass('leedo-pause-button').addClass('leedo-play-button');
			if (audioObject.paused) {
				audioObject.play();
				playButtonIcon.removeClass('leedo-play-button').addClass('leedo-pause-button');
			} else {
				audioObject.pause();
				playButtonIcon.removeClass('leedo-pause-button').addClass('leedo-play-button');
			}

		});
	});

})(jQuery);