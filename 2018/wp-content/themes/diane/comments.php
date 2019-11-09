<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package diane
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$fields =  array(
    'author' => '<div class="diane-comment-area"><input type="text" name="author" id="name" class="input-form" placeholder="' . esc_html__('Name *', 'diane') . '" /></div>',
    'email'  => '<div class="diane-comment-area diane-email"><input type="text" name="email" id="email" class="input-form" placeholder="' . esc_html__('Email *', 'diane') . '"/></div>',
    'website'=>'<div class="diane-comment-area"><input type="text" name="website" id="website" class="input-form" placeholder=" ' . esc_html__('Website', 'diane') . '"/></div>'

);
$custom_comment_form = array( 
    'fields'                => apply_filters( 'comment_form_default_fields', $fields ),
    'comment_field'         => '<textarea name="comment" id="message" class="textarea-form" placeholder="' . esc_html__('Comment', 'diane') . '"  rows="1"></textarea>',
    'logged_in_as'          => '<p class="logged-in-as">' . sprintf( __('Logged in as <a href="%1$s">%2$s</a> <a href="%3$s">Log out?</a>','diane'), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink() ) ) ) . '</p>',
    'cancel_reply_link'     => esc_html__('Cancel' , 'diane'),
    'title_reply'           => "<span>" . esc_html__('Leave a Reply' , 'diane') . "</span>",
    'label_submit'          => esc_html__('Post Comment' , 'diane'),
    'id_submit'             => 'comment_submit',
);

?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
        <?php if ( comments_open() ) : ?>
            <h5 class="comments-title"><span><?php comments_number( null, esc_html__('1 Comment', 'diane') , '% ' . esc_html__('Comments', 'diane')); ?></span></h5>
       	<?php endif; ?>
    	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    	<nav id="comment-nav-above" class="navigation comment-navigation">
    		<h1 class="screen-reader-text"><?php echo esc_html__('Comment navigation', 'diane'); ?></h1>
    		<div class="nav-previous"><?php previous_comments_link( esc_html__('&larr; Older Comments', 'diane') ); ?></div>
    		<div class="nav-next"><?php next_comments_link( esc_html__('Newer Comments &rarr;', 'diane') ); ?></div>
    	</nav><!-- #comment-nav-above -->
    	<?php endif; // Check for comment navigation. ?>    
    	<ul class="comment-list">
		<?php
			wp_list_comments( array(
				'style'       => 'ul',
				'short_ping'  => true,
				'avatar_size' => 100,
                'max_depth'   => '',
			) );
		?>
        <?php get_comment_date() ?>
    	</ul><!-- .comment-list -->    
    	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    	<nav id="comment-nav-below" class="navigation comment-navigation">
    		<h1 class="screen-reader-text"><?php echo esc_html__('Comment navigation', 'diane' ); ?></h1>
    		<div class="nav-previous"><?php previous_comments_link( esc_html__('&larr; Older Comments', 'diane') ); ?></div>
    		<div class="nav-next"><?php next_comments_link( esc_html__('Newer Comments &rarr;', 'diane') ); ?></div>
    	</nav><!-- #comment-nav-below -->
    	<?php endif; // Check for comment navigation. ?>    
    	<?php if ( ! comments_open() ) : ?>
    	<p class="no-comments"><?php echo esc_html__( 'Comments are closed.', 'diane' ); ?></p>
    	<?php endif; ?>

<?php endif; ?>
<?php comment_form($custom_comment_form); ?>
</div><!-- #comments -->