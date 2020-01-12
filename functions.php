<?php
/**
 * tim-doerzbacher-wp-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tim-doerzbacher-wp-theme
 */

add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

function enqueue_child_theme_styles() {
	$parent_style = 'Dazzling';

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

	// wp_enqueue_style( 'tim-doerzbacher-wp-theme',
	// 	get_stylesheet_directory_uri() . '/inc/css/main.css',
	// 	array( $parent_style ),
	// 	wp_get_theme()->get('Version')
	// );
	//
	// // Disable the parent's Bootstrap v3 template
	// wp_dequeue_style( 'dazzling-bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.min.css' );
	// wp_dequeue_style( 'dazzling-bootstrap', get_template_directory_uri() . '/inc/css/font-awesome.min.css' );
}
