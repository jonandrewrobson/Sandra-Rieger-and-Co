/***********************************************
 * FIXED AUDIO LINK
 ***********************************************/
(function($) {

	'use strict';

	// check if plugin defined
	if (typeof Howl == 'undefined') {
		return;
	}

	function audio_link() {

		$('.vlt-fixed-audio-link').each(function() {
			var $this = $(this),
				audioSrc = $this.attr('href') || '',
				audioAutoplay = $this.data('audio-autoplay') || false,
				audioLoop = $this.data('audio-loop') || false,
				audioVolume = $this.data('audio-volume') || 0.5;

			var audio = new Howl({
				src: [audioSrc],
				autoplay: audioAutoplay,
				loop: audioLoop,
				volume: audioVolume,
				onplay: function() {
					$this.removeClass('pause').addClass('play');
				},
				onpause: function() {
					$this.removeClass('play').addClass('pause');
				}
			});

			if ($this.filter('.play')) {
				$this.find('i').removeClass('fa-play').addClass('fa-pause');
			}

			$this.on('click', function(e) {
				e.preventDefault();
				var currentButton = $(this),
					icon = currentButton.find('i');
				if (currentButton.hasClass('pause')){
					icon.removeClass('fa-play').addClass('fa-pause');
					audio.play();
				} else {
					icon.removeClass('fa-pause').addClass('fa-play');
					audio.pause();
				}
			});

		});

	}

	VLTJS.window.on('vlt.preloader_done', function() {
		audio_link();
	});

})(jQuery);