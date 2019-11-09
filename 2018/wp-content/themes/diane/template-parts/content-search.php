<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package diane
 */

?>
<?php global $diane_without_img;

if ( have_posts() ) {
  while ( have_posts() ) : the_post(); ?>
<li>
 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php get_template_part( 'template-parts/post', 'format' ); ?>
    <?php if(has_post_thumbnail()) : ?>
       <div class="entry-content">
    <?php else : ?>
      <div class="entry-content-no-img">
    <?php endif; ?>
        <div class="diane-content">
          <div class="col-md-2 col-sm-2 diane-post-share">
             <ul class="diane-social-share">
              <li>
                <?php $diane_facebook = 'https://www.facebook.com/sharer/sharer.php?u='; ?>
                <a target="_blank" href="<?php echo esc_url( $diane_facebook ); echo esc_url( get_the_permalink() ); ?>">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li>
                <?php $diane_twitter = 'https://twitter.com/home?status=Check%20out%20this%20article:%20'; ?>
                <a target="_blank" href="<?php echo esc_url( $diane_twitter ); echo esc_url( get_the_permalink() ); ?>">
                  <i class="fa fa-twitter"></i>
                </a>  
              </li>                       
              <li>
                <?php $diane_pinterest = 'https://pinterest.com/pin/create/button/?url='; ?>
                <a target="_blank" href="<?php echo esc_url( $diane_pinterest ); echo esc_url( get_the_permalink() ); ?>&media=<?php ?>">
                  <i class="fa fa-pinterest"></i>
                </a>
              </li>
              <li>
                <?php $diane_google = 'https://plus.google.com/share?url='; ?>
                <a target="_blank" href="<?php echo esc_url( $diane_google ); echo esc_url( get_the_permalink() ); ?>">
                  <i class="fa fa-google-plus"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-8 col-sm-10 diane-excerpt-area">
            <div class="entry-meta">
              <?php the_category(); ?>
              <h3 class="diane_post_title">
                <?php echo esc_url( the_title('<a href="' . get_permalink() . '" rel="bookmark">', '</a>') ); ?>
              </h3>
              <span class="diane-post-date"><?php echo get_the_date(); ?></span>
            </div>
            <div class="diane-post-excerpt">
                <?php echo diane_excerpt_max(150); ?>
            </div>
            <a href="<?php echo get_permalink($post->ID); ?>" class="diane-post-button">
              <?php echo esc_html__('READ MORE', 'diane'); ?>
            </a> 
          </div>
        </div>
      </div><!-- .entry-content -->
  </article><!-- #post-## -->
</li>
<?php   
  endwhile; ?> 
    <li class="diane-pagination">    
        <?php the_posts_pagination(); ?>
    </li>   
   <?php wp_reset_postdata();
} else {
  get_template_part( 'template-parts/content', 'none' );
}
?>