<?php

/**
 * @author: VLThemes
 * @version: 1.3.1
 */

$header_class = 'vlt-header vlt-header--opaque vlt-header--mobile';
$navbar_class = 'vlt-navbar vlt-navbar--mobile';

if ( leedo_get_theme_mod( 'mobile_navigation_sticky' ) == 'enable' ) {
	$navbar_class .= ' vlt-navbar--sticky';

	if ( leedo_get_theme_mod( 'mobile_navigation_hide_on_scroll' ) == 'enable' ) {
		$navbar_class .= ' vlt-navbar--hide-on-scroll';
	}

}

?>

<div class="d-lg-none">

	<header class="<?php echo leedo_sanitize_class( $header_class ); ?>">

		<div class="<?php echo leedo_sanitize_class( $navbar_class ); ?>">

			<div class="container">

				<div class="vlt-navbar-inner no-gutters">

					<div class="col text-left">

						<?php if ( leedo_get_theme_mod( 'header_mobile_burger_position' ) == 'left' ) : ?>

							<a href="#" id="vlt-mobile-menu-toggle" class="vlt-menu-burger">
								<span class="line line-one"><span></span></span>
								<span class="line line-two"><span></span></span>
								<span class="line line-three"><span></span></span>
							</a>
							<!-- /.vlt-menu-burger -->

						<?php endif; ?>

						<?php if ( leedo_get_theme_mod( 'header_mobile_burger_position' ) == 'right' ) : ?>

							<?php get_template_part( 'template-parts/header/partials/partial', 'header-cart-icon' ); ?>

							<?php get_template_part( 'template-parts/header/partials/partial', 'header-search-icon' ); ?>

						<?php endif; ?>

					</div>

					<div class="col text-center">

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="vlt-navbar-logo">
							<?php if ( leedo_get_theme_mod( 'header_mobile_logo' ) ) : ?>
								<img src="<?php echo leedo_get_theme_mod( 'header_mobile_logo' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
							<?php else: ?>
								<h2><?php bloginfo( 'name' ); ?></h2>
							<?php endif; ?>
						</a>
						<!-- .vlt-navbar-logo -->

					</div>

					<div class="col text-right">

						<?php if ( leedo_get_theme_mod( 'header_mobile_burger_position' ) == 'right' ) : ?>

							<a href="#" id="vlt-mobile-menu-toggle" class="vlt-menu-burger">
								<span class="line line-one"><span></span></span>
								<span class="line line-two"><span></span></span>
								<span class="line line-three"><span></span></span>
							</a>
							<!-- /.vlt-menu-burger -->

						<?php endif; ?>

						<?php if ( leedo_get_theme_mod( 'header_mobile_burger_position' ) == 'left' ) : ?>

							<?php get_template_part( 'template-parts/header/partials/partial', 'header-search-icon' ); ?>

							<?php get_template_part( 'template-parts/header/partials/partial', 'header-cart-icon' ); ?>

						<?php endif; ?>

					</div>

				</div>
				<!-- /.vlt-navbar-inner -->

			</div>

			<nav class="vlt-mobile-navigation">

				<div class="container">

					<?php get_template_part( 'template-parts/header/partials/partial', 'mobile-menu' ); ?>

				</div>

			</nav>
			<!-- /.vlt-mobile-navigation -->

		</div>
		<!-- /.vlt-navbar -->

	</header>
	<!-- /.vlt-header--mobile -->

</div>
<!-- /.d-lg-none -->