<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package diane
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="<?php echo esc_url('http://gmpg.org/xfn/11'); ?>">

<?php wp_head(); ?>
</head>

<?php 
    $header_text            = display_header_text();
    $enable_header_logo     = get_theme_mod( 'diane_header_logo_enable' );
    $header_logo            = get_theme_mod( 'diane_logo_up' );
    $enable_search          = get_theme_mod( 'diane_enable_search' );
    $win_sidebar            = get_theme_mod( 'diane_win_sidebar' );
    $grid_slider            = get_theme_mod( 'diane_featured_grid' );
    $classic_slider         = get_theme_mod( 'diane_classic_slider' );
    $header_v2              = get_theme_mod( 'diane_header_2' );
    $enable_social		    = get_theme_mod( 'diane_social_bar' );
    $enable_facebook        = get_theme_mod( 'diane_social_facebook' );
    $enable_twitter         = get_theme_mod( 'diane_social_twitter' );
    $enable_pint            = get_theme_mod( 'diane_social_pinterest' );
    $enable_google          = get_theme_mod( 'diane_social_google' );
    $enable_instagram       = get_theme_mod( 'diane_social_instagram' );
    $disable_logo_single    = get_theme_mod( 'diane_single_without_logo' );
?>

<body <?php body_class();?>>
<span class="diane-background"></span>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">
        <?php echo esc_html__( 'Skip to content', 'diane' ); ?>
    </a>
<?php if($header_v2) : ?>
    <?php get_template_part('inc/header','2') ?>
<?php else : ?>
    <nav id="site-navigation" class="diane-main-navigation">
        <div class="diane-nav-button">
           <span class="one"></span>
           <span class="two"></span>
           <span class="three"></span>
        </div>
        <div class="nav-area classic-nav">
<!--            <a href="--><?php //bloginfo( 'url' ); ?><!--">-->
<!--                <img class="nav-logo" src="/wp-content/themes/diane/assets/images/logo.svg"/>-->
<!--            </a>-->
            <?php wp_nav_menu(); ?>
            <?php if ( $enable_search ) : ?>
                <?php get_template_part('inc/default','search') ?>
            <?php endif; ?>
            <?php if( $win_sidebar ) : ?>
                <div class="diane-win-sidebar">
                    <?php dynamic_sidebar('win-sidebar'); ?>
                </div>
                <div class="site-sidebar">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                </div>
            <?php endif; ?>
        </div>
    </nav><!-- #site-navigation -->
<?php if( $enable_social ) : ?>
    <div class="diane-top-nav">
        <div class="diane-nav-share">
            <ul>
                <?php if( $enable_facebook ) : ?>
                    <li>
                    <?php $diane_facebook = 'https://www.facebook.com/'; ?>
                        <a target="_blank" href="<?php echo esc_url( $diane_facebook ); echo esc_html( get_theme_mod('diane_facebook') ); ?>">
                          <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if( $enable_twitter ) : ?>
                    <li>
                        <?php $diane_twitter = 'https://twitter.com/'; ?>
                        <a target="_blank" href="<?php echo esc_url( $diane_twitter ); echo esc_html( get_theme_mod('diane_twitter') ); ?>">
                          <i class="fa fa-twitter"></i>
                        </a>  
                    </li>  
                <?php endif; ?>
                <?php if( $enable_pint ) : ?>                     
                    <li>
                        <?php $diane_pinterest = 'https://pinterest.com/'; ?>
                        <a target="_blank" href="<?php echo esc_url( $diane_pinterest ); echo esc_html( get_theme_mod('diane_pinterest') ); ?>">
                          <i class="fa fa-pinterest"></i>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if( $enable_google ) : ?>
                    <li>
                        <?php $diane_google = 'https://plus.google.com/'; ?>
                        <a target="_blank" href="<?php echo esc_url( $diane_google ); echo esc_html( get_theme_mod('diane_google') ); ?>">
                          <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if( $enable_instagram ) : ?>
                    <li>
                        <?php $diane_instagram = 'http://instagram.com/'; ?>
                        <a target="_blank" href="<?php echo esc_url( $diane_instagram ); echo esc_html( get_theme_mod('diane_instagram') ); ?>">
                          <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
<div class="container">
    <?php if( $disable_logo_single ) : ?>
        <div class="site-header single-without-logo">
    <?php else : ?>
        <div class="site-header">
    <?php endif; ?>
<?php endif; ?>
        <?php if( $header_text ) : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <h1 class="site-title"><?php echo esc_html( bloginfo( 'name' ) ); ?></h1>
            </a>
            <span class="site-description"><?php echo esc_html( bloginfo('description'));?></span>
        <?php endif; ?>
        <?php if( $enable_header_logo && !$header_logo && !$header_text ) : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="diane-logo"> 
                <img src="<?php echo esc_url( get_template_directory_uri() .'/assets/images/logo.png' ); ?>" alt="<?php esc_attr( bloginfo( 'name' ) ); ?>" />
            </a>
        <?php elseif( $enable_header_logo && $header_logo && !$header_text ) : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="diane-logo">
                <img src="<?php echo esc_url( get_theme_mod('diane_logo_up') );?>" alt="<?php esc_attr( bloginfo( 'name' ) ); ?>">
            </a>
        <?php endif; ?>
    </div>
</div>
<div id="content" class="site-content">
<?php if( !$grid_slider && !$classic_slider) : ?>
    <div class="container">
<?php endif; ?>