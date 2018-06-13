<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package diane
 */
?>
<?php get_header(); ?>
<?php 
    $grid_slider   = get_theme_mod( 'diane_featured_grid' );
    $classic_slider   = get_theme_mod( 'diane_classic_slider' );
?>

<?php if( $grid_slider || $classic_slider ) : ?>
    <div class="container">
<?php endif; ?>
<div class="col-md-12 diane-clear"> 
    <section class="error-404 not-found">
        <header class="diane-page-header">
            <h4 class="diane-page-title"><?php echo esc_html__('Oops! That page can&rsquo;t be found.', 'diane' ); ?></h4>
        </header><!-- .diane-page-header -->
        <div class="content_404">
            <div class="title_404">
                <h1><?php echo esc_html__('404', 'diane') ?></h1>
            </div>
            <h4 class="page-result"><?php echo esc_html__('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'diane'); ?></h4>
           <div class="search_form">
                <?php get_search_form(); ?>
           </div>
        </div><!-- .page-content -->
    </section><!-- .error-404 -->
</div>
<?php get_footer(); ?>