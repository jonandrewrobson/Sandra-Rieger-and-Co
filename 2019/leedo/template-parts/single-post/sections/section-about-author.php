<?php

/**
 * @author: VLThemes
 * @version: 1.3.1
 */

?>

<div class="vlt-about-author">

	<div class="vlt-about-author__avatar">

		<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
			<?php echo get_avatar( get_the_author_meta( 'email' ), 100 ); ?>
		</a>

	</div>

	<div class="vlt-about-author__content">

		<h4><?php the_author_posts_link(); ?></h4>

		<?php if ( get_the_author_meta( 'description' ) ) : ?>
			<p><?php the_author_meta( 'description' ); ?></p>
		<?php endif; ?>

		<?php if ( get_the_author_meta( 'instagram' ) ): ?>
			<a target="_blank" class="vlt-social-icon vlt-social-icon--style-1 instagram" href="<?php the_author_meta( 'instagram' ); ?>"><i class="fab fa-instagram"></i></a>
		<?php endif; ?>

		<?php if ( get_the_author_meta( 'twitter' ) ): ?>
			<a target="_blank" class="vlt-social-icon vlt-social-icon--style-1 twitter" href="<?php the_author_meta( 'twitter' ); ?>"><i class="fab fa-twitter"></i></a>
		<?php endif; ?>

		<?php if ( get_the_author_meta( 'facebook' ) ): ?>
			<a target="_blank" class="vlt-social-icon vlt-social-icon--style-1 facebook" href="<?php the_author_meta( 'facebook' ); ?>"><i class="fab fa-facebook-f"></i></a>
		<?php endif; ?>

		<?php if ( get_the_author_meta( 'pinterest' ) ): ?>
			<a target="_blank" class="vlt-social-icon vlt-social-icon--style-1 pinterest" href="<?php the_author_meta( 'pinterest' ); ?>"><i class="fab fa-pinterest"></i></a>
		<?php endif; ?>

		<?php if ( get_the_author_meta( 'tumblr' ) ): ?>
			<a target="_blank" class="vlt-social-icon vlt-social-icon--style-1 tumblr" href="<?php the_author_meta( 'tumblr' ); ?>"><i class="fab fa-tumblr"></i></a>
		<?php endif; ?>

	</div>

</div>
<!-- /.vlt-about-author -->