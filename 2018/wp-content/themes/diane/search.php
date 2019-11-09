<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
    <h4 class="diane_post_title"><?php printf( esc_html__('Search Results for: %s', 'diane'), '<span>' . get_search_query() . '</span>' ); ?></h4>
  </header>
  <ul class="diane-grid diane-grid-3-col">
      <?php get_template_part( 'template-parts/content', 'search' ); ?>
  </ul>
</div>   
<?php get_footer(); ?>