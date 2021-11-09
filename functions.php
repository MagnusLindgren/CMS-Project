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

function slug_provide_walker_instance( $args ) {
    if ( isset( $args['walker'] ) && is_string( $args['walker'] ) && class_exists( $args['walker'] ) ) {
        $args['walker'] = new $args['walker'];
    }
    return $args;
}
add_filter( 'wp_nav_menu_args', 'slug_provide_walker_instance', 1001 );

function cptui_register_my_cpts_projects() {

	/**
	 * Post Type: Projects.
	 */

	$labels = [
		"name" => __( "Projects", "custom-post-type-ui" ),
		"singular_name" => __( "Project", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Projects", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "projects", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "projects", $args );
}

add_action( 'init', 'cptui_register_my_cpts_projects' );
