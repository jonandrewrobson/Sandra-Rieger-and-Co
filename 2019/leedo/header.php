<!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php echo leedo_add_html_class(); ?>">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<meta name="theme-color" content="<?php echo leedo_get_theme_mod( 'mobile_status_bar_color' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php

	do_action( 'leedo/before_site' );
	do_action( 'leedo/before_main_content' );

	$acf_header = leedo_get_theme_mod( 'page_custom_navigation', true );
	if ( leedo_get_theme_mod( 'navigation_show', $acf_header ) == 'show' ) {
		get_template_part( 'template-parts/header/header', leedo_get_theme_mod( 'navigation_type', $acf_header ) );
		get_template_part( 'template-parts/header/header', 'mobile' );
	}

	if ( leedo_get_theme_mod( 'header_search_icon' ) == 'show' ) {
		get_template_part( 'template-parts/header/header', 'search' );
	}