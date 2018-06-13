<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package diane
 */

?>
<section class="diane-page">
	<header class="diane-page-header">
		<h4 class="diane-page-title"> <?php the_title(); ?></h4>
	</header><!-- .entry-header -->
	   <?php get_template_part( 'template-parts/post', 'format' ); ?>
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</section><!-- #post-## -->
<?php if ( comments_open() || get_comments_number() ) :
comments_template();
endif; ?>