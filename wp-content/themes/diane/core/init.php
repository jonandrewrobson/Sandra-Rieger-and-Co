<?php
if ( function_exists('diane_require_file') )
{
    // Load Classes
    diane_require_file( DIANE_CORE_CLASSES . 'class-tgm-plugin-activation.php' );
    diane_require_file( DIANE_CORE_CLASSES . 'wp_bootstrap_navwalker.php' );
    
    // Load Functions
    diane_require_file( DIANE_CORE_FUNCTIONS . 'customizer/diane_custom_controll.php' );
    diane_require_file( DIANE_CORE_FUNCTIONS . 'customizer/diane_customizer_settings.php' );
    diane_require_file( DIANE_CORE_FUNCTIONS . 'customizer/diane_customizer_style.php' );
    
   // Load Widgets
    diane_require_file( DIANE_CORE_WIDGETS . 'diane_about_widget.php' );
    diane_require_file( DIANE_CORE_WIDGETS . 'diane_latest_posts_widget.php' );
    diane_require_file( DIANE_CORE_WIDGETS . 'diane_social_widget.php' );
}