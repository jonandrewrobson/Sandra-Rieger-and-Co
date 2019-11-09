<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
    <?php if(have_posts()): while(have_posts()) : the_post(); ?>
	    <?php get_template_part( 'template-parts/content', 'page', get_post_format() ); ?>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>