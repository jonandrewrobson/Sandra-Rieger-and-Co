<?php  if ( get_theme_mod('diane_promobox_show') && 'top' == get_theme_mod('diane_promobox_layout')) : ?>
    <div class="container"> 
        <?php get_template_part('template-parts/promo', 'box'); ?>
    </div>
<?php endif; ?>
<?php
  $featured_cat    = get_theme_mod( 'diane_featured_cat' );
  $slide_number    = get_theme_mod( 'diane_featured_slider_item' );
  $featured_area   = get_theme_mod( 'diane_slider_area' );
  $grid_slider     = get_theme_mod( 'diane_featured_grid' );
  $classic_slider  = get_theme_mod( 'diane_classic_slider' );

if( $featured_area ) { 
    $slider_width = 'diane-slider-full';
} elseif( !$featured_area ) { 
    $slider_width = 'diane-slider-container'; 
}
if( $grid_slider ) { 
  $slider_layout = 'diane-slider-grid'; 
} else { 
  $slider_layout = 'diane-classic-slider';
}

$args = array( 'cat' => $featured_cat, 'showposts' => $slide_number );

$feat_query = new WP_Query( $args );
if ($feat_query->have_posts()) : ?>
  <div class="container <?php echo esc_html( $slider_width ); ?>">
    <div class="diane-featured-area">
      <div class="<?php if(isset($slider_layout)) echo esc_html($slider_layout); ?>">
        <?php while ($feat_query->have_posts()) :
        $feat_query->the_post(); 
        get_the_post_thumbnail_url($post->ID) 
        ?>
        <?php if(has_post_thumbnail()) : ?>
	        <div class="diane-slide-item" style="background: url( <?php echo esc_url( get_the_post_thumbnail_url($post->ID) ); ?>);">
	          <div class="diane-slide-item-text">
	              <div class="slider-info">
	                <?php the_category(); ?>
	                <h3><a href="<?php the_permalink(); ?>"><?php echo esc_html( the_title() ); ?></a></h3>
	                <a href="<?php echo get_permalink($post->ID); ?>" class="diane-post-button"><?php echo esc_html__('READ MORE', 'diane'); ?>
	                </a>
	              </div>
	          </div>
	        </div>
        <?php endif; ?>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
<div class="container">