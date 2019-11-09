<?php

/**
 * Template Name: Custom Page
 * @author: VLThemes
 * @version: 1.3.1
 */

get_header();

?>

<main class="vlt-main">

	<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content/content', 'custom-page' );
		endwhile;
	?>

</main>
<!-- /.vlt-main -->

<?php get_footer(); ?>