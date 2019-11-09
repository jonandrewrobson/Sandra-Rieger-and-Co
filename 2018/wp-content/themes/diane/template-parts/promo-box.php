<?php 
    $one_promo_box      = get_theme_mod('diane_number_promobox')   == '1';
    $two_promo_box      = get_theme_mod('diane_number_promobox')   == '2';
    $three_promo_box    = get_theme_mod('diane_number_promobox')   == '3';
    $four_promo_box     = get_theme_mod('diane_number_promobox')   == '4';
    $five_promo_box     = get_theme_mod('diane_number_promobox')   == '5';
    $six_promo_box      = get_theme_mod('diane_number_promobox')   == '6';
    $diane_static       = 'diane-static';
    $diane_rotate       = 'diane-rotate';

function one_promo_box() { ?>
    <li>
        <a href="<?php echo esc_url( get_theme_mod('diane_promobox_one_link') ); ?>" style="background: url(<?php echo esc_url( get_theme_mod('diane_promobox_one_image') ); ?>);">
           <span class="diane-promo-title"><?php echo esc_html( get_theme_mod('diane_promobox_one_title')) ; ?></span>
        </a>
    </li>
<?php }

function two_promo_box() { ?>
    <li>
        <a href="<?php echo esc_url( get_theme_mod('diane_promobox_two_link') ); ?>" style="background: url(<?php echo esc_url( get_theme_mod('diane_promobox_two_image') ); ?>);">
           <span class="diane-promo-title"><?php echo esc_html( get_theme_mod('diane_promobox_two_title') ); ?></span>
        </a>
    </li>
<?php } 

function three_promo_box() { ?>
    <li>
        <a href="<?php echo esc_url( get_theme_mod('diane_promobox_three_link') ); ?>" style="background: url(<?php echo esc_url( get_theme_mod('diane_promobox_three_image') ); ?>);">
         <span class="diane-promo-title"><?php echo esc_html( get_theme_mod('diane_promobox_three_title') ); ?></span>
        </a>
    </li>
<?php } 

function four_promo_box() { ?>
    <li>
        <a href="<?php echo esc_url( get_theme_mod('diane_promobox_four_link') ); ?>" style="background: url(<?php echo esc_url( get_theme_mod('diane_promobox_four_image') ); ?>);">
          <span class="diane-promo-title"><?php echo esc_html( get_theme_mod('diane_promobox_four_title') ); ?></span>
        </a>
    </li>
<?php } 

function five_promo_box() { ?>
    <li>
        <a href="<?php echo esc_url( get_theme_mod('diane_promobox_five_link') ); ?>" style="background: url(<?php echo esc_url( get_theme_mod('diane_promobox_five_image') ); ?>);">
          <span class="diane-promo-title"><?php echo esc_html( get_theme_mod('diane_promobox_five_title') ); ?></span>
        </a>
    </li>
<?php } 

function six_promo_box() { ?>
    <li>
        <a href="<?php echo esc_url( get_theme_mod('diane_promobox_six_link') ); ?>" style="background: url(<?php echo esc_url( get_theme_mod('diane_promobox_six_image') ); ?>);">
           <span class="diane-promo-title"><?php echo esc_html( get_theme_mod('diane_promobox_six_title') ); ?></span>
        </a>
    </li>
<?php } ?>

<ul class="diane-promo-area <?php if( $one_promo_box || $two_promo_box || $three_promo_box ) { echo $diane_static; } else { echo $diane_rotate; } ?>">
    <?php if( $one_promo_box ) : ?>
        <?php echo one_promo_box(); ?>
    <?php elseif ( $two_promo_box ) : ?>
        <?php echo one_promo_box(), two_promo_box(); ?>
    <?php elseif ( $three_promo_box ) : ?>
        <?php echo one_promo_box(), two_promo_box(), three_promo_box(); ?>        
    <?php elseif( $four_promo_box ) : ?>
        <?php echo one_promo_box(), two_promo_box(), three_promo_box(), four_promo_box(); ?>       
    <?php elseif( $five_promo_box ) : ?>
        <?php echo one_promo_box(), two_promo_box(), three_promo_box(), four_promo_box(), five_promo_box(); ?>
    <?php elseif( $six_promo_box ) : ?>
        <?php echo one_promo_box(), two_promo_box(), three_promo_box(), four_promo_box(), five_promo_box(), six_promo_box(); ?>       
    <?php endif; ?>
 </ul>