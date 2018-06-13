<!--Gallery Format-->


<?php if ( has_post_format('gallery')) : ?>
  <?php if( has_post_thumbnail()) : ?>
    <div class="diane-post-img">
      <?php $images = get_post_meta( get_the_ID(), '_format_gallery_images', true ); ?>
      <?php if ( $images ) : ?>
      <div class="diane-post-format post-gallery slider">
        <?php foreach ( $images as $image_id ) : ?>
            <?php $images_url = wp_get_attachment_image_src( $image_id, 'full' ); ?>
          <div class="diane-slide-item">
            <span style="background: url(<?php echo esc_url($images_url[0]); ?>);"></span>
          </div>      
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

<!--Video Format-->

<?php elseif ( has_post_format('video')) : ?>
    <div class="diane-post-img">
      <div class="diane-post-format post-video">
          <?php $video = get_post_meta( get_the_ID(), '_format_video_embed', true ); ?>
          <?php if ( wp_oembed_get($video) ) : ?>
              <?php echo wp_oembed_get($video); ?>
          <?php else : ?>
              <?php echo wp_kses_post($video); ?>
          <?php endif; ?>
      </div>
    </div>

<!--Qoute Format-->

<?php elseif ( has_post_format('quote')) : ?>
<?php
    $title_quote = esc_attr(get_post_meta($post->ID, '_format_quote_source_name', true));
    $text_quote = esc_attr(get_post_meta($post->ID, '_format_quote_source_url', true)); 
?>
<?php if( has_post_thumbnail()) :?>
<div class="diane-post-img">
  <div class="diane-post-format post-quote">
      <a href="<?php echo esc_url( the_permalink()); ?>" style="background: url(<?php the_post_thumbnail_url(); ?>);"></a>
      <?php if( is_single() ) : ?>
        <span class="diane-quote">
          <blockquote>
            <?php if ( isset($title_quote) && ($title_quote !=null)) : ?>
              <span id="text-q"><?php echo $text_quote ?></span>
              <h4 class="diane_post_title"><a href="<?php echo get_permalink($post->ID); ?>"><?php echo $title_quote ?></a></h4>
              <?php else : ?>
              <span><?php echo esc_html__('Please insert Your quote!', 'diane'); ?></span>
              <h4><?php echo esc_html__('Quote Title', 'diane'); ?></h4>
          <?php endif; ?>
          </blockquote>
        </span>
      <?php endif; ?>
  </div>
</div>
<?php elseif( is_single() && !has_post_thumbnail()) : ?>
  <span class="diane-quote">
    <blockquote>
      <?php if ( isset($title_quote) && ($title_quote !=null)) : ?>
        <span id="text-q"><?php echo $text_quote ?></span>
        <h4 class="diane_post_title"><a href="<?php echo get_permalink($post->ID); ?>"><?php echo $title_quote ?></a></h4>
        <?php else : ?>
        <span><?php echo esc_html__('Please insert Your quote!', 'diane'); ?></span>
        <h4><?php echo esc_html__('Quote Title', 'diane'); ?></h4>
    <?php endif; ?>
    </blockquote>
  </span>
<?php endif; ?>

<!--Audio Format-->

<?php elseif ( has_post_format('audio')) : ?>
<div class="diane-post-img">
  <div class="diane-post-format post-audio">
  <?php if( !is_single() ) : ?>
    <a href="<?php echo esc_url( the_permalink()); ?>" style="background: url(<?php the_post_thumbnail_url(); ?>);"></a>
  <?php else : ?>
    <?php $audio = get_post_meta( get_the_ID(), '_format_audio_embed', true ); ?>
    <?php if ( wp_oembed_get($audio) ) : ?>
        <?php echo wp_oembed_get($audio); ?>
    <?php else : ?>
        <?php echo wp_kses_post($audio); ?>
    <?php endif; ?>
  <?php endif; ?>
  </div>  
</div>

<!--Standard Format-->

<?php elseif ( has_post_thumbnail() ) : ?>
  <div class="diane-post-img">
    <div class="diane-post-format post_standard">
      <?php if(!is_single()) : ?>
        <a href="<?php echo esc_url( the_permalink()); ?>" style="background: url(<?php the_post_thumbnail_url(); ?>);"></a> 
       <?php else : ?>
          <span style="background: url(<?php the_post_thumbnail_url(); ?>);"></span>
       <?php endif; ?>
    </div>
  </div>
<?php endif; 
 
if(is_sticky() && !has_post_thumbnail()) :
  global $diane_without_img; 
 esc_html($diane_without_img = "sticky-withput-img");
endif; 
?>