<?php 
    $enable_search          = get_theme_mod('diane_enable_search');
    $win_sidebar            = get_theme_mod('diane_win_sidebar');
    $header_text            = display_header_text();
    $enable_header_logo     = get_theme_mod('diane_header_logo_enable');
    $header_logo            = get_theme_mod('diane_logo_up');
    $enable_social          = get_theme_mod( 'diane_social_bar' );
    $enable_facebook        = get_theme_mod( 'diane_social_facebook' );
    $enable_twitter         = get_theme_mod( 'diane_social_twitter' );
    $enable_pint            = get_theme_mod( 'diane_social_pinterest' );
    $enable_google          = get_theme_mod( 'diane_social_google' );
?>

<nav id="site-navigation" class="diane-main-navigation diane-nav-logo">
    <div class="diane-nav-button">
       <span class="one"></span>
       <span class="two"></span>
       <span class="three"></span>
    </div>
    <div class="nav-area">
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
    <div class="diane-menu-logo">
        <?php if( $header_text ) : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <h1 class="site-title"><?php echo esc_html( bloginfo( 'name' ) ); ?></h1>
            </a>
            <span class="site-description"><?php echo esc_html( bloginfo('description'));?></span>
        <?php elseif( $enable_header_logo && !$header_logo && !$header_text ) : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="diane-logo" style="background: url(<?php echo esc_url( get_template_directory_uri() .'/assets/images/logo.png' ); ?>);"> 
            </a>
        <?php elseif( $enable_header_logo && $header_logo && !$header_text ) : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="diane-logo" style="background: url(<?php echo esc_url( get_theme_mod('diane_logo_up') );?>);">
            </a>
        <?php endif; ?>
    </div>
</nav><!-- #site-navigation -->
<div class="container diane-fixed-slider">
    <div class="site-header">