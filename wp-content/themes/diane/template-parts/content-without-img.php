<div class="entry-content-without-img">
  <div class="diane-content">
    <div class="entry-meta">
      <?php the_category(); ?>
      <h3 class="diane_post_title">
        <?php echo esc_url( the_title('<a href="' . get_permalink() . '" rel="bookmark">', '</a>') ); ?>
      </h3>
      <span class="diane-post-date"><?php echo get_the_date(); ?></span>
    </div>
      <?php echo esc_html( the_excerpt(200) ); ?>
    <a href="<?php echo get_permalink($post->ID); ?>" class="diane-post-button">
      <?php echo esc_html__('READ MORE', 'diane'); ?>
    </a> 
  </div>
</div><!-- .entry-content -->