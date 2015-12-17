<?php
/**
 * LS child theme.
 */

function listify_child_styles() {
		wp_enqueue_style( 'listify-child-vendor', get_stylesheet_directory_uri().'/css/vendor.css' );
    wp_enqueue_style( 'listify-child', get_stylesheet_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'listify_child_styles', 999 );

function js_library() {
    if ( is_page($post->ID) == 120 ) { //120 is your page id
        //wp_dequeue_script();
    }

    if ( is_page('contact') ) { //about-us is using page slug, you can get page slug http://yourdomain.com/about-us
        wp_enqueue_script( 'ls-theme-child-js', get_stylesheet_directory_uri().'/js/jquery.flexslider-min.js' );
        wp_enqueue_script( 'ls-theme-child-js', get_stylesheet_directory_uri().'/js/smooth-scroll.min.js' );
        wp_enqueue_script( 'ls-theme-child-js', get_stylesheet_directory_uri().'/js/skrollr.min.js' );
        wp_enqueue_script( 'ls-theme-child-js', get_stylesheet_directory_uri().'/js/scrollReveal.min.js' );
        wp_enqueue_script( 'ls-theme-child-js', get_stylesheet_directory_uri().'/js/scripts.js' );
    }
}

/** Place any new code below this line */

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'=> 'Our Partners',
		'id' => 'widget-area-partners',
		'before_widget' => '<div class="our-partners">',
		'after_widget' => '</div>',
	));

	register_sidebar(array(
		'name'=> 'Home Three Steps',
		'id' => 'widget-area-home-three-steps',
		'before_widget' => '',
		'after_widget' => '',
	));
}
