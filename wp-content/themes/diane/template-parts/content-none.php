<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package diane
 */

?>

<li class="diane-no-results not-found">
	<header>
		<h4 class="page-title"><?php echo esc_html__('Nothing Found', 'diane' ); ?></h4>
	</header><!-- .diane-page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
        <h4 class="page-result"><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'diane' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></h4>

		<?php elseif ( is_search() ) : ?>
			<div class="diane_page_description">
        <h4 class="page-result"><?php echo esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'diane' ); ?></h4>
      </div>
        
		<?php else : ?>
      <div class="diane_page_description"> 
        <h4 class="page-result"><?php echo esc_html__('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'diane' ); ?></h4>
      </div>
		<?php endif; ?>
	</div><!-- .page-content -->
</li><!-- .no-results -->
