<?php
/**
 * Listify child theme.
 */

function listify_child_styles() {
		wp_enqueue_style( 'listify-child-vendor', get_stylesheet_directory_uri().'/css/vendor.css' );
    wp_enqueue_style( 'listify-child', get_stylesheet_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'listify_child_styles', 999 );

/** Place any new code below this line */

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'=> 'Our Partners',
		'id' => 'widget-area-partners',
		'before_widget' => '<div class="our-partners">',
		'after_widget' => '</div>',
	));
}
