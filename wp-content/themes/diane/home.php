<?php get_header(); ?>
<?php
    $grid_slider   = get_theme_mod( 'diane_featured_grid' );
    $classic_slider   = get_theme_mod( 'diane_classic_slider' );
    $header_v2        = get_theme_mod('diane_header_2');
?>
<?php 
    if ( $grid_slider || $classic_slider && !$header_v2) {
        get_template_part('template-parts/featured', 'slider');   
    } elseif( $header_v2) {
        get_template_part('template-parts/featured', 'slider2');  
    }
    if ( get_theme_mod('diane_promobox_show') && 'bottom' == get_theme_mod('diane_promobox_layout')) {
        get_template_part('template-parts/promo', 'box');
    }
?>
<?php
    $diane_grid_3_col_posts  = get_theme_mod('diane_grid_3col_post');
    $diane_standard_posts    = get_theme_mod('diane_standard_post');
    $diane_grid_posts        = get_theme_mod('diane_grid_post');
    $chess_posts             = get_theme_mod('diane_chess_post');

if( $diane_standard_posts ) {
    get_template_part( 'template-parts/classic','page' );
} elseif ( ( $diane_grid_posts ) || ( $diane_grid_3_col_posts ) ) {
    get_template_part( 'template-parts/grid','page' );
} elseif ( $chess_posts ) {
    get_template_part('template-parts/chess','page');
} else {
    get_template_part( 'template-parts/classic','page' );
}

get_footer(); ?>