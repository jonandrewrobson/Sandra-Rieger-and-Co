<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package diane
 */

?>
<?php 

global $diane_without_img;
$standard_post    = get_theme_mod('diane_standard_post');
$grid_post        = get_theme_mod('diane_grid_post');
$diane_grid_3_col = get_theme_mod('diane_grid_3col_post');
$first_post       = get_theme_mod('diane_first_post');
$chess_post       = get_theme_mod('diane_chess_post');
$post_share = get_theme_mod('diane_post_share');
$facebook_share = get_theme_mod('diane_facebook_share');
$twitter_share = get_theme_mod('diane_twitter_share');
$pinterest_share = get_theme_mod('diane_pinterest_share');
$google_share = get_theme_mod('diane_google_share');


$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args = array (
  'show_posts' =>  '-1',
  'paged'      =>  get_query_var('paged'),
  'paged'      =>  $paged
);
$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
  $post_count = 0;
	while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<li>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php get_template_part( 'template-parts/post', 'format' ); ?>
    <?php if(has_post_thumbnail()) : ?>
      <div class="entry-content">
    <?php else : ?>
      <div class="entry-content-no-img">
    <?php endif; ?>
        <?php if( $post_share ) : ?>
          <div class="diane-content col-lg-10">
        <?php else : ?>
          <div class="diane-content post-disable-share">          
        <?php endif; ?>
          <div class="diane-excerpt-area">
            <div class="entry-meta">
              <?php the_category(); ?>
              <h3 class="diane_post_title">
                <?php echo esc_url( the_title('<a href="' . get_permalink() . '" rel="bookmark">', '</a>') ); ?>
              </h3>
              <span class="diane-post-date"><?php echo get_the_date(); ?></span>
            </div>
            <div class="diane-post-excerpt">
             <?php if( ( $first_post && $post_count == 0 ) || ( $standard_post ) ) {
                $excerpt = 1000;
              } elseif( ( $grid_post && !$first_post ) || ( $grid_post && $first_post && $post_count != 0 ) ) {
                $excerpt = 230;
              } elseif( ( $diane_grid_3_col && !$first_post ) || ( $diane_grid_3_col && $first_post && $post_count != 0 ) ) {
                $excerpt = 150;
              } elseif( $chess_post ) {
                $excerpt = 200;
              } else {
                $excerpt = 1000;
              } ?>
              <?php echo diane_excerpt_max($excerpt); ?>
            </div>
            <a href="<?php echo get_permalink($post->ID); ?>" class="diane-post-button">
              <?php echo esc_html__('READ MORE', 'diane'); ?>
            </a> 
          </div>
          <?php if( $post_share) : ?>
            <div class="diane-post-share">
               <ul class="diane-social-share">
                <?php if( $facebook_share ) : ?>
                  <li>
                    <?php $diane_facebook = 'https://www.facebook.com/sharer/sharer.php?u='; ?>
                    <a target="_blank" href="<?php echo esc_url( $diane_facebook ); echo esc_url( get_the_permalink() ); ?>">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                <?php endif; ?>
                <?php if( $twitter_share ) : ?>
                  <li>
                    <?php $diane_twitter = 'https://twitter.com/home?status=Check%20out%20this%20article:%20'; ?>
                    <a target="_blank" href="<?php echo esc_url( $diane_twitter ); echo esc_url( get_the_permalink() ); ?>">
                      <i class="fa fa-twitter"></i>
                    </a>  
                  </li>  
                <?php endif; ?>
                <?php if( $pinterest_share ) : ?>                     
                  <li>
                    <?php $diane_pinterest = 'https://pinterest.com/pin/create/button/?url='; ?>
                    <a target="_blank" href="<?php echo esc_url( $diane_pinterest ); echo esc_url( get_the_permalink() ); ?>&media=<?php ?>">
                      <i class="fa fa-pinterest"></i>
                    </a>
                  </li>
                <?php endif; ?>
                <?php if( $google_share ) : ?>
                  <li>
                    <?php $diane_google = 'https://plus.google.com/share?url='; ?>
                    <a target="_blank" href="<?php echo esc_url( $diane_google ); echo esc_url( get_the_permalink() ); ?>">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </li>
                <?php endif; ?>
              </ul>
            </div>
          <?php endif; ?>
        </div>
      </div><!-- .entry-content -->
  </article><!-- #post-## -->
</li>
<?php	
  $post_count++;	
	endwhile; ?> 
    <li class="diane-pagination">    
        <?php the_posts_pagination(); ?>
    </li>   
   <?php wp_reset_postdata();
} else {
	get_template_part( 'template-parts/content', 'none' );
}
?>