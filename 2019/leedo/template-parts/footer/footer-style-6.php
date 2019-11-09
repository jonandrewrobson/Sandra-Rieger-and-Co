<?php

/**
 * @author: VLThemes
 * @version: 1.3.1
 */

$footer_class = 'vlt-footer vlt-footer--style-6';

$acf_footer = leedo_get_theme_mod( 'page_custom_footer', true );

if ( leedo_get_theme_mod( 'footer_fixed', $acf_footer ) == 'enable' ) {
	$footer_class .= ' vlt-footer--fixed';
}

?>

<footer class="<?php echo leedo_sanitize_class( $footer_class ); ?>">

	<div class="container">

		<div class="text-center">

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="vlt-footer-logo">
				<?php if ( leedo_get_theme_mod( 'footer_style-6_logo' ) ) : ?>
					<img src="<?php echo leedo_get_theme_mod( 'footer_style-6_logo' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
				<?php else: ?>
					<h2><?php bloginfo( 'name' ); ?></h2>
				<?php endif; ?>
			</a>
			<!-- .vlt-footer-logo -->

			<?php if ( leedo_get_theme_mod( 'footer_copyright' ) ) : ?>
				<div class="vlt-footer-copyright"><?php echo leedo_get_theme_mod( 'footer_copyright' ); ?></div>
				<!-- /.vlt-footer-copyright -->
			<?php endif; ?>

			<?php if ( leedo_get_theme_mod( 'footer_social_list' ) ) : ?>
				<div class="vlt-footer-socials vlt-footer-socials--style-1">
					<?php
						foreach ( leedo_get_theme_mod( 'footer_social_list' ) as $socialItem ) :
							$class = 'vlt-social-icon vlt-social-icon--style-2';
							echo '<a href="' . esc_url( $socialItem['social_url'] ) . '" target="_blank" class="' . leedo_sanitize_class( $class ) . '"><i class="' . leedo_sanitize_class( $socialItem['social_icon'] ) . '"></i></a>';
						endforeach;
					?>
				</div>
				<!-- /.vlt-footer-socials -->
			<?php endif; ?>

		</div>
		<!-- /.text-center -->

	</div>

</footer>
<!-- /.vlt-footer -->