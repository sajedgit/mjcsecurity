<?php


function cptui_register_my_cpts_why_choose_us_post() {

	/**
	 * Post Type: Why Choose Us.
	 */

	$labels = [
		"name" => esc_html__( "Why Choose Us", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Why Choose Us", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "Why Choose Us", "custom-post-type-ui" ),
		"all_items" => esc_html__( "All Why Choose Us", "custom-post-type-ui" ),
		"add_new" => esc_html__( "Add new", "custom-post-type-ui" ),
		"add_new_item" => esc_html__( "Add new", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Edit", "custom-post-type-ui" ),
		"new_item" => esc_html__( "New Why Choose Us", "custom-post-type-ui" ),
		"view_item" => esc_html__( "View Why Choose Us", "custom-post-type-ui" ),
		"view_items" => esc_html__( "View Why Choose Us", "custom-post-type-ui" ),
		"search_items" => esc_html__( "Search Why Choose Us", "custom-post-type-ui" ),
		"not_found" => esc_html__( "No Why Choose Us found", "custom-post-type-ui" ),
		"not_found_in_trash" => esc_html__( "No Why Choose Us found in trash", "custom-post-type-ui" ),
		"parent" => esc_html__( "Parent Why Choose Us:", "custom-post-type-ui" ),
		"featured_image" => esc_html__( "Featured image for this Why Choose Us", "custom-post-type-ui" ),
		"set_featured_image" => esc_html__( "Set featured image for this Why Choose Us", "custom-post-type-ui" ),
		"remove_featured_image" => esc_html__( "Remove featured image for this Why Choose Us", "custom-post-type-ui" ),
		"use_featured_image" => esc_html__( "Use as featured image for this Why Choose Us", "custom-post-type-ui" ),
		"archives" => esc_html__( "Why Choose Us archives", "custom-post-type-ui" ),
		"insert_into_item" => esc_html__( "Insert into Why Choose Us", "custom-post-type-ui" ),
		"uploaded_to_this_item" => esc_html__( "Upload to this Why Choose Us", "custom-post-type-ui" ),
		"filter_items_list" => esc_html__( "Filter Why Choose Us list", "custom-post-type-ui" ),
		"items_list_navigation" => esc_html__( "Why Choose Us list navigation", "custom-post-type-ui" ),
		"items_list" => esc_html__( "Why Choose Us list", "custom-post-type-ui" ),
		"attributes" => esc_html__( "Why Choose Us attributes", "custom-post-type-ui" ),
		"name_admin_bar" => esc_html__( "Why Choose Us", "custom-post-type-ui" ),
		"item_published" => esc_html__( "Why Choose Us published", "custom-post-type-ui" ),
		"item_published_privately" => esc_html__( "Why Choose Us published privately.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => esc_html__( "Why Choose Us reverted to draft.", "custom-post-type-ui" ),
		"item_trashed" => esc_html__( "Why Choose Us trashed.", "custom-post-type-ui" ),
		"item_scheduled" => esc_html__( "Why Choose Us scheduled", "custom-post-type-ui" ),
"item_updated" => esc_html__( "Why Choose Us updated.", "custom-post-type-ui" ),
		"parent_item_colon" => esc_html__( "Parent Why Choose Us:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Why Choose Us", "custom-post-type-ui" ),
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
		"can_export" => false,
		"rewrite" => [ "slug" => "why-choose-us-post", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail","custom-fields"],
		"show_in_graphql" => false,
	];

	register_post_type( "why-choose-us-post", $args );
}

add_action( 'init', 'cptui_register_my_cpts_why_choose_us_post' );




function cptui_register_my_cpts_our_clients_say_post() {

	/**
	 * Post Type: Our Clients Say.
	 */

	$labels = [
		"name" => esc_html__( "Our Clients Say", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Our Clients Say", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "Our Clients Say", "custom-post-type-ui" ),
		"all_items" => esc_html__( "All Our Clients Say", "custom-post-type-ui" ),
		"add_new" => esc_html__( "Add new client", "custom-post-type-ui" ),
		"add_new_item" => esc_html__( "Add new client", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Edit", "custom-post-type-ui" ),
		"new_item" => esc_html__( "New Our Clients Say", "custom-post-type-ui" ),
		"view_item" => esc_html__( "View Our Clients Say", "custom-post-type-ui" ),
		"view_items" => esc_html__( "View Our Clients Say", "custom-post-type-ui" ),
		"search_items" => esc_html__( "Search Our Clients Say", "custom-post-type-ui" ),
		"not_found" => esc_html__( "No Our Clients Say found", "custom-post-type-ui" ),
		"not_found_in_trash" => esc_html__( "No Our Clients Say found in trash", "custom-post-type-ui" ),
		"parent" => esc_html__( "Parent Our Clients Say:", "custom-post-type-ui" ),
		"featured_image" => esc_html__( "Featured image for this Our Clients Say", "custom-post-type-ui" ),
		"set_featured_image" => esc_html__( "Set featured image for this Our Clients Say", "custom-post-type-ui" ),
		"remove_featured_image" => esc_html__( "Remove featured image for this Our Clients Say", "custom-post-type-ui" ),
		"use_featured_image" => esc_html__( "Use as featured image for this Our Clients Say", "custom-post-type-ui" ),
		"archives" => esc_html__( "Our Clients Say archives", "custom-post-type-ui" ),
		"insert_into_item" => esc_html__( "Insert into Our Clients Say", "custom-post-type-ui" ),
		"uploaded_to_this_item" => esc_html__( "Upload to this Our Clients Say", "custom-post-type-ui" ),
		"filter_items_list" => esc_html__( "Filter Our Clients Say list", "custom-post-type-ui" ),
		"items_list_navigation" => esc_html__( "Our Clients Say list navigation", "custom-post-type-ui" ),
		"items_list" => esc_html__( "Our Clients Say list", "custom-post-type-ui" ),
		"attributes" => esc_html__( "Our Clients Say attributes", "custom-post-type-ui" ),
		"name_admin_bar" => esc_html__( "Our Clients Say", "custom-post-type-ui" ),
		"item_published" => esc_html__( "Our Clients Say published", "custom-post-type-ui" ),
		"item_published_privately" => esc_html__( "Our Clients Say published privately.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => esc_html__( "Our Clients Say reverted to draft.", "custom-post-type-ui" ),
		"item_trashed" => esc_html__( "Our Clients Say trashed.", "custom-post-type-ui" ),
		"item_scheduled" => esc_html__( "Our Clients Say scheduled", "custom-post-type-ui" ),
"item_updated" => esc_html__( "Our Clients Say updated.", "custom-post-type-ui" ),
		"parent_item_colon" => esc_html__( "Parent Our Clients Say:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Our Clients Say", "custom-post-type-ui" ),
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
		"can_export" => false,
		"rewrite" => [ "slug" => "our-clients-say-post", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail","custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "our-clients-say-post", $args );
}

add_action( 'init', 'cptui_register_my_cpts_our_clients_say_post' );

