<?php
  $featured_cat    = get_theme_mod( 'diane_featured_cat' );
  $slide_number    = get_theme_mod( 'diane_featured_slider_item' );

$args = array( 'cat' => $featured_cat, 'showposts' => $slide_number );

$feat_query = new WP_Query( $args );
if ($feat_query->have_posts()) : ?>
<div class="diane-slider-area">
  <div class="diane-featured-area-2">
    <div class="diane-classic-slider">
      <?php while ($feat_query->have_posts()) :
      $feat_query->the_post(); 
      get_the_post_thumbnail_url($post->ID) 
      ?>
      <div class="diane-slide-item" style="background: url( <?php echo esc_url( get_the_post_thumbnail_url($post->ID) ); ?>);">
        <div class="diane-slide-item-text">
            <div class="slider-info">
              <?php the_category(); ?>
              <h1><a href="<?php the_permalink(); ?>"><?php echo esc_html( the_title() ); ?></a></h1>
              <a href="<?php echo get_permalink($post->ID); ?>" class="diane-post-button"><?php echo esc_html__('READ MORE', 'diane'); ?>
              </a>
            </div>
        </div>
        <div class="diane-shade"></div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<?php endif; ?>
<div class="slider-bg">
<div class="container slider-bg-content">