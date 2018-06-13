<?php
class diane_Social_Widget extends WP_Widget
{
	public function __construct()
    {
		$widget_ops = array( 'classname' => 'diane_social_widget', 'description' => esc_html__('A widget that displays your social icons', 'diane') );
		parent::__construct( 'diane_social_widget', esc_html__('Diane: Social Icons', 'diane'), $widget_ops );
	}
    
	public function widget( $args, $instance )
    {
		extract( $args );
		$title        = apply_filters('widget_title', $instance['title'] );
		$facebook     = $instance['facebook'];
		$twitter      = $instance['twitter'];
		$googleplus   = $instance['googleplus'];
		$instagram    = $instance['instagram'];
		$bloglovin    = $instance['bloglovin'];
		$youtube      = $instance['youtube'];
		$tumblr       = $instance['tumblr'];
		$pinterest    = $instance['pinterest'];
		$dribbble     = $instance['dribbble'];
		$soundcloud   = $instance['soundcloud'];
		$vimeo        = $instance['vimeo'];
		$linkedin     = $instance['linkedin'];

		echo $before_widget;
		if ( $title ) {
            echo $before_title . $title . $after_title;
		} ?>
        <div class="social-widget">
        	<?php if($facebook) : ?><a href="<?php echo esc_url( 'http://facebook.com/' ); ?><?php echo esc_html( get_theme_mod('diane_facebook') ); ?>" target="_blank"><i class="fa fa-facebook"></i></a><?php endif; ?>
        	<?php if($twitter) : ?><a href="<?php echo esc_url( 'https://twitter.com/' ); ?><?php echo esc_html( get_theme_mod('diane_twitter') ); ?>" target="_blank"><i class="fa fa-twitter"></i></a><?php endif; ?>
        	<?php if($instagram) : ?><a href="<?php echo esc_url( 'http://instagram.com/' ); ?><?php echo esc_html( get_theme_mod('diane_instagram') ); ?>" target="_blank"><i class="fa fa-instagram"></i></a><?php endif; ?>
        	<?php if($pinterest) : ?><a href="<?php echo esc_url( 'http://pinterest.com/' ); ?><?php echo esc_html( get_theme_mod('diane_pinterest') ); ?>" target="_blank"><i class="fa fa-pinterest"></i></a><?php endif; ?>
        	<?php if($bloglovin) : ?><a href="<?php echo esc_url ( 'http://bloglovin.com/' ); ?><?php echo esc_html( get_theme_mod('diane_bloglovin') ); ?>" target="_blank"><i class="fa fa-heart"></i></a><?php endif; ?>
        	<?php if($googleplus) : ?><a href="<?php echo esc_url( 'http://plus.google.com/' ); ?><?php echo esc_html( get_theme_mod('diane_google') ); ?>" target="_blank"><i class="fa fa-google-plus"></i></a><?php endif; ?>
        	<?php if($tumblr) : ?><a href="<?php echo esc_url( 'http://tumblr.com/' ); ?><?php echo esc_html( get_theme_mod('diane_tumblr') ); ?>" target="_blank"><i class="fa fa-tumblr"></i></a><?php endif; ?>
        	<?php if($youtube) : ?><a href="<?php echo esc_url( 'http://youtube.com/' ); ?><?php echo esc_html( get_theme_mod('diane_youtube') ); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a><?php endif; ?>
        	<?php if($dribbble) : ?><a href=" <?php echo esc_url( 'http://dribbble.com/' ); ?><?php echo esc_html( get_theme_mod('diane_dribbble') ); ?>" target="_blank"><i class="fa fa-dribbble"></i></a><?php endif; ?>
        	<?php if($soundcloud) : ?><a href="<?php echo esc_url( 'http://soundcloud.com/' ); ?><?php echo esc_html( get_theme_mod('diane_soundcloud') ); ?>" target="_blank"><i class="fa fa-soundcloud"></i></a><?php endif; ?>
        	<?php if($vimeo) : ?><a href="<?php echo esc_url( 'http://vimeo.com/' ); ?><?php echo esc_html( get_theme_mod('diane_vimeo') ); ?>" target="_blank"><i class="fa fa-vimeo-square"></i></a><?php endif; ?>
        	<?php if($linkedin) : ?><a href="<?php echo esc_url( get_theme_mod('diane_linkedin') ); ?>" target="_blank"><i class="fa fa-linkedin"></i></a><?php endif; ?>
        </div><?php
		echo $after_widget;
	}

