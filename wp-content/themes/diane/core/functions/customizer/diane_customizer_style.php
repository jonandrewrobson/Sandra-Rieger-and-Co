<?php
// Customizer - Add CSS ----------------------------------------------------------------------------------
function diane_customizer_css() {

    $customizer_styles = " 

        /* Background color for active elements */
        .social-widget a:hover,
        .diane-social-share li:hover {
            background-color: " . get_theme_mod('diane_elements_color') . ";
        }

        /* Сolor for active elements */
        .entry-meta .post-categories li a,
        #back-top:before {
            color: " . get_theme_mod('diane_elements_color') . ";
        }
       
        /* Background Color for Buttons */
        .diane-post-button,
        input[type=\"submit\"],
        .widget input[type=\"submit\"],
        .form-submit .submit,
        .reply,
        .tags a,
        .no-comments,
        .diane-like-post i,
        .diane-tags-area ul li {
            background-color: " . get_theme_mod('diane_button_color') . ";        
        }

        /* Hover Background Color for Buttons */
        .diane-post-button:hover,
        .diane-slide-item-text .diane-post-button:hover,
        input[type=\"submit\"]:hover,
        .diane-link-pages > a:hover,
        .reply:hover,
        .diane-pagination a:focus,
        .diane-pagination a:active,
        .diane-pagination a:hover,
        .page-numbers.current,
        .diane-tags-area ul li a:hover,
        .no-comments:hover, 
        .diane-like-post:hover i,
        .diane-tags-area ul li:hover,
        .widget input[type=\"submit\"]:hover,
        .form-submit .submit:hover {
            background-color: " . get_theme_mod('diane_hover_button_color') . ";         
        }

        /* Text Color for Buttons */
        .reply,
        .tags a,
        .diane-post-button,
        .no-comments, 
        .diane-like-post i,
        .diane-tags-area ul li {
            color: " . get_theme_mod('diane_button_text_color') . ";         
        }
        
        /* Hover Text Color for Buttons */
        .diane-slide-item-text .diane-post-button:hover,
        .diane-post-button:hover,
        input[type=\"submit\"]:hover,
        .diane-link-pages > a:hover,
        .reply:hover,
        .diane-slide-item-text .diane-post-button:active,
        .diane-slide-item-text .diane-post-button:focus,
        .diane-tags-area ul li a:hover,
        .diane-like-post:hover i,
        .no-comments:hover, 
        .diane-tags-area ul li:hover,
        .widget input[type=\"submit\"]:hover,
        .form-submit .submit:hover {
            color: " . get_theme_mod('diane_button_text_hover_color') . ";         
        }

        /* Border Color for Buttons */
        .diane-slide-item-text .diane-post-button,
        .diane-post-button,
        input[type=\"submit\"],
        .widget input[type=\"submit\"],
        .form-submit .submit,
        .reply,
        .tags a,
        .diane-like-post i,
        .no-comments, 
        .diane-tags-area ul li {
            border-color: " . get_theme_mod('diane_button_border_color') . ";         
        }

        /* Hover Border Color for Buttons */
        .diane-post-button:hover,
        input[type=\"submit\"]:hover,
        .diane-link-pages > a:hover,
        .reply:hover,
        .page-numbers.current,
        .diane-tags-area ul li a:hover,
        .diane-like-post:hover i,
        .no-comments:hover, 
        .diane-tags-area ul li:hover,
        .widget input[type=\"submit\"]:hover,
        .form-submit .submit:hover {
            border-color: " . get_theme_mod('diane_button_border_hover_color') . ";         
        } ";

        if ( get_theme_mod('diane_button_square') ) :
        
            $customizer_styles .= "             
               .diane-pagination a,
               .page-numbers,
               .diane-post-button {
                    border-radius: 0 !important;
                } ";
            
        endif;

        if ( get_theme_mod('diane_sidebar_img') ) :

            $customizer_styles .= " 
                .widget .about-img,
                .widget .latest-post .post-image {
                    border-radius: 0;
                } ";
        endif;

        if ( get_theme_mod('diane_sidebar_img') ) :

            $customizer_styles .= " 
                .widget .about-img {
                    width: auto;
                    height: auto;
                } ";
        endif;
        
        if ( get_theme_mod('diane_custom_css') ) : 

            $customizer_styles .= get_theme_mod('diane_custom_css');
        endif; 

        wp_add_inline_style( 'diane-style',  $customizer_styles );

}

function diane_fonts_pair() {

    $font = get_theme_mod('diane_fonts');

    $style = esc_html( 'body { font-family: ' );
    switch ( $font ) {
        case esc_html( "Dosis" ) :
            $style .= "'Open Sans', sans-serif";
            break;
        case esc_html( "Nunito" ) :
            $style .= "'Open Sans', sans-serif";
            break;
        case esc_html( "Oswald" ) :
            $style .= "'Droid Sans', sans-serif";
            break;
        case esc_html( "Oxygen" ) :
            $style .= "'Source Sans Pro', sans-serif";
            break;
        case esc_html( "Squada-One" ) :
            $style .= "'Allerta', sans-serif";
            break;
        case esc_html( "Yeseva-One" ) :
            $style .= "'Crimson Text', serif";
            break;
        case esc_html( "Josefin-Sans" ) :
            $style .= "'Open Sans', sans-serif";
            break; 
        case esc_html( "Amaranth" ) :
            $style .= "'Titillium Web', sans-serif";
            break;
        case esc_html( "Lora" ) :
            $style .= "'Source Sans Pro', sans-serif";
            break;
        case esc_html( "Old-Standard-TT" ) :
            $style .= "'Questrial', sans-serif";
            break; 
        case esc_html( "Playfair-Display" ) :
            $style .= "'Droid Sans', sans-serif";
            break;
        case esc_html( "Bree-Serif" ) :
            $style .= "'Lora', serif";
            break;
        case esc_html( "Playfair-Display-Lora" ) :
            $style .= "'Lora', serif";
            break;
        case esc_html( "Raleway" ) :
            $style .= "'Merriweather', serif";
            break;
        case esc_html( "Raleway-Roboto-Slab" ) :
            $style .= "'Roboto Slab', serif";
            break;
        case esc_html( "Poppins" ) :
            $style .= "'Muli', sans-serif";
            break;            
        
        default:
            $style .= "'Roboto Slab', serif";
            break;
    }
    wp_add_inline_style( 'diane-style',  $style . "; }" );
   
    $style = esc_html(
        'h1,h2,h3,h4,h5,h6,
        .tagcloud a,
        .tags a,
        .reply a,
        .fn,
        .diane-slide-item-text .diane-post-button,
        .diane-grid .diane-post-button,
        .diane-standard .diane-post-button,
        .page-numbers,
        .diane-pagination a,
        .post-categories li a,
        .diane-promo-title,
        .form-submit input,
        .diane-instagram-footer .clear,
        .diane_latest_posts_widget .latest-post .post-item-text span a,
        .widget_recent_entries li a,
        .widget_recent_comments .recentcomments,
        .widget_meta li a,
        .diane-link-pages span,
        .diane-link-pages a,
        .post-password-form input,
        .widget_nav_menu li a,
        .widget_pages .page_item a,
        .widget_archive li a,
        .diane-post-button,
        .widget_categories .cat-item a,
        .widget input,
        .diane-grid .diane-post-button { font-family: ');
    switch ( $font ) {
        case esc_html( "Dosis" ) :
            $style .= "'Dosis', sans-serif";
            break;
        case esc_html( "Nunito" ) :
            $style .=  "'Nunito', sans-serif";
            break;
        case esc_html( "Oswald" ) :
            $style .=  "'Oswald', sans-serif";
            break;
        case esc_html( "Oxygen" ) :
            $style .=  "'Oxygen', sans-serif";
            break;
        case esc_html( "Squada-One" ) :
            $style .= "'Squada One', cursive";
            break;
        case esc_html( "Yeseva-One" ) :
            $style .= "'Yeseva One', cursive";
            break;
        case esc_html( "Josefin-Sans" ) :
            $style .= "'Josefin Sans', sans-serif";
            break; 
        case esc_html( "Amaranth" ) :
            $style .= "'Amaranth', sans-serif";
            break;
        case esc_html( "Lora" ) :
            $style .= "'Lora', serif";
            break;
        case esc_html( "Old-Standard-TT" ) :
            $style .= "'Old Standard TT', serif";
            break; 
        case esc_html( "Playfair-Display" ) :
            $style .= "'Playfair Display', serif";
            break;
        case esc_html( "Bree-Serif" ) :
            $style .= "'Bree Serif', serif";
            break;
        case esc_html( "Playfair-Display-Lora" ) :
            $style .= "'Playfair Display', serif";
            break;
        case esc_html( "Raleway" ) :
            $style .= "'Raleway', sans-serif";
            break;
        case esc_html( "Poppins" ) :
            $style .= "'Poppins', sans-serif";
            break;            
        case esc_html( "Raleway-Roboto-Slab" ) :
            $style .= "'Raleway', sans-serif";
            break;
        default:
            $style .= "'Raleway', sans-serif";
            break;
    }
    
    wp_add_inline_style( 'diane-style',  $style . "; }" );
}

add_action('wp_enqueue_scripts', 'diane_customizer_css');
add_action('wp_enqueue_scripts', 'diane_fonts_pair');