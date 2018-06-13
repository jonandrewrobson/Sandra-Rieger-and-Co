<?php
/**
 * diane functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package diane
 */
define('DIANE_LIBS_URI', get_template_directory_uri() . '/libs/');
define('DIANE_JS_URI', get_template_directory_uri() . '/js/');
define('DIANE_CORE_PATH', get_template_directory() . '/core/');
define('DIANE_CORE_URI', get_template_directory_uri() . '/core/');
define('DIANE_CORE_CLASSES', DIANE_CORE_PATH . 'classes/');
define('DIANE_CORE_FUNCTIONS', DIANE_CORE_PATH . 'functions/');
define('DIANE_CORE_WIDGETS', DIANE_CORE_PATH . 'widgets/');

// Theme setup
add_action('after_setup_theme', 'diane_setup');
function diane_setup()
{
    load_theme_textdomain( 'diane', get_template_directory() . '/languages' );
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_image_size('diane-fullwidth', 1170, 0, true);
    register_nav_menus(
        array(
            'primary' => esc_html__('Primary menu', 'diane')
        )
    );
    add_theme_support('post-formats', array('video', 'audio', 'gallery','quote'));
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function diane_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'diane_content_width', 640 );
}
add_action( 'after_setup_theme', 'diane_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function diane_widgets_init() {

    register_sidebar( array(
        'name'          => esc_html__('Sidebar in Window', 'diane'),
        'id'            => 'win-sidebar',
        'description'   => esc_html__('Add widgets here.', 'diane'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));

    register_sidebar( array(
        'name'          => esc_html__('Single Sidebar', 'diane'),
        'id'            => 'single-sidebar',
        'description'   => esc_html__('Add widgets here.', 'diane'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));
       
    register_sidebar( array(
        'name'          => esc_html__('Instagram Footer', 'diane'),
        'id'            => 'instagram-footer',
        'description'   => esc_html__('Add instagram widgets here.', 'diane'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));
    
}
add_action( 'widgets_init', 'diane_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function diane_scripts() {
    //CSS
    wp_enqueue_style('bootstrap', DIANE_LIBS_URI . 'bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', DIANE_LIBS_URI . 'font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('owl', DIANE_LIBS_URI . 'owl/owl.carousel-min.css');
    wp_enqueue_style('diane-style', get_stylesheet_directory_uri() . '/style.css');

    //JS
    wp_enqueue_script('fitvids', DIANE_LIBS_URI . 'fitvids/fitvids-min.js', array('jquery'), false, true);
    wp_enqueue_script('owl-carousel', DIANE_LIBS_URI . 'owl/owl.carousel.min.js', array('jquery'), false, true);
    wp_enqueue_script('diane-scripts', DIANE_JS_URI . 'diane.js', array('jquery'), false, true);
    wp_enqueue_script( 'diane-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array('jquery'), '20151215', true );
    wp_enqueue_script( 'diane-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'diane_scripts' );

function diane_require_file( $path ) {
    if ( file_exists($path) ) {
        require $path;
    }
}

// Require core files
diane_require_file( get_template_directory() . '/core/init.php' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'diane_awesome_excerpt');

function diane_excerpt( $length ) {
    return 400;
}
add_filter( 'excerpt_length', 'diane_excerpt', 999 );

// Custom excerpt max charlength
function diane_excerpt_max($charlength)
{
    $excerpt = get_the_excerpt();
    $charlength++;

    if ( mb_strlen( $excerpt ) > $charlength ) {
        $subex = mb_substr( $excerpt, 0, $charlength - 5 );
        $exwords = explode( ' ', $subex );
        $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
        if ( $excut < 0 ) {
            echo mb_substr( $subex, 0, $excut );
        } else {
            echo $subex;
        }
    } else {
        echo $excerpt;
    }
}

//Remove the (brackets) from the category
function diane_categories_postcount_filter ($variable) {
   $variable = str_replace('(', '<span class="diane-cat-count"> ', $variable);
   $variable = str_replace(')', ' </span>', $variable);
   return $variable;
}
add_filter('wp_list_categories','diane_categories_postcount_filter');

function diane_awesome_excerpt($awesomeness_excerpt) {

    global $post;
    $raw_excerpt = $awesomeness_excerpt;
    
    if ( '' == $awesomeness_excerpt ) {
        $awesomeness_excerpt = get_the_content('');
        $awesomeness_excerpt = strip_shortcodes( $awesomeness_excerpt );
        $awesomeness_excerpt = apply_filters('the_content', $awesomeness_excerpt);
        $awesomeness_excerpt = "$awesomeness_excerpt";
        $wanted_number_of_paragraph = 3;
        $tmp = explode ('</p>', $awesomeness_excerpt);
        for ($i = 0; $i < $wanted_number_of_paragraph; ++$i) {
            if (isset($tmp[$i]) && $tmp[$i] != '') {
                $tmp_to_add[$i] = strip_tags($tmp[$i], '<p>');
            }
        }

        $awesomeness_excerpt = implode('</p>', $tmp_to_add) . '</p>';
        $awesomeness_excerpt = str_replace(']]>', ']]<', $awesomeness_excerpt); 
        $excerpt_more = apply_filters('excerpt_more', ''); 

        return $awesomeness_excerpt;
    }
    return apply_filters('diane_awesome_excerpt', $awesomeness_excerpt, $raw_excerpt);
}

//Title Google fonts 

function diane_font_pair() {
    $font = get_theme_mod('diane_fonts');
    
switch ($font) {
    case esc_html("Dosis") : 
        { 
            wp_enqueue_style( '' . esc_html('font-title', 'diane') .'', '' . esc_url('https://fonts.googleapis.com/css?family=Dosis:700') .'', false );
            wp_enqueue_style( '' . esc_html('font-body', 'diane') . '', '' . esc_url('https://fonts.googleapis.com/css?family=Open+Sans') . '', false );
        }
    break;
    case esc_html("Josefin-Sans") : 
        { 
            wp_enqueue_style( '' . esc_html('font-title', 'diane') .'', '' . esc_url('https://fonts.googleapis.com/css?family=Josefin+Sans:300') . '', false );
            wp_enqueue_style( '' . esc_html('font-body', 'diane') . '', '' . esc_url('https://fonts.googleapis.com/css?family=Open+Sans') . '', false );
        }
    break;
    case esc_html("Amaranth") : 
        { 
            wp_enqueue_style( '' . esc_html('font-title', 'diane') .'', '' . esc_url('https://fonts.googleapis.com/css?family=Amaranth:400,700') . '', false );
            wp_enqueue_style( '' . esc_html('font-body', 'diane') . '', '' . esc_url('https://fonts.googleapis.com/css?family=Titillium+Web') . '', false );
        }
    break;
    case esc_html("Nunito") : 
        { 
            wp_enqueue_style( '' . esc_html('font-title', 'diane') .'', '' . esc_url('https://fonts.googleapis.com/css?family=Nunito:700') . '', false );
            wp_enqueue_style( '' . esc_html('font-body', 'diane') . '', '' . esc_url('https://fonts.googleapis.com/css?family=Open+Sans') . '', false );
        }
    break;
    case esc_html("Oswald") : 
        { 
            wp_enqueue_style( '' . esc_html('font-title', 'diane') .'', '' . esc_url('https://fonts.googleapis.com/css?family=Oswald:700') . '', false );
            wp_enqueue_style( '' . esc_html('font-body', 'diane') . '', '' . esc_url('https://fonts.googleapis.com/css?family=Droid+Sans') . '', false );
        }
    break;
    case esc_html("Oxygen") : 
        { 
            wp_enqueue_style( '' . esc_html('font-title', 'diane') .'', '' . esc_url('https://fonts.googleapis.com/css?family=Oxygen:700') . '', false );
            wp_enqueue_style( '' . esc_html('font-body', 'diane') . '', '' . esc_url('https://fonts.googleapis.com/css?family=Source+Sans+Pro') . '', false );
        }
    break;
    case esc_html("Squada-One") : 
        { 
            wp_enqueue_style( '' . esc_html('font-title', 'diane') .'', '' . esc_url('https://fonts.googleapis.com/css?family=Squada+One') . '', false );
            wp_enqueue_style( '' . esc_html('font-body', 'diane') . '', '' . esc_url('https://fonts.googleapis.com/css?family=Allerta') . '', false );
        }
    break;
    case esc_html("Yeseva-One") : 
        { 
            wp_enqueue_style( '' . esc_html('font-title', 'diane') .'', '' . esc_url('https://fonts.googleapis.com/css?family=Yeseva+One') . '', false );
            wp_enqueue_style( '' . esc_html('font-body', 'diane') . '', '' . esc_url('https://fonts.googleapis.com/css?family=Crimson+Text') . '', false );
        }
    break;
    case esc_html("Lora") : 
        { 
            wp_enqueue_style( '' . esc_html('font-title', 'diane') .'', '' . esc_url('https://fonts.googleapis.com/css?family=Lora') . '', false );
            wp_enqueue_style( '' . esc_html('font-body', 'diane') . '', '' . esc_url('https://fonts.googleapis.com/css?family=Source+Sans+Pro') . '', false );
        }
    break;
    case esc_html("Old-Standard-TT") : 
        { 
            wp_enqueue_style( '' . esc_html('font-title', 'diane') .'', '' . esc_url('https://fonts.googleapis.com/css?family=Old+Standard+TT') . '', false );
            wp_enqueue_style( '' . esc_html('font-body', 'diane') . '', '' . esc_url('https://fonts.googleapis.com/css?family=Questrial') . '', false );
        }
    break;
    case esc_html("Playfair Display") : 
        { 
            wp_enqueue_style( '' . esc_html('font-title', 'diane') .'', '' . esc_url('https://fonts.googleapis.com/css?family=Playfair+Display') . '', false );
            wp_enqueue_style( '' . esc_html('font-body', 'diane') . '', '' . esc_url('https://fonts.googleapis.com/css?family=Droid+Sans') . '', false );
        }
    break;
    case esc_html("Bree-Serif") : 
        { 
            wp_enqueue_style( '' . esc_html('font-title', 'diane') .'', '' . esc_url('https://fonts.googleapis.com/css?family=Bree+Serif') . '', false );
            wp_enqueue_style( '' . esc_html('font-body', 'diane') . '', '' . esc_url('https://fonts.googleapis.com/css?family=Lora') . '', false );
        }
    break;
    case esc_html("Playfair-Display-Lora") : 
        { 
            wp_enqueue_style( '' . esc_html('font-title', 'diane') .'', '' . esc_url('https://fonts.googleapis.com/css?family=Playfair+Display') . '', false );
            wp_enqueue_style( '' . esc_html('font-body', 'diane') . '', '' . esc_url('https://fonts.googleapis.com/css?family=Lora') . '', false );
        }
    break;
    case esc_html("Raleway") : 
        { 
            wp_enqueue_style( '' . esc_html('font-title', 'diane') .'', '' . esc_url('https://fonts.googleapis.com/css?family=Raleway:400,500,600') . '', false );
            wp_enqueue_style( '' . esc_html('font-body', 'diane') . '', '' . esc_url('https://fonts.googleapis.com/css?family=Merriweather') . '', false );
        }
    break;
    case esc_html("Raleway-Roboto-Slab") : 
        { 
            wp_enqueue_style( '' . esc_html('font-title', 'diane') .'', '' . esc_url('https://fonts.googleapis.com/css?family=Raleway:400,500,600') . '', false );
            wp_enqueue_style( '' . esc_html('font-body', 'diane') . '', '' . esc_url('https://fonts.googleapis.com/css?family=Roboto+Slab') . '', false );
        }
    break;
    case esc_html("Poppins") : 
        { 
            wp_enqueue_style( '' . esc_html('font-title', 'diane') .'', '' . esc_url('https://fonts.googleapis.com/css?family=Poppins') . '', false );
            wp_enqueue_style( '' . esc_html('font-body', 'diane') . '', '' . esc_url('https://fonts.googleapis.com/css?family=Muli') . '', false );
        }
    break;
    default : {
        wp_enqueue_style( '' . esc_html('font-title', 'diane') .'', '' . esc_url('https://fonts.googleapis.com/css?family=Raleway:400,500,600') . '', false );
        wp_enqueue_style( '' . esc_html('font-body', 'diane') . '', '' . esc_url('https://fonts.googleapis.com/css?family=Roboto+Slab') . '', false );
    }
}
    
}

add_action( 'wp_enqueue_scripts', 'diane_font_pair' );

// Register Fonts

function diane_fonts_url() {
    $font_url = '';
    
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'diane' ) ) {
       $font_url = add_query_arg( 'family', urlencode( 'Dancing Script|Source Code Pro:700,400&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

// Enqueue scripts and styles.

function diane_font_scripts() {
    wp_enqueue_style( 'diane-fonts', diane_fonts_url(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'diane_font_scripts' );

add_filter('wp_link_pages_args', 'diane_link_pages_args_prevnext_add');

/**
 * Add prev and next links to a numbered page link list
 */
function diane_link_pages_args_prevnext_add($args)
{
    global $page, $numpages, $more, $pagenow;

    if (!$args['next_or_number'] == 'next_and_number') 
        return $args; # exit early

    $args['next_or_number'] = 'number'; # keep numbering for the main part
    if (!$more)
        return $args; # exit early

    if($page-1) # there is a previous page
        $args['before'] .= _wp_link_page($page-1)
            . $args['link_before']. $args['previouspagelink'] . $args['link_after'] . '</a>'
        ;

    if ($page<$numpages) # there is a next page
        $args['after'] = _wp_link_page($page+1)
            . $args['link_before'] . ' ' . $args['nextpagelink'] . $args['link_after'] . '</a>'
            . $args['after']
        ;

    return $args;
}

// Include the TGM_Plugin_Activation class
add_action('tgmpa_register', 'diane_register_required_plugins');
function diane_register_required_plugins()
{
    $plugins = array(
        array(
            'name'                  => esc_html__('Vafpress Post Formats UI', 'diane'),
            'slug'                  => 'vafpress-post-formats-ui-develop',
            'source'                => esc_url('http://resources.az-theme.net/vafpress-post-formats-ui-develop.zip'),
            'required'              => true,
            'version'               => '1.5',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => ''
        ),
        array(
            'name'                  => esc_html__('Contact Form 7', 'diane'),
            'slug'                  => 'contact-form-7',
            'required'              => false,
            'version'               => '',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => ''
        ),
        array(
            'name'                  => esc_html__('WP Instagram Widget', 'diane'),
            'slug'                  => 'wp-instagram-widget',
            'required'              => false,
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => ''
        ),
        array(
            'name'                  => esc_html__('MailChimp for WordPress Lite', 'diane'),
            'slug'                  => 'mailchimp-for-wp',
            'required'              => false,
            'version'               => '',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => ''
        ),
        array(
            'name'                  => esc_html__('Recent Posts Widget Extended', 'diane'),
            'slug'                  => 'recent-posts-widget-extended',
            'required'              => false,
            'version'               => '',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => ''
        )
    );

    $config = array(
        'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => true,                    // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to out
    );
    tgmpa($plugins, $config);
}