<?php
/**
 * Cross-sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cross-sells.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $cross_sells ) : ?>

	<div class="vlt-cross-sells-products">

		<div class="container">

			<div class="vlt-gap-120"></div>

			<h2><?php _e( 'You may be interested in.', 'leedo' ) ?></h2>

			<div class="vlt-gap-70"></div>

			<div class="row position-relative">

				<?php echo do_shortcode( html_entity_decode( leedo_get_theme_mod( 'cross_sells_products_shortcode' ) ) ); ?>

				<?php foreach ( $cross_sells as $cross_sell ) : ?>

					<?php
						echo '<div class="col-md-3 col-sm-6">';
						$post_object = get_post( $cross_sell->get_id() );
						setup_postdata( $GLOBALS['post'] =& $post_object );
						wc_get_template_part( 'content', 'product' );
						echo '</div>';
					?>

				<?php endforeach; ?>
			</div>

			<div class="vlt-gap-120"></div>

		</div>

	</div>
	<!-- /.vlt-cross-sells-products -->

<?php endif;

wp_reset_postdata();