<?php
function cptui_register_my_cpts() {

	/**
	 * Post Type: Ebook.
	 */

	$labels = [
		"name" => __( "Ebook", "custom-post-type-ui" ),
		"singular_name" => __( "Ebook", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Ebook", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "ebook", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-admin-page",
		"supports" => [ "title", "editor", "thumbnail", "export" ],
		"show_in_graphql" => false,
	];

	register_post_type( "ebook", $args );
		/**
	 * Post Type: Video.
	 */

	$labels = [
		"name" => __( "Video", "custom-post-type-ui" ),
		"singular_name" => __( "Video", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Video", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "postvideo", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "postvideo", $args );

}

add_action( 'init', 'cptui_register_my_cpts' );