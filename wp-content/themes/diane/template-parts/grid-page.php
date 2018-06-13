<?php
	$grid_first_child = get_theme_mod('diane_first_post');
	$grid_3_col				= get_theme_mod('diane_grid_3col_post');
?>


<!-- GRID POST LAYOUT -->
<?php if( $grid_first_child && !$grid_3_col ) : ?>
	<div class="col-md-12 diane-clear">
	    <ul class="diane-grid diane-grid-2-col diane-first-post">
	        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
	    </ul>
	</div>
<?php elseif( $grid_first_child && $grid_3_col ) : ?>
	<div class="col-md-12 diane-clear">
	    <ul class="diane-grid diane-first-post diane-grid-3-col">
	        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
	    </ul>
	</div>
<?php elseif( !$grid_first_child && $grid_3_col ) : ?>
	<div class="col-md-12 diane-clear">
	    <ul class="diane-grid diane-grid-3-col">
	        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
	    </ul>
	</div>
<?php else : ?>
	<div class="col-md-12 diane-clear">
	    <ul class="diane-grid">
	        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
	    </ul>
	</div>	
<?php endif; ?>