<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package diane
 */
?>

<?php if( is_active_sidebar('win-sidebar')) :?>
	<aside class="diane-widget-area">
		<?php dynamic_sidebar( 'win-sidebar' ); ?>
	</aside>
<?php endif; ?>