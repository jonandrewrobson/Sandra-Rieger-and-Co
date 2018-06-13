<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
  <header class="diane-page-header">
    <?php the_archive_title( '<h5 class="diane_post_title">', '</h5>' ); ?>
  </header>
  <ul class="diane-grid diane-grid-3-col">
      <?php get_template_part( 'template-parts/content', 'search' ); ?>
  </ul>
</div>
<?php get_footer(); ?>