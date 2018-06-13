<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package diane
 */
?>
<?php get_header(); ?>
<?php
  $grid_slider   = get_theme_mod( 'diane_featured_grid' );
  $classic_slider   = get_theme_mod( 'diane_classic_slider' );
  $single_sidebar = get_theme_mod( 'diane_single_sidebar' );
?>

<?php if( $grid_slider || $classic_slider ) : ?>
    <div class="container">
<?php endif; ?>.
<?php if( $single_sidebar ) : ?>
  <?php get_template_part( 'template-parts/post', 'format' ); ?>
	<div class="col-md-8 diane-content-left diane-post-with-sidebar">
	    <?php if(have_posts()): while(have_posts()) : the_post(); ?>
	        <?php get_template_part( 'template-parts/single','content' ); ?>
	        <?php if ( comments_open() || get_comments_number() ) :
	        comments_template();
	        endif; ?>
	    <?php endwhile; endif; ?>
	</div>
	<div class="col-md-4 diane-sidebar-right">
		<?php dynamic_sidebar('single-sidebar'); ?>
	</div>
<?php else : ?>
	<?php get_template_part( 'template-parts/post', 'format' ); ?>
	<div class="col-md-12 diane-content-left diane-clear">
    <?php if(have_posts()): while(have_posts()) : the_post(); ?>
        <?php get_template_part( 'template-parts/single','content' ); ?>
        <?php if ( comments_open() || get_comments_number() ) :
        comments_template();
        endif; ?>
    <?php endwhile; endif; ?>
	</div>
<?php endif; ?>
<?php get_footer(); ?>