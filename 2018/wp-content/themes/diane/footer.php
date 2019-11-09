<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package diane
 */

?>
<?php 
  $instagram_footer   = is_active_sidebar('instagram-footer');
?>
</div><!-- #content -->
<footer id="colophon" class="site-footer">
    <div class="diane-instagram-footer">
      <?php if( $instagram_footer ) : ?>
      	<?php dynamic_sidebar('instagram-footer'); ?>  
      <?php endif; ?> 
      <div class="site-info">
          <div class="footer-contact-info">
              <a href="<?php bloginfo( 'url' ); ?>">Sandra Rieger & Co.</a> | Minneapolis, MN | <a href="tel:1-612-964-1956">612.964.1956</a> | <a href="mailto:hello@sandrariegerandco.com">hello@sandrariegerandco.com</a>
          </div>
        <div class="diane-footer-share">
          <ul class="diane-social-share">
              <li>
                  <?php $diane_facebook = 'https://www.facebook.com/sharer/sharer.php?u='; ?>
                  <a target="_blank" href="<?php echo esc_url( $diane_facebook ); echo esc_url( site_url() ); ?>">
                      <i class="fa fa-facebook"></i>
                  </a>
              </li>
              <li>
                  <?php $diane_twitter = 'https://twitter.com/home?status=Check%20out%20this%20article:%20'; ?>
                  <a target="_blank" href="<?php echo esc_url( $diane_twitter ); echo esc_url( site_url() ); ?>">
                      <i class="fa fa-twitter"></i>
                  </a>
              </li>
              <li>
                  <?php $diane_pinterest = 'https://pinterest.com/pin/create/button/?url='; ?>
                  <a target="_blank" href="<?php echo esc_url( $diane_pinterest ); echo esc_url( site_url() ); ?>&media=<?php ?>">
                      <i class="fa fa-pinterest"></i>
                  </a>
              </li>
              <li>
                  <?php $diane_google = 'https://plus.google.com/share?url='; ?>
                  <a target="_blank" href="<?php echo esc_url( $diane_google ); echo esc_url( site_url() ); ?>">
                      <i class="fa fa-google-plus"></i>
                  </a>
              </li>
          </ul>
        </div>
        <?php if( get_theme_mod( 'diane_footer_copyright' ) ) : ?>
        <?php echo get_theme_mod( 'diane_footer_copyright' ); ?>
        <?php else : ?>
        <?php echo esc_html('Copyright 2018. All Right Reserved.','diane'); ?>
        <?php endif; ?>

      </div><!-- .site-info -->
    </div>
</footer><!-- #colophon -->
</div>
<div id="back-top" class="back-top"></div>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>