	public function update( $new_instance, $old_instance )
    {
		$instance                 = $old_instance;
		$instance['title']        = strip_tags( $new_instance['title'] );
		$instance['facebook']     = strip_tags( $new_instance['facebook'] );
		$instance['twitter']      = strip_tags( $new_instance['twitter'] );
		$instance['googleplus']   = strip_tags( $new_instance['googleplus'] );
		$instance['instagram']    = strip_tags( $new_instance['instagram'] );
		$instance['bloglovin']    = strip_tags( $new_instance['bloglovin'] );
		$instance['youtube']      = strip_tags( $new_instance['youtube'] );
		$instance['tumblr']       = strip_tags( $new_instance['tumblr'] );
		$instance['pinterest']    = strip_tags( $new_instance['pinterest'] );
		$instance['dribbble']     = strip_tags( $new_instance['dribbble'] );
		$instance['soundcloud']   = strip_tags( $new_instance['soundcloud'] );
		$instance['vimeo']        = strip_tags( $new_instance['vimeo'] );
		$instance['linkedin']     = strip_tags( $new_instance['linkedin'] );
		$instance['rss']          = strip_tags( $new_instance['rss'] );
		return $instance;
	}

	public function form( $instance )
    {
		$defaults = array( 
			'title' 			=> esc_html__('Subscribe & Follow', 'diane'),
			'facebook' 		=> 'on',
			'twitter' 		=> 'on',
			'instagram' 	=> 'on', 
			'pinterest' 	=> 'on',
			'bloglovin' 	=> 'on',
			'googleplus' 	=> 'on',
			'tumblr' 			=> 'on',
			'youtube' 		=> 'on',
			'dribbble'	 	=> 'on',
			'soundcloud' 	=> 'on',
			'vimeo' 			=> 'on',
			'linkedin' 		=> 'on',
		);

		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
		<p>
			<label for="<?php echo esc_html ( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__('Title:', 'diane') ?></label>
			<input id="<?php echo esc_html( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_html( $this->get_field_name( 'title' )); ?>" value="<?php echo esc_html( $instance['title'] ); ?>" style="width:90%;" />
		</p>
		<p><?php echo esc_html__('Note: Set your social links in the Customizer', 'diane'); ?></p>
		<p>
			<label for="<?php $this->get_field_id( 'facebook' ); ?>"><?php echo esc_html__('Show Facebook:', 'diane'); ?></label>
			<input type="checkbox" id="<?php echo esc_html( $this->get_field_id( 'facebook' ) ); ?>" name="<?php echo esc_html( $this->get_field_name( 'facebook' ) ); ?>" <?php checked( (bool) $instance['facebook'], true ); ?> />
		</p>
		<p>
			<label for="<?php echo esc_html( $this->get_field_id( 'twitter' ) ); ?>"><?php echo esc_html__('Show Twitter:', 'diane'); ?></label>
			<input type="checkbox" id="<?php echo esc_html( $this->get_field_id( 'twitter' ) ); ?>" name="<?php echo esc_html( $this->get_field_name( 'twitter' ) ); ?>" <?php checked( (bool) $instance['twitter'], true ); ?> />
		</p>
		<p>
			<label for="<?php echo esc_html( $this->get_field_id( 'instagram' ) ); ?>"><?php echo esc_html__('Show Instagram:', 'diane'); ?></label>
			<input type="checkbox" id="<?php echo esc_html( $this->get_field_id( 'instagram' ) ); ?>" name="<?php echo esc_html( $this->get_field_name( 'instagram' ) ); ?>" <?php checked( (bool) $instance['instagram'], true ); ?> />
		</p>
		<p>
			<label for="<?php echo esc_html( $this->get_field_id( 'pinterest' ) ); ?>"><?php echo esc_html__('Show Pinterest:', 'diane'); ?></label>
			<input type="checkbox" id="<?php echo esc_html( $this->get_field_id( 'pinterest' ) ); ?>" name="<?php echo esc_html( $this->get_field_name( 'pinterest' ) ); ?>" <?php checked( (bool) $instance['pinterest'], true ); ?> />
		</p>
		<p>
			<label for="<?php echo esc_html( $this->get_field_id( 'bloglovin' ) ); ?>"><?php echo esc_html__('Show Bloglovin:', 'diane'); ?></label>
			<input type="checkbox" id="<?php echo esc_html( $this->get_field_id( 'bloglovin' ) ); ?>" name="<?php echo esc_html( $this->get_field_name( 'bloglovin' ) ); ?>" <?php checked( (bool) $instance['bloglovin'], true ); ?> />
		</p>
		<p>
			<label for="<?php echo esc_html( $this->get_field_id( 'googleplus' ) ); ?>"><?php echo esc_html__('Show Google Plus:', 'diane'); ?></label>
			<input type="checkbox" id="<?php echo esc_html( $this->get_field_id( 'googleplus' ) ); ?>" name="<?php echo esc_html( $this->get_field_name( 'googleplus' ) ); ?>" <?php checked( (bool) $instance['googleplus'], true ); ?> />
		</p>
		<p>
			<label for="<?php echo esc_html( $this->get_field_id( 'tumblr' ) ); ?>"><?php echo esc_html__('Show Tumblr:', 'diane'); ?></label>
			<input type="checkbox" id="<?php echo esc_html( $this->get_field_id( 'tumblr' ) ); ?>" name="<?php echo esc_html( $this->get_field_name( 'tumblr' ) ); ?>" <?php checked( (bool) $instance['tumblr'], true ); ?> />
		</p>
		<p>
			<label for="<?php echo esc_html( $this->get_field_id( 'youtube' ) ); ?>"><?php echo esc_html__('Show Youtube:', 'diane'); ?></label>
			<input type="checkbox" id="<?php echo esc_html( $this->get_field_id( 'youtube' ) ); ?>" name="<?php echo esc_html( $this->get_field_name( 'youtube' ) ); ?>" <?php checked( (bool) $instance['youtube'], true ); ?> />
		</p>
		<p>
			<label for="<?php echo esc_html( $this->get_field_id( 'dribbble' ) ); ?>"><?php echo esc_html__('Show Dribbble:', 'diane'); ?></label>
			<input type="checkbox" id="<?php echo esc_html( $this->get_field_id( 'dribbble' ) ); ?>" name="<?php echo esc_html( $this->get_field_name( 'dribbble' ) ); ?>" <?php checked( (bool) $instance['dribbble'], true ); ?> />
		</p>
		<p>
			<label for="<?php echo esc_html( $this->get_field_id( 'soundcloud' ) ); ?>"><?php echo esc_html__('Show Soundcloud:', 'diane'); ?></label>
			<input type="checkbox" id="<?php echo esc_html( $this->get_field_id( 'soundcloud' ) ); ?>" name="<?php echo esc_html( $this->get_field_name( 'soundcloud' ) ); ?>" <?php checked( (bool) $instance['soundcloud'], true ); ?> />
		</p>
		<p>
			<label for="<?php echo esc_html( $this->get_field_id( 'vimeo' ) ); ?>"><?php echo esc_html__('Show Vimeo:', 'diane'); ?></label>
			<input type="checkbox" id="<?php echo esc_html( $this->get_field_id( 'vimeo' ) ); ?>" name="<?php echo esc_html( $this->get_field_name( 'vimeo' ) ); ?>" <?php checked( (bool) $instance['vimeo'], true ); ?> />
		</p>
		<p>
			<label for="<?php echo esc_html( $this->get_field_id( 'linkedin' ) ); ?>"><?php echo esc_html__('Show Linkedin:', 'diane'); ?></label>
			<input type="checkbox" id="<?php echo esc_html( $this->get_field_id( 'linkedin' ) ); ?>" name="<?php echo esc_html( $this->get_field_name( 'linkedin' ) ); ?>" <?php checked( (bool) $instance['linkedin'], true ); ?> />
		</p><?php
	}
}

add_action( 'widgets_init', 'diane_social_init' );
function diane_social_init() {
	register_widget( 'diane_Social_Widget' );
}