<?php

/**
 * @author: VLThemes
 * @version: 1.3.1
 */

/**
* Theme path image
*/
$theme_path_images = LEEDO_THEME_DIRECTORY . 'assets/img/';

/**
 * Wrapper for Kirki
 */
if ( ! class_exists( 'VLT_Options' ) ) {
	class VLT_Options {

		private static $default_options = array();

		public static function add_config( $args ) {
			if ( class_exists( 'Kirki' ) && isset( $args ) && is_array( $args ) ) {
				Kirki::add_config( 'leedo_customize', $args );
			}
		}

		public static function add_panel( $name, $args ) {
			if ( class_exists( 'Kirki' ) && isset( $args ) && is_array( $args ) ) {
				Kirki::add_panel( $name, $args );
			}
		}

		public static function add_section( $name, $args ) {
			if ( class_exists( 'Kirki' ) && isset( $args ) && is_array( $args ) ) {
				Kirki::add_section( $name, $args );
			}
		}

		public static function add_field( $args ) {
			if ( isset( $args ) && is_array( $args ) ) {
				if ( class_exists( 'Kirki' ) ) {
					Kirki::add_field( 'leedo_customize', $args );
				}
				if ( isset( $args['settings'] ) && isset( $args['default'] ) ) {
					self::$default_options[$args['settings']] = $args['default'];
				}
			}
		}

		public static function get_option( $name, $default = null ) {
			$value = get_theme_mod( $name, null );

			if ( $value === null ) {
				$value = isset( self::$default_options[$name] ) ? self::$default_options[$name] : null;
			}

			if ( $value === null ) {
				$value = $default;
			}

			return $value;
		}

	}
}

/**
 * Custom get_theme_mod
 */
if ( ! function_exists( 'leedo_get_theme_mod' ) ) {
	function leedo_get_theme_mod( $name = null, $use_acf = null, $postID = null, $acf_name = null ) {

		$value = null;

		if ( $name == null ) {
			return $value;
		}

		// try get value from meta box
		if ( $use_acf ) {
			$value = leedo_get_field( $acf_name ? $acf_name : $name, $postID );
		}

		// get value from options
		if ( $value == null ) {
			if ( class_exists( 'VLT_Options' ) ) {
				$value = VLT_Options::get_option( $name );
			}
		}

		if ( is_archive() || is_search() || is_404() ) {
			if ( class_exists( 'VLT_Options' ) ) {
				$value = VLT_Options::get_option( $name );
			}
		}

		$value = apply_filters( 'leedo/get_theme_mod', $value, $name );

		return $value;

	}
}

/**
 * Get value from acf field
 */
if ( ! function_exists( 'leedo_get_field' ) ) {
	function leedo_get_field( $name = null, $postID = null ) {

		$value = null;

		// try get value from meta box
		if ( function_exists( 'get_field' ) ) {
			if ( $postID == null ) {
				$postID = get_the_ID();
			}
			$value = get_field( $name, $postID );
		}

		return $value;

	}
}

/**
 * Get social icons
 */
if ( ! function_exists( 'leedo_get_social_icons' ) ) {
	function leedo_get_social_icons() {
		$social_icons = array(
			'fab fa-twitch' => esc_html__( 'Twitch', 'leedo' ),
			'fab fa-vimeo' => esc_html__( 'Vimeo', 'leedo' ),
			'fab fa-youtube' => esc_html__( 'Youtube', 'leedo' ),
			'fab fa-facebook-f' => esc_html__( 'Facebook', 'leedo' ),
			'fab fa-twitter' => esc_html__( 'Twitter', 'leedo' ),
			'fab fa-pinterest' => esc_html__( 'Pinterest', 'leedo' ),
			'fab fa-instagram' => esc_html__( 'Instagram', 'leedo' ),
			'fab fa-linkedin-in' => esc_html__( 'LinkedIn', 'leedo' ),
			'fab fa-behance' => esc_html__( 'Behance', 'leedo' ),
			'fab fa-odnoklassniki' => esc_html__( 'Odnoklassniki', 'leedo' ),
			'fab fa-skype' => esc_html__( 'Skype', 'leedo' ),
			'fab fa-vk' => esc_html__( 'VK', 'leedo' ),
			'fab fa-steam' => esc_html__( 'Steam', 'leedo' ),
			'fab fa-bitbucket' => esc_html__( 'Bitbucket', 'leedo' ),
			'fab fa-dropbox' => esc_html__( 'Dropbox', 'leedo' ),
			'fab fa-dribbble' => esc_html__( 'Dribbble', 'leedo' ),
			'fab fa-deviantart' => esc_html__( 'Deviantart', 'leedo' ),
			'fab fa-flickr' => esc_html__( 'Flickr', 'leedo' ),
			'fab fa-foursquare' => esc_html__( 'Foursquare', 'leedo' ),
			'fab fa-goodreads' => esc_html__( 'Goodreads', 'leedo' ),
			'fab fa-github' => esc_html__( 'Github', 'leedo' ),
			'fab fa-medium' => esc_html__( 'Medium', 'leedo' ),
			'fab fa-paypal' => esc_html__( 'PayPal', 'leedo' ),
			'fab fa-reddit' => esc_html__( 'Reddit', 'leedo' ),
			'fab fa-soundcloud' => esc_html__( 'SoundCloud', 'leedo' ),
			'fab fa-slack' => esc_html__( 'Slack', 'leedo' ),
			'fab fa-tumblr' => esc_html__( 'Tumblr', 'leedo' ),
			'fab fa-spotify' => esc_html__( 'Spotify', 'leedo' ),
			'fab fa-wordpress' => esc_html__( 'WordPress', 'leedo' )
		);
		return apply_filters( 'leedo/get_social_icons', $social_icons );
	}
}

/**
 * Add custom choice
 */
if ( ! function_exists( 'leedo_add_custom_choice' ) ) {
	function leedo_add_custom_choice() {
		return array(
			'fonts' => apply_filters( 'vlthemes/kirki_font_choices', array() )
		);
	}
}