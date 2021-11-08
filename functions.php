<?php

function addStyleSheets():void {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'addStyleSheets');

add_theme_support('menus');

register_nav_menus(
	array(
		'main-menu' => 'Main menu location',
		'footer-menu' => 'Footer menu location'
	)
);

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );