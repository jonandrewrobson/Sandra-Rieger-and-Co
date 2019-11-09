<?php
	$chess_first_child = get_theme_mod('diane_first_post');
?>

<!-- CHESS POST LAYOUT -->
<?php if( $chess_first_child ) : ?>
	<div class="col-md-12 diane-clear">
	    <ul class="diane-chess diane-first-post">
	        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
	    </ul>
	</div>
<?php else : ?>
	<div class="col-md-12 diane-clear">
	    <ul class="diane-chess">
	        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
	    </ul>
	</div>	
<?php endif; ?>