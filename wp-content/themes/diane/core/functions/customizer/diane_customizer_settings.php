<?php
function diane_sanitize_default( $value ) {
	return $value;
}

/** diane - Customizer - Add Settings */
function diane_register_theme_customizer( $wp_customize )
{
	/** Add Sections -----------------------------------------------------------------------------------------------*/
  $wp_customize->add_section( 'diane_new_section_home', array(
   		'title'        => esc_html__('Home Page Options', 'diane'),
   		'description'  => null
	) ); 
  $wp_customize->add_section( 'diane_new_section_post_options', array(
        'title'        => esc_html__('Post Options', 'diane'),
        'description'  => null
    ) );
  $wp_customize->add_section( 'diane_new_section_social_bar', array(
        'title'        => esc_html__('Social Bar Options', 'diane'),
        'description'  => null
    ) ); 
  $wp_customize->add_section( 'diane_new_section_header', array(
        'title'        => esc_html__('Header Options', 'diane'),
        'description'  => null
    ) );
  $wp_customize->add_section( 'diane_new_section_single', array(
        'title'        => esc_html__('Single Options', 'diane'),
        'description'  => null
    ) );
  $wp_customize->add_section( 'diane_new_section_sidebar', array(
        'title'        => esc_html__('Sidebar Options', 'diane'),
        'description'  => null
    ) );
  $wp_customize->add_section( 'diane_new_section_fonts', array(
   		'title'        => esc_html__('Font Pair', 'diane'),
   		'description'  => null
	) );
  $wp_customize->add_section( 'diane_new_section_logo', array(
   		'title'        => esc_html__('logo Upload', 'diane'),
   		'description'  => null
	) ); 
  $wp_customize->add_section( 'diane_new_section_promobox', array(
   		'title'        => esc_html__('Promo Box', 'diane'),
   		'description'  => null
	) );
  $wp_customize->add_section( 'diane_new_section_social_media', array(
   		'title'        => esc_html__('Social Media Settings', 'diane'),
   		'description'  => esc_html__('Enter your social media usernames. Icons will not show if left blank.', 'diane')
	) );
  $wp_customize->add_section( 'diane_new_section_featured' , array(
		'title'       => esc_html__('Featured Slider Settings', 'diane'),
		'description' => ''
    ) );
  $wp_customize->add_section( 'diane_new_section_footer', array(
   		'title'        => esc_html__('Footer Settings', 'diane'),
   		'description'  => ''
	) );
  $wp_customize->add_section( 'diane_new_section_color_accent', array(
   		'title'        => esc_html__('Button Options', 'diane'),
   		'description'  => ''
	) );


    /** Add Settings------------------------------------------------------------------------------------------*/

    //posts options

    $wp_customize->add_setting( 'diane_post_share', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_facebook_share', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_twitter_share', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_pinterest_share', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_google_share', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    //single
    $wp_customize->add_setting( 'diane_single_without_logo', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_single_sidebar', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_also_post', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    //Color for most elements 
    $wp_customize->add_setting( 'diane_elements_color', array(
        'default' => '#f37e7e',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    //Social bar 

    $wp_customize->add_setting( 'diane_social_bar', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_social_facebook', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_social_twitter', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_social_pinterest', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_social_google', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_social_instagram', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    
    /** Blog layout settings */
    $wp_customize->add_setting( 'diane_blog_layout', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_first_post', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_grid_post', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_chess_post', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_grid_3col_post', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_standard_post', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_win_sidebar', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_sidebar_img', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
     
    //fonts
    $wp_customize->add_setting( 'diane_fonts', array(
        'default' => 'Raleway-Roboto-Slab',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
  
    $wp_customize->add_setting( 'diane_site_bcolor', array(
        'default' => '#fff',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'diane_logo_up', array(
        'default'           => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_header_logo_enable', array(
        'default'           => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_header_2', array(
        'default'           => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_enable_search', array(
        'default'           => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    /* PromoBox */

    $wp_customize->add_setting( 'diane_promobox_show', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    $wp_customize->add_setting( 'diane_promobox_layout', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    $wp_customize->add_setting( 'diane_number_promobox', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_promobox_one_title', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_promobox_one_link', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'diane_promobox_one_image', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_promobox_two_title', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'diane_promobox_two_link', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'diane_promobox_two_image', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_promobox_three_title', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'diane_promobox_three_link', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'diane_promobox_three_image', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_promobox_four_title', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'diane_promobox_four_link', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'diane_promobox_four_image', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) ); 

    $wp_customize->add_setting( 'diane_promobox_five_title', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'diane_promobox_five_link', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'diane_promobox_five_image', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_promobox_six_title', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'diane_promobox_six_link', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'diane_promobox_six_image', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    
    // Slider area
	$wp_customize->add_setting( 'diane_classic_slider', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_featured_cat', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_featured_slider_item', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_featured_grid', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_slider_area', array(
        'default' => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    
  
    // Social media settings
    $wp_customize->add_setting( 'diane_facebook', array(
        'default'           => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    $wp_customize->add_setting( 'diane_twitter', array(
        'default'           => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    $wp_customize->add_setting( 'diane_instagram', array(
        'default'           => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    $wp_customize->add_setting( 'diane_pinterest', array(
        'default'           => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    $wp_customize->add_setting( 'diane_tumblr', array(
        'default'           => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    $wp_customize->add_setting( 'diane_bloglovin', array(
        'default'           => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    $wp_customize->add_setting( 'diane_tumblr', array(
        'default'           => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    $wp_customize->add_setting( 'diane_google', array(
        'default'           => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    $wp_customize->add_setting( 'diane_youtube', array(
        'default'           => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    $wp_customize->add_setting( 'diane_dribbble', array(
        'default'           => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    $wp_customize->add_setting( 'diane_soundcloud', array(
        'default'           => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );    
    $wp_customize->add_setting( 'diane_vimeo', array(
        'default'           => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );
    $wp_customize->add_setting( 'diane_linkedin', array(
        'default'           => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_footer_copyright', array(
        'default'           => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    //Button Options
    $wp_customize->add_setting( 'diane_button_rounded', array(
        'default'           => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_button_square', array(
        'default'           => '',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_button_color', array(
        'default' => '#fff',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_hover_button_color', array(
        'default' => '#f37e7e',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_button_border_color', array(
        'default' => '#ddd',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_button_border_hover_color', array(
        'default' => '#f37e7e',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_button_text_color', array(
        'default' => '#222',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    $wp_customize->add_setting( 'diane_button_text_hover_color', array(
        'default' => '#fff',
        'sanitize_callback' => 'diane_sanitize_default'
    ) );

    /** Add Constrol--------------------------------------------------------------------------------------------*/

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_button_rounded',
            array(
                'label'      => esc_html__('Rounded buttons', 'diane'),
                'section'    => 'diane_new_section_color_accent',
                'settings'   => 'diane_button_rounded',
                'type'       => 'checkbox',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_button_square',
            array(
                'label'      => esc_html__('Square buttons', 'diane'),
                'section'    => 'diane_new_section_color_accent',
                'settings'   => 'diane_button_square',
                'type'       => 'checkbox',
            )
        )
    );
    
        /** PromoBox */
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'diane_promobox_show',
			array(
				'label'      => esc_html__('Show Promobox', 'diane'),
				'section'    => 'diane_new_section_promobox',
				'settings'   => 'diane_promobox_show',
				'type'		 => 'checkbox'
		        )	
			)
	);
    
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_promobox_layout',
            array(
                'label'      => esc_html__('Display Promo boxes :', 'diane'),
                'section'    => 'diane_new_section_promobox',
                'settings'   => 'diane_promobox_layout',
                'type'       => 'radio',
                    'choices' => array(
                         'top'    => esc_html__('Over Slider', 'diane'),
                         'bottom' => esc_html__('Below Slider', 'diane'),
                ),  
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_number_promobox',
            array(
                'label'      => esc_html__('Choose number of Promo Boxes:', 'diane'),
                'section'    => 'diane_new_section_promobox',
                'settings'   => 'diane_number_promobox',
                'type'       => 'select',
                    'choices' => array(
                         '1'    => esc_html__('One', 'diane'),
                         '2'    => esc_html__('Two', 'diane'),
                         '3'    => esc_html__('Three', 'diane'),
                         '4'    => esc_html__('Four', 'diane'),
                         '5'    => esc_html__('Five', 'diane'),
                         '6'    => esc_html__('Six', 'diane'),
                ),  
            )
        )
    );
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'diane_promobox_one_title',
			array(
				'label'      => esc_html__('Box 1 # Title', 'diane'),
				'section'    => 'diane_new_section_promobox',
				'settings'   => 'diane_promobox_one_title',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'diane_promobox_one_link',
			array(
				'label'      => esc_html__('Box 1 # URL', 'diane'),
				'section'    => 'diane_new_section_promobox',
				'settings'   => 'diane_promobox_one_link',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'diane_promobox_one_image',
			array(
				'label'      => esc_html__('Box 1 # Image', 'diane'),
				'section'    => 'diane_new_section_promobox',
				'settings'   => 'diane_promobox_one_image'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'diane_promobox_two_title',
			array(
				'label'      => esc_html__('Box 2 # Title', 'diane'),
				'section'    => 'diane_new_section_promobox',
				'settings'   => 'diane_promobox_two_title',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'diane_promobox_two_link',
			array(
				'label'      => esc_html__('Box 2 # URL', 'diane'),
				'section'    => 'diane_new_section_promobox',
				'settings'   => 'diane_promobox_two_link',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'diane_promobox_two_image',
			array(
				'label'      => esc_html__('Box 2 # Image', 'diane'),
				'section'    => 'diane_new_section_promobox',
				'settings'   => 'diane_promobox_two_image'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'diane_promobox_three_title',
			array(
				'label'      => esc_html__('Box 3 # Title', 'diane'),
				'section'    => 'diane_new_section_promobox',
				'settings'   => 'diane_promobox_three_title',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'diane_promobox_three_link',
			array(
				'label'      => esc_html__('Box 3 # URL', 'diane'),
				'section'    => 'diane_new_section_promobox',
				'settings'   => 'diane_promobox_three_link',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'diane_promobox_three_image',
			array(
				'label'      => esc_html__('Box 3 # Image', 'diane'),
				'section'    => 'diane_new_section_promobox',
				'settings'   => 'diane_promobox_three_image'
			)
		)
	);
    
     $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'diane_promobox_four_title',
			array(
				'label'      => esc_html__('Box 4 # Title', 'diane'),
				'section'    => 'diane_new_section_promobox',
				'settings'   => 'diane_promobox_four_title',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'diane_promobox_four_link',
			array(
				'label'      => esc_html__('Box 4 # URL', 'diane'),
				'section'    => 'diane_new_section_promobox',
				'settings'   => 'diane_promobox_four_link',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'diane_promobox_four_image',
			array(
				'label'      => esc_html__('Box 4 # Image', 'diane'),
				'section'    => 'diane_new_section_promobox',
				'settings'   => 'diane_promobox_four_image'
			)
		)
	);
     $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'diane_promobox_five_title',
			array(
				'label'      => esc_html__('Box 5 # Title', 'diane'),
				'section'    => 'diane_new_section_promobox',
				'settings'   => 'diane_promobox_five_title',
				'type'		 => 'text'
			)
		)
	);
    
  $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'diane_promobox_five_link',
			array(
				'label'      => esc_html__('Box 5 # URL', 'diane'),
				'section'    => 'diane_new_section_promobox',
				'settings'   => 'diane_promobox_five_link',
				'type'		 => 'text'
			)
		)
	);
    
  $wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'diane_promobox_five_image',
			array(
				'label'      => esc_html__('Box 5 # Image', 'diane'),
				'section'    => 'diane_new_section_promobox',
				'settings'   => 'diane_promobox_five_image'
			)
		)
	);
   $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_promobox_six_title',
            array(
                'label'      => esc_html__('Box 6 # Title', 'diane'),
                'section'    => 'diane_new_section_promobox',
                'settings'   => 'diane_promobox_six_title',
                'type'       => 'text'
            )
        )
    );
    
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_promobox_six_link',
            array(
                'label'      => esc_html__('Box 6 # URL', 'diane'),
                'section'    => 'diane_new_section_promobox',
                'settings'   => 'diane_promobox_six_link',
                'type'       => 'text'
            )
        )
    );
    
  $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'diane_promobox_six_image',
            array(
                'label'      => esc_html__('Box 6 # Image', 'diane'),
                'section'    => 'diane_new_section_promobox',
                'settings'   => 'diane_promobox_six_image'
            )
        )
    );
    
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_win_sidebar',
            array(
                'label'      => esc_html__('Enable Sidebar in Window', 'diane'),
                'section'    => 'diane_new_section_sidebar',
                'settings'   => 'diane_win_sidebar',
                'type' => 'checkbox',
            )
        )
    );

   $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_sidebar_img',
            array(
                'label'      => esc_html__('Square Images in Sidebars', 'diane'),
                'section'    => 'diane_new_section_sidebar',
                'settings'   => 'diane_sidebar_img',
                'type' => 'checkbox',
            )
        )
    );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_enable_search',
            array(
                'label'      => esc_html__('Enable Search', 'diane'),
                'section'    => 'diane_new_section_header',
                'settings'   => 'diane_enable_search',
                'type' => 'checkbox',
            )
        )
  ); 
         
  $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'diane_first_post',
			array(
				'label'      => esc_html__('Large First Post on HOMEPAGE', 'diane'),
				'section'    => 'diane_new_section_home',
				'settings'   => 'diane_first_post',
				'type' => 'checkbox',
			)
		)
	);

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_social_bar',
            array(
                'label'      => esc_html__('Enable Social Bar', 'diane'),
                'section'    => 'diane_new_section_social_bar',
                'settings'   => 'diane_social_bar',
                'type' => 'checkbox',
            )
        )
    );
      $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_social_facebook',
            array(
                'label'      => esc_html__('Enable Facebook Media', 'diane'),
                'section'    => 'diane_new_section_social_bar',
                'settings'   => 'diane_social_facebook',
                'type' => 'checkbox',
            )
        )
    );  
      $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_social_twitter',
            array(
                'label'      => esc_html__('Enable Twitter Media', 'diane'),
                'section'    => 'diane_new_section_social_bar',
                'settings'   => 'diane_social_twitter',
                'type' => 'checkbox',
            )
        )
    );  
      $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_social_pinterest',
            array(
                'label'      => esc_html__('Enable Pinterest Media', 'diane'),
                'section'    => 'diane_new_section_social_bar',
                'settings'   => 'diane_social_pinterest',
                'type' => 'checkbox',
            )
        )
    );  
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_social_google',
            array(
                'label'      => esc_html__('Enable Google Media', 'diane'),
                'section'    => 'diane_new_section_social_bar',
                'settings'   => 'diane_social_google',
                'type' => 'checkbox',
            )
        )
    ); 

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_social_instagram',
            array(
                'label'      => esc_html__('Enable Instagram Media', 'diane'),
                'section'    => 'diane_new_section_social_bar',
                'settings'   => 'diane_social_instagram',
                'type' => 'checkbox',
            )
        )
    );      

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_grid_post',
            array(
                'label'      => esc_html__('Grid Posts on HOMEPAGE', 'diane'),
                'section'    => 'diane_new_section_home',
                'settings'   => 'diane_grid_post',
                'type' => 'checkbox',
            )
        )
    );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_chess_post',
            array(
                'label'      => esc_html__('Chess Posts on HOMEPAGE', 'diane'),
                'section'    => 'diane_new_section_home',
                'settings'   => 'diane_chess_post',
                'type' => 'checkbox',
            )
        )
    );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_grid_3col_post',
            array(
                'label'      => esc_html__('Grid( 3 column ) Posts on HOMEPAGE', 'diane'),
                'section'    => 'diane_new_section_home',
                'settings'   => 'diane_grid_3col_post',
                'type' => 'checkbox',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_standard_post',
            array(
                'label'      => esc_html__('Standard Posts on HOMEPAGE', 'diane'),
                'section'    => 'diane_new_section_home',
                'settings'   => 'diane_standard_post',
                'type' => 'checkbox',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_also_post',
            array(
                'label'      => esc_html__('Enable Related Post', 'diane'),
                'section'    => 'diane_new_section_single',
                'settings'   => 'diane_also_post',
                'type' => 'checkbox',
            )
        )
    );

    //posts options

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_post_share',
            array(
                'label'      => esc_html__('Enable share icons', 'diane'),
                'section'    => 'diane_new_section_post_options',
                'settings'   => 'diane_post_share',
                'type' => 'checkbox',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_twitter_share',
            array(
                'label'      => esc_html__('Enable Twitter', 'diane'),
                'section'    => 'diane_new_section_post_options',
                'settings'   => 'diane_twitter_share',
                'type' => 'checkbox',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_facebook_share',
            array(
                'label'      => esc_html__('Enable Facebook', 'diane'),
                'section'    => 'diane_new_section_post_options',
                'settings'   => 'diane_facebook_share',
                'type' => 'checkbox',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_pinterest_share',
            array(
                'label'      => esc_html__('Enable Pinterest', 'diane'),
                'section'    => 'diane_new_section_post_options',
                'settings'   => 'diane_pinterest_share',
                'type' => 'checkbox',
            )
        )
    );

   $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_google_share',
            array(
                'label'      => esc_html__('Enable Google+', 'diane'),
                'section'    => 'diane_new_section_post_options',
                'settings'   => 'diane_google_share',
                'type' => 'checkbox',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_single_without_logo',
            array(
                'label'      => esc_html__('Disable Logo on SINGLE', 'diane'),
                'section'    => 'diane_new_section_single',
                'settings'   => 'diane_single_without_logo',
                'type' => 'checkbox',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_single_sidebar',
            array(
                'label'      => esc_html__('Enable Sidebar on SINGLE', 'diane'),
                'section'    => 'diane_new_section_single',
                'settings'   => 'diane_single_sidebar',
                'type' => 'checkbox',
            )
        )
    );
            
     // Fonts for title
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'diane_font',
			array(
				'label'      => esc_html__('Choose Font Pair For Title & Body', 'diane'),
				'section'    => 'diane_new_section_fonts',
				'settings'   => 'diane_fonts',
                'type'       => 'select', 
			    'choices'    => array( 
                'Amaranth'                => esc_html__('Amaranth & Titillium Web', 'diane'),
			    'Dosis'                   => esc_html__('Dosis & Open Sans', 'diane'),
			    'Nunito'                  => esc_html__('Nunito & Open Sans', 'diane'),
			    'Oxygen'                  => esc_html__('Oxygen & Source Sans Pro', 'diane'),
			    'Oswald'                  => esc_html__('Oswald & Droid Sans', 'diane'),
			    'Squada-One'              => esc_html__('Squada One & Allerta', 'diane'),
			    'Josefin-Sans'            => esc_html__('Josefin Sans & Allerta', 'diane'),
			    'Yeseva-One'              => esc_html__('Yeseva One & Crimson Text', 'diane'),
                'Lora'                    => esc_html__('Lora & Source Sans Pro', 'diane'),
                'Old-Standard-TT'         => esc_html__('Old Standard TT & Questrial', 'diane'),
                'Playfair-Display'        => esc_html__('Playfair Display & Droid Sans', 'diane'),
                'Bree-Serif'    		  => esc_html__('Bree Serif & Lora', 'diane'),
                'Playfair-Display-Lora'   => esc_html__('Playfair Display & Lora', 'diane'),
                'Raleway'                 => esc_html__('Raleway & Merriweather', 'diane'),
                'Raleway-Roboto-Slab'     => esc_html__('Raleway & Roboto Slab', 'diane'),
                'Poppins'                 => esc_html__('Poppins & Muli', 'diane'),
			     )
			)
		)
	);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_slider_area',
            array(
                'label'      => esc_html__('Full-Width Slider', 'diane'),
                'section'    => 'diane_new_section_featured',
                'settings'   => 'diane_slider_area',
                'type'       => 'checkbox',
                'priority'   => 1
            )
        )
    );
   
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'diane_classic_slider',
			array(
                'label'      => esc_html__('Classic Slider', 'diane'),
				'section'    => 'diane_new_section_featured',
				'settings'   => 'diane_classic_slider',
				'type'       => 'checkbox',
                'priority'	 => 2
			)
		)
	);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_featured_grid',
            array(
                'label'      => esc_html__('Grid Slider', 'diane'),
                'section'    => 'diane_new_section_featured',
                'settings'   => 'diane_featured_grid',
                'type'       => 'checkbox',
                'priority'   => 3
            )
        )
    );

	$wp_customize->add_control(
		new Customize_Number_Control(
			$wp_customize,
			'diane_featured_slider_item',
			array(
				'label'      => esc_html__('Amount of Slides', 'diane'),
				'section'    => 'diane_new_section_featured',
				'settings'   => 'diane_featured_slider_item',
				'type'		 => 'number',
				'priority'	 => 4
			)
		)
	);

    $wp_customize->add_control(
        new WP_Customize_Category_Control(
            $wp_customize,
            'diane_featured_cat',
            array(
                'label'    => 'Select Featured Category',
                'settings' => 'diane_featured_cat',
                'section'  => 'diane_new_section_featured',
                'priority'   => 5
            )
        )
    );
  
    // Menu Logo Upload
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'diane_logo_up',
            array(
                'label'    		=> esc_html__('Upload logo', 'diane'),
                'section'  		=> 'diane_new_section_logo',
                'settings' 		=> 'diane_logo_up',
                'priority'	 	=> 2
    ) ) );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_header_logo_enable',
            array(
                'label'      => esc_html__('Enable logo', 'diane'),
                'section'    => 'diane_new_section_logo',
                'settings'   => 'diane_header_logo_enable',
                'type'       => 'checkbox',
                'priority'   => 1
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'diane_header_2',
            array(
                'label'      => esc_html__('Header v2', 'diane'),
                'section'    => 'diane_new_section_header',
                'settings'   => 'diane_header_2',
                'type'       => 'checkbox',
            )
        )
    );

    // Social Media
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'facebook',
			array(
				'label'      => esc_html__('Facebook', 'diane'),
				'section'    => 'diane_new_section_social_media',
				'settings'   => 'diane_facebook',
				'type'		 => 'text',
				'priority'	 => 1
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'twitter',
			array(
				'label'      => esc_html__('Twitter', 'diane'),
				'section'    => 'diane_new_section_social_media',
				'settings'   => 'diane_twitter',
				'type'		 => 'text',
				'priority'	 => 2
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'instagram',
			array(
				'label'      => esc_html__('Instagram', 'diane'),
				'section'    => 'diane_new_section_social_media',
				'settings'   => 'diane_instagram',
				'type'		 => 'text',
				'priority'	 => 3
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'pinterest',
			array(
				'label'      => esc_html__('Pinterest', 'diane'),
				'section'    => 'diane_new_section_social_media',
				'settings'   => 'diane_pinterest',
				'type'		 => 'text',
				'priority'	 => 4
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'bloglovin',
			array(
				'label'      => esc_html__('Bloglovin', 'diane'),
				'section'    => 'diane_new_section_social_media',
				'settings'   => 'diane_bloglovin',
				'type'		 => 'text',
				'priority'	 => 5
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'google',
			array(
				'label'      => esc_html__('Google Plus', 'diane'),
				'section'    => 'diane_new_section_social_media',
				'settings'   => 'diane_google',
				'type'		 => 'text',
				'priority'	 => 6
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'tumblr',
			array(
				'label'      => esc_html__('Tumblr', 'diane'),
				'section'    => 'diane_new_section_social_media',
				'settings'   => 'diane_tumblr',
				'type'		 => 'text',
				'priority'	 => 7
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'youtube',
			array(
				'label'      => esc_html__('Youtube', 'diane'),
				'section'    => 'diane_new_section_social_media',
				'settings'   => 'diane_youtube',
				'type'		 => 'text',
				'priority'	 => 8
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'dribbble',
			array(
				'label'      => esc_html__('Dribbble', 'diane'),
				'section'    => 'diane_new_section_social_media',
				'settings'   => 'diane_dribbble',
				'type'		 => 'text',
				'priority'	 => 9
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'soundcloud',
			array(
				'label'      => esc_html__('Soundcloud', 'diane'),
				'section'    => 'diane_new_section_social_media',
				'settings'   => 'diane_soundcloud',
				'type'		 => 'text',
				'priority'	 => 10
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'vimeo',
			array(
				'label'      => esc_html__('Vimeo', 'diane'),
				'section'    => 'diane_new_section_social_media',
				'settings'   => 'diane_vimeo',
				'type'		 => 'text',
				'priority'	 => 11
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'linkedin',
			array(
				'label'      => esc_html__('Linkedin (Use full URL to your Linkedin profile)', 'diane'),
				'section'    => 'diane_new_section_social_media',
				'settings'   => 'diane_linkedin',
				'type'		 => 'text',
				'priority'	 => 12
			)
		)
	);

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'diane_elements_color',
            array(
                'label'      => esc_html__('Color for most elements', 'diane'),
                'section'    => 'diane_new_section_color_accent',
                'settings'   => 'diane_elements_color',
            )
        )
    );

    //Button color
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'diane_button_color',
            array(
                'label'      => esc_html__('Background color for Buttons', 'diane'),
                'section'    => 'diane_new_section_color_accent',
                'settings'   => 'diane_button_color',
            )
        )
    );

    //Button hover color
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'diane_hover_button_color',
            array(
                'label'      => esc_html__('Hover Background color for Buttons', 'diane'),
                'section'    => 'diane_new_section_color_accent',
                'settings'   => 'diane_hover_button_color',
            )
        )
    );

    //Button border color
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'diane_button_border_color',
            array(
                'label'      => esc_html__('Border color for Buttons', 'diane'),
                'section'    => 'diane_new_section_color_accent',
                'settings'   => 'diane_button_border_color',
            )
        )
    );

    //Button border color
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'diane_button_border_hover_color',
            array(
                'label'      => esc_html__('Border hover color for Buttons', 'diane'),
                'section'    => 'diane_new_section_color_accent',
                'settings'   => 'diane_button_border_hover_color',
            )
        )
    );

    //Button border color
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'diane_button_text_color',
            array(
                'label'      => esc_html__('Text color for Buttons', 'diane'),
                'section'    => 'diane_new_section_color_accent',
                'settings'   => 'diane_button_text_color',
            )
        )
    );

    //Button border color
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'diane_button_text_hover_color',
            array(
                'label'      => esc_html__('Hover text color for Buttons', 'diane'),
                'section'    => 'diane_new_section_color_accent',
                'settings'   => 'diane_button_text_hover_color',
            )
        )
    );

   // Footer
  $wp_customize->add_control(
	new WP_Customize_Control(
			$wp_customize,
			'footer_copyright',
			array(
				'label'      => esc_html__('Footer copyright text', 'diane'),
				'section'    => 'diane_new_section_footer',
				'settings'   => 'diane_footer_copyright',
				'type'		 => 'text',
				'priority'	 => 2
			)
		)
	);

}
add_action( 'customize_register', 'diane_register_theme_customizer' );