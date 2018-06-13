<?php /* Template name: Header classic */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="<?php echo esc_url('http://gmpg.org/xfn/11'); ?>">

<?php wp_head(); ?>
</head>

<?php 
    $grid_slider            = get_theme_mod( 'diane_featured_grid' );
    $classic_slider         = get_theme_mod( 'diane_classic_slider' );
?>

<body <?php body_class();?>>
<span class="diane-background"></span>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">
        <?php echo esc_html__( 'Skip to content', 'diane' ); ?>
    </a>
    <nav id="site-navigation" class="diane-main-navigation">
        <div class="diane-nav-button">
           <span class="one"></span>
           <span class="two"></span>
           <span class="three"></span>
        </div>
        <div class="nav-area classic-nav">
            <?php wp_nav_menu(); ?>
                <?php get_template_part('inc/default','search') ?>
                <div class="diane-win-sidebar">
                    <?php dynamic_sidebar('win-sidebar'); ?>
                </div>
                <div class="site-sidebar">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                </div>
        </div>
    </nav><!-- #site-navigation -->
<div class="container">
    <div class="site-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="diane-logo"> 
            <img src="<?php echo esc_url( get_template_directory_uri() .'/assets/images/logo.png' ); ?>" alt="<?php esc_attr( bloginfo( 'name' ) ); ?>" />
        </a>
    </div>
</div>
<div id="content" class="site-content">
<?php 
    get_template_part('template-parts/featured', 'slider');   
    get_template_part('template-parts/promo', 'box');
?>
<!-- STANDARD POST LAYOUT -->
<div class="col-md-12 diane-clear">
    <ul class="diane-standard">
<?php 

global $diane_without_img;
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args = array (
  'show_posts' =>  '-1',
  'paged'      =>  get_query_var('paged'),
  'paged'      =>  $paged
);
$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<li>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php get_template_part( 'template-parts/post', 'format' ); ?>
    <?php if(has_post_thumbnail()) : ?>
      <div class="entry-content">
    <?php else : ?>
      <div class="entry-content-no-img">
    <?php endif; ?>
        <div class="diane-content col-lg-10">
          <div class="diane-excerpt-area">
            <div class="entry-meta">
              <?php the_category(); ?>
              <h3 class="diane_post_title">
                <?php echo esc_url( the_title('<a href="' . get_permalink() . '" rel="bookmark">', '</a>') ); ?>
              </h3>
              <span class="diane-post-date"><?php echo get_the_date(); ?></span>
            </div>
            <div class="diane-post-excerpt">
              <?php echo diane_excerpt_max(1000); ?>
            </div>
            <a href="<?php echo get_permalink($post->ID); ?>" class="diane-post-button">
              <?php echo esc_html__('READ MORE', 'diane'); ?>
            </a> 
          </div>
          <div class="diane-post-share">
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
</ul>
</div>
<?php get_footer(); ?>