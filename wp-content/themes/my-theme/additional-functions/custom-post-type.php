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



/**  * Post Type: Our Clients Say. */
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

/** start custom post type placeholder replace */
function our_clients_say_title_text( $title ){
	$screen = get_current_screen();
  
	if  ( 'our-clients-say-post' == $screen->post_type ) 
	{
		 $title = 'Client Name';
	}
  
	return $title;
}
  
add_filter( 'enter_title_here', 'our_clients_say_title_text' );

/** end custom post type placeholder replace */

/**  * End Post Type: Our Clients Say. */




/**  * Post Type: Gallery. */
function cptui_register_my_cpts_gallery_post() {

	/**
	 * Post Type: Gallery.
	 */

	$labels = [
		"name" => esc_html__( "Gallery", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Gallery", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "Gallery", "custom-post-type-ui" ),
		"all_items" => esc_html__( "All Image", "custom-post-type-ui" ),
		"add_new" => esc_html__( "Add new Image", "custom-post-type-ui" ),
		"add_new_item" => esc_html__( "Add new Image", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Edit", "custom-post-type-ui" ),
		"new_item" => esc_html__( "New Image", "custom-post-type-ui" ),
		"view_item" => esc_html__( "View Image", "custom-post-type-ui" ),
		"view_items" => esc_html__( "View Image", "custom-post-type-ui" ),
		"search_items" => esc_html__( "Search Image", "custom-post-type-ui" ),
		"not_found" => esc_html__( "No Image found", "custom-post-type-ui" ),
		"not_found_in_trash" => esc_html__( "No Image found in trash", "custom-post-type-ui" ),
		"parent" => esc_html__( "Parent Image:", "custom-post-type-ui" ),
		"featured_image" => esc_html__( "Featured image for this Gallery", "custom-post-type-ui" ),
		"set_featured_image" => esc_html__( "Set featured image for this Gallery", "custom-post-type-ui" ),
		"remove_featured_image" => esc_html__( "Remove featured image for this Gallery", "custom-post-type-ui" ),
		"use_featured_image" => esc_html__( "Use as featured image for this Gallery", "custom-post-type-ui" ),
		"archives" => esc_html__( "Gallery archives", "custom-post-type-ui" ),
		"insert_into_item" => esc_html__( "Insert into Gallery", "custom-post-type-ui" ),
		"uploaded_to_this_item" => esc_html__( "Upload to this Gallery", "custom-post-type-ui" ),
		"filter_items_list" => esc_html__( "Filter Gallery list", "custom-post-type-ui" ),
		"items_list_navigation" => esc_html__( "Gallery list navigation", "custom-post-type-ui" ),
		"items_list" => esc_html__( "Gallery list", "custom-post-type-ui" ),
		"attributes" => esc_html__( "Gallery attributes", "custom-post-type-ui" ),
		"name_admin_bar" => esc_html__( "Gallery", "custom-post-type-ui" ),
		"item_published" => esc_html__( "Gallery published", "custom-post-type-ui" ),
		"item_published_privately" => esc_html__( "Gallery published privately.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => esc_html__( "Gallery reverted to draft.", "custom-post-type-ui" ),
		"item_trashed" => esc_html__( "Gallery trashed.", "custom-post-type-ui" ),
		"item_scheduled" => esc_html__( "Gallery scheduled", "custom-post-type-ui" ),
"item_updated" => esc_html__( "Gallery updated.", "custom-post-type-ui" ),
		"parent_item_colon" => esc_html__( "Parent Gallery:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Gallery", "custom-post-type-ui" ),
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
		"rewrite" => [ "slug" => "gallery-post", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail","custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "gallery-post", $args );
}

add_action( 'init', 'cptui_register_my_cpts_gallery_post' );



/** start custom post type placeholder replace */
function gallery_title_text( $title ){
	$screen = get_current_screen();
  
	if  ( 'gallery-post' == $screen->post_type ) 
	{
		 $title = 'Image caption';
	}
  
	return $title;
}
  
add_filter( 'enter_title_here', 'gallery_title_text' );

/** end custom post type placeholder replace */


// add album option in admin grid view
add_filter('manage_gallery-post_posts_columns', 'my_gallery_post_columns');
add_action( 'manage_gallery-post_posts_custom_column', 'my_gallery_post_columns_value', 10, 2);

function my_gallery_post_columns($columns) {
	$columns['album'] = 'Album';
	return $columns;
}
function my_gallery_post_columns_value($column, $post_id) {
	global $post;
	$post_type = 'gallery-post';
	$taxonomies = get_object_taxonomies($post_type);   
    $taxonomy_names = wp_get_object_terms($post_id, $taxonomies,  array("fields" => "names")); 
    echo "<strong>".implode(", ",$taxonomy_names)."</strong>";
	//echo $post->ID;
}
// end of album option in admin grid view



/**  * End Post Type: Gallery. */



/**  * Taxonomy: Albums */
function cptui_register_my_taxes_album() {

	/**
	 * Taxonomy: Albums.
	 */

	$labels = [
		"name" => esc_html__( "Albums", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Album", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "Albums", "custom-post-type-ui" ),
		"all_items" => esc_html__( "All Albums", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Edit Album", "custom-post-type-ui" ),
		"view_item" => esc_html__( "View Album", "custom-post-type-ui" ),
		"update_item" => esc_html__( "Update Album name", "custom-post-type-ui" ),
		"add_new_item" => esc_html__( "Add new Album", "custom-post-type-ui" ),
		"new_item_name" => esc_html__( "New Album name", "custom-post-type-ui" ),
		"parent_item" => esc_html__( "Parent Album", "custom-post-type-ui" ),
		"parent_item_colon" => esc_html__( "Parent Album:", "custom-post-type-ui" ),
		"search_items" => esc_html__( "Search Albums", "custom-post-type-ui" ),
		"popular_items" => esc_html__( "Popular Albums", "custom-post-type-ui" ),
		"separate_items_with_commas" => esc_html__( "Separate Albums with commas", "custom-post-type-ui" ),
		"add_or_remove_items" => esc_html__( "Add or remove Albums", "custom-post-type-ui" ),
		"choose_from_most_used" => esc_html__( "Choose from the most used Albums", "custom-post-type-ui" ),
		"not_found" => esc_html__( "No Albums found", "custom-post-type-ui" ),
		"no_terms" => esc_html__( "No Albums", "custom-post-type-ui" ),
		"items_list_navigation" => esc_html__( "Albums list navigation", "custom-post-type-ui" ),
		"items_list" => esc_html__( "Albums list", "custom-post-type-ui" ),
		"back_to_items" => esc_html__( "Back to Albums", "custom-post-type-ui" ),
		"name_field_description" => esc_html__( "The name is how it appears on your site.", "custom-post-type-ui" ),
		"parent_field_description" => esc_html__( "Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "custom-post-type-ui" ),
		"slug_field_description" => esc_html__( "The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "custom-post-type-ui" ),
		"desc_field_description" => esc_html__( "The description is not prominent by default; however, some themes may show it.", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => esc_html__( "Albums", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'album', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "album",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "album", [ "gallery-post" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_album' );


/**  * End Taxonomy: Albums */