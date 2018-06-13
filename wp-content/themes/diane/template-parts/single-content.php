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
  $also_post = get_theme_mod('diane_also_post');
  $post_share = get_theme_mod('diane_post_share');
  $facebook_share = get_theme_mod('diane_facebook_share');
  $twitter_share = get_theme_mod('diane_twitter_share');
  $pinterest_share = get_theme_mod('diane_pinterest_share');
  $google_share = get_theme_mod('diane_google_share');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
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
          </div>
          <div class="diane-post-excerpt">
            <?php the_content(); ?> 
              <?php 
                wp_link_pages(array(
                  'before'            => '<div class="diane-link-pages">',
                  'after'             => '</div>',
                  'next_or_number'    => 'next_and_number', # activate parameter overloading
                  'nextpagelink'      => esc_html__('Next', 'diane'),
                  'previouspagelink'  => esc_html__('Prev', 'diane'),
                  'pagelink'          => '<span>%</span>',
                  )
                );
              ?>
          </div>
          <div class="diane-tags-area">
            <?php echo esc_html(the_tags('<ul class="tags"><li>','</li><li>', '</li></ul>')); ?>
          </div>
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

<!-- Author Box -->
<?php if( get_the_author_meta('description') != NULL) :
get_template_part( 'template-parts/author','box'); endif; ?>
</article><!-- #post-## -->

<?php if($also_post) : ?>
<?php
$categories = get_the_category($post->ID);
$category_ids = array();

foreach($categories as $individual_category) {
  $category_ids[] = $individual_category->term_id;
}

$args = array(
 'category__in'     =>  $category_ids, 
 'post__not_in'     =>  array($post->ID),
 'posts_per_page'   =>  4,
 'meta_query' => array(array('key' => '_thumbnail_id')),
 );

 $my_query = new WP_Query($args); ?>

<?php if($my_query->have_posts()) : ?>
<?php if($my_query->post_count >= 4) : ?>
<div class="also-posts">
  <ul class="also-like-posts">
    <li>
      <h5 class="diane-post-title"><?php echo esc_html__('You might also like', 'diane'); ?></h5>
    </li>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <li class="diane-also-item">
        <?php if ( has_post_thumbnail() ) : ?>
          <div class="diane-post-format post_standard">
            <a href="<?php esc_url( the_permalink() ); ?>" class="also-post-img" style="background: url( <?php echo esc_url( the_post_thumbnail_url() ); ?>);">
            </a>
            <a href="<?php esc_url( the_permalink() ); ?>">
             <div class="also-text-area">
               <h5 class="also-title"><?php echo esc_html( the_title() ); ?></h5>
               <span><?php echo get_the_date(); ?></span>
             </div>
            </a>
         </div>
       <?php endif; ?>
     </li>
   <?php endwhile; ?>
 </ul>
</div>
<?php endif;
wp_reset_postdata();
endif;
endif;
?>