<?php

/**
 * @author: VLThemes
 * @version: 1.3.1
 */

$single_post_default_style = leedo_get_theme_mod( 'single_post_default_style' );

if ( $single_post_default_style != 'none' && $single_post_default_style != 'default' ) {
	get_template_part( 'single-post', $single_post_default_style );
	return;
}

get_header();

while ( have_posts() ) : the_post();
	get_template_part( 'template-parts/single-post/layout/layout', 'style-1' );
endwhile;

if ( leedo_get_theme_mod( 'post_navigation' ) == 'show' ) {
	echo leedo_get_post_navigation( 'post' );
}

get_footer(); ?>