<?php
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS() {

	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'plugins', get_template_directory_uri() . '/assets/css/plugins.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
	

	wp_enqueue_script( 'plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), 1.1, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), 1.1, true );
}

add_action('wp_enqueue_scripts', 'add_normalize_CSS');

// Register a new sidebar simply named 'sidebar'
function add_widget_support() {
               register_sidebar( array(
                               'name'          => 'Sidebar',
                               'id'            => 'sidebar',
                               'before_widget' => '<div>',
                               'after_widget'  => '</div>',
                               'before_title'  => '<h2>',
                               'after_title'   => '</h2>',
               ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_widget_support' );

 // Register a new navigation menu
function add_Main_Nav() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
// Hook to the init action hook, run our navigation menu function
add_action( 'init', 'add_Main_Nav' );


function tw_disable_create_new_post() {

  global $wp_post_types;
  if(isset($wp_post_types['history-post-type']->cap))
   $wp_post_types['history-post-type']->cap->create_posts ='do_not_allow';

}

add_action('init','tw_disable_create_new_post'); 

add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );


/*=============================================
=            BREADCRUMBS			            =

 Credit: http://www.thatweblook.co.uk/blog/tutorials/tutorial-wordpress-breadcrumb-function/

=============================================*/


function the_breadcrumb() {

    $sep = ' > ';

    if (!is_front_page()) {
	
	// Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs" style="color:#fff">';
        echo '<a style="color:#fff" href="';
        echo get_option('home');
        echo '">';
        echo "Home";
        echo '</a>' . $sep;
        
	
	// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
            //the_category('title_li=');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }
	
	// If the current page is a single post, show its title with the separator
        if (is_single()) {
          //  echo $sep;
            the_title();
        }
	
	// If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }
	
	// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_post($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }

        echo '</div>';
    }
}

/*--end breadcrumb --*/



/** Start Custom post type */

function cptui_register_my_cpts() {

	/**
	 * Post Type: Services.
	 */

	$labels = [
		"name" => esc_html__( "Services", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Service", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "My Services", "custom-post-type-ui" ),
		"all_items" => esc_html__( "All Services", "custom-post-type-ui" ),
		"add_new" => esc_html__( "Add new", "custom-post-type-ui" ),
		"add_new_item" => esc_html__( "Add new Service", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Edit Service", "custom-post-type-ui" ),
		"new_item" => esc_html__( "New Service", "custom-post-type-ui" ),
		"view_item" => esc_html__( "View Service", "custom-post-type-ui" ),
		"view_items" => esc_html__( "View Services", "custom-post-type-ui" ),
		"search_items" => esc_html__( "Search Services", "custom-post-type-ui" ),
		"not_found" => esc_html__( "No Services found", "custom-post-type-ui" ),
		"not_found_in_trash" => esc_html__( "No Services found in trash", "custom-post-type-ui" ),
		"parent" => esc_html__( "Parent Service:", "custom-post-type-ui" ),
		"featured_image" => esc_html__( "Featured image for this Service", "custom-post-type-ui" ),
		"set_featured_image" => esc_html__( "Set featured image for this Service", "custom-post-type-ui" ),
		"remove_featured_image" => esc_html__( "Remove featured image for this Service", "custom-post-type-ui" ),
		"use_featured_image" => esc_html__( "Use as featured image for this Service", "custom-post-type-ui" ),
		"archives" => esc_html__( "Service archives", "custom-post-type-ui" ),
		"insert_into_item" => esc_html__( "Insert into Service", "custom-post-type-ui" ),
		"uploaded_to_this_item" => esc_html__( "Upload to this Service", "custom-post-type-ui" ),
		"filter_items_list" => esc_html__( "Filter Services list", "custom-post-type-ui" ),
		"items_list_navigation" => esc_html__( "Services list navigation", "custom-post-type-ui" ),
		"items_list" => esc_html__( "Services list", "custom-post-type-ui" ),
		"attributes" => esc_html__( "Services attributes", "custom-post-type-ui" ),
		"name_admin_bar" => esc_html__( "Service", "custom-post-type-ui" ),
		"item_published" => esc_html__( "Service published", "custom-post-type-ui" ),
		"item_published_privately" => esc_html__( "Service published privately.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => esc_html__( "Service reverted to draft.", "custom-post-type-ui" ),
		"item_trashed" => esc_html__( "Service trashed.", "custom-post-type-ui" ),
		"item_scheduled" => esc_html__( "Service scheduled", "custom-post-type-ui" ),
		"item_updated" => esc_html__( "Service updated.", "custom-post-type-ui" ),
		"parent_item_colon" => esc_html__( "Parent Service:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Services", "custom-post-type-ui" ),
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
		"rewrite" => [ "slug" => "service-post", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "page-attributes" ],
		"taxonomies" => [ "category", "post_tag" ],
		"show_in_graphql" => false,
	];

	register_post_type( "service-post", $args );

	/**
	 * Post Type: Service Heading.
	 */

	$labels = [
		"name" => esc_html__( "Service Heading", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Service Heading", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "My Service Heading", "custom-post-type-ui" ),
		"all_items" => esc_html__( "All Service Heading", "custom-post-type-ui" ),
		"add_new" => esc_html__( "Add new", "custom-post-type-ui" ),
		"add_new_item" => esc_html__( "Add new Service Heading", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Edit Service Heading", "custom-post-type-ui" ),
		"new_item" => esc_html__( "New Service Heading", "custom-post-type-ui" ),
		"view_item" => esc_html__( "View Service Heading", "custom-post-type-ui" ),
		"view_items" => esc_html__( "View Service Heading", "custom-post-type-ui" ),
		"search_items" => esc_html__( "Search Service Heading", "custom-post-type-ui" ),
		"not_found" => esc_html__( "No Service Heading found", "custom-post-type-ui" ),
		"not_found_in_trash" => esc_html__( "No Service Heading found in trash", "custom-post-type-ui" ),
		"parent" => esc_html__( "Parent Service Heading:", "custom-post-type-ui" ),
		"featured_image" => esc_html__( "Featured image for this Service Heading", "custom-post-type-ui" ),
		"set_featured_image" => esc_html__( "Set featured image for this Service Heading", "custom-post-type-ui" ),
		"remove_featured_image" => esc_html__( "Remove featured image for this Service Heading", "custom-post-type-ui" ),
		"use_featured_image" => esc_html__( "Use as featured image for this Service Heading", "custom-post-type-ui" ),
		"archives" => esc_html__( "Service Heading archives", "custom-post-type-ui" ),
		"insert_into_item" => esc_html__( "Insert into Service Heading", "custom-post-type-ui" ),
		"uploaded_to_this_item" => esc_html__( "Upload to this Service Heading", "custom-post-type-ui" ),
		"filter_items_list" => esc_html__( "Filter Service Heading list", "custom-post-type-ui" ),
		"items_list_navigation" => esc_html__( "Service Heading list navigation", "custom-post-type-ui" ),
		"items_list" => esc_html__( "Service Heading list", "custom-post-type-ui" ),
		"attributes" => esc_html__( "Service Heading attributes", "custom-post-type-ui" ),
		"name_admin_bar" => esc_html__( "Service Heading", "custom-post-type-ui" ),
		"item_published" => esc_html__( "Service Heading published", "custom-post-type-ui" ),
		"item_published_privately" => esc_html__( "Service Heading published privately.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => esc_html__( "Service Heading reverted to draft.", "custom-post-type-ui" ),
		"item_trashed" => esc_html__( "Service Heading trashed.", "custom-post-type-ui" ),
		"item_scheduled" => esc_html__( "Service Heading scheduled", "custom-post-type-ui" ),
		"item_updated" => esc_html__( "Service Heading updated.", "custom-post-type-ui" ),
		"parent_item_colon" => esc_html__( "Parent Service Heading:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Service Heading", "custom-post-type-ui" ),
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
		"rewrite" => [ "slug" => "service-heading", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-admin-customizer",
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
		"show_in_graphql" => false,
	];

	register_post_type( "service-heading", $args );

	/**
	 * Post Type: History.
	 */

	$labels = [
		"name" => esc_html__( "History", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "History", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "My History", "custom-post-type-ui" ),
		"all_items" => esc_html__( "All History", "custom-post-type-ui" ),
		"add_new" => esc_html__( "Add new", "custom-post-type-ui" ),
		"add_new_item" => esc_html__( "Add new History", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Edit History", "custom-post-type-ui" ),
		"new_item" => esc_html__( "New History", "custom-post-type-ui" ),
		"view_item" => esc_html__( "View History", "custom-post-type-ui" ),
		"view_items" => esc_html__( "View History", "custom-post-type-ui" ),
		"search_items" => esc_html__( "Search History", "custom-post-type-ui" ),
		"not_found" => esc_html__( "No History found", "custom-post-type-ui" ),
		"not_found_in_trash" => esc_html__( "No History found in trash", "custom-post-type-ui" ),
		"parent" => esc_html__( "Parent History:", "custom-post-type-ui" ),
		"featured_image" => esc_html__( "Featured image for this History", "custom-post-type-ui" ),
		"set_featured_image" => esc_html__( "Set featured image for this History", "custom-post-type-ui" ),
		"remove_featured_image" => esc_html__( "Remove featured image for this History", "custom-post-type-ui" ),
		"use_featured_image" => esc_html__( "Use as featured image for this History", "custom-post-type-ui" ),
		"archives" => esc_html__( "History archives", "custom-post-type-ui" ),
		"insert_into_item" => esc_html__( "Insert into History", "custom-post-type-ui" ),
		"uploaded_to_this_item" => esc_html__( "Upload to this History", "custom-post-type-ui" ),
		"filter_items_list" => esc_html__( "Filter History list", "custom-post-type-ui" ),
		"items_list_navigation" => esc_html__( "History list navigation", "custom-post-type-ui" ),
		"items_list" => esc_html__( "History list", "custom-post-type-ui" ),
		"attributes" => esc_html__( "History attributes", "custom-post-type-ui" ),
		"name_admin_bar" => esc_html__( "History", "custom-post-type-ui" ),
		"item_published" => esc_html__( "History published", "custom-post-type-ui" ),
		"item_published_privately" => esc_html__( "History published privately.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => esc_html__( "History reverted to draft.", "custom-post-type-ui" ),
		"item_trashed" => esc_html__( "History trashed.", "custom-post-type-ui" ),
		"item_scheduled" => esc_html__( "History scheduled", "custom-post-type-ui" ),
		"item_updated" => esc_html__( "History updated.", "custom-post-type-ui" ),
		"parent_item_colon" => esc_html__( "Parent History:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "History", "custom-post-type-ui" ),
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
		"rewrite" => [ "slug" => "history-post-type", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "history-post-type", $args );

	/**
	 * Post Type: Team.
	 */

	$labels = [
		"name" => esc_html__( "Team", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Team", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "My Team", "custom-post-type-ui" ),
		"all_items" => esc_html__( "All Members", "custom-post-type-ui" ),
		"add_new" => esc_html__( "Add new member", "custom-post-type-ui" ),
		"add_new_item" => esc_html__( "Add new Member", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Edit member", "custom-post-type-ui" ),
		"new_item" => esc_html__( "New member", "custom-post-type-ui" ),
		"view_item" => esc_html__( "View member", "custom-post-type-ui" ),
		"view_items" => esc_html__( "View Member", "custom-post-type-ui" ),
		"search_items" => esc_html__( "Search Member", "custom-post-type-ui" ),
		"not_found" => esc_html__( "No Member found", "custom-post-type-ui" ),
		"not_found_in_trash" => esc_html__( "No Member found in trash", "custom-post-type-ui" ),
		"parent" => esc_html__( "Parent Member:", "custom-post-type-ui" ),
		"featured_image" => esc_html__( "Featured image for this Member", "custom-post-type-ui" ),
		"set_featured_image" => esc_html__( "Set featured image for this Member", "custom-post-type-ui" ),
		"remove_featured_image" => esc_html__( "Remove featured image for this Member", "custom-post-type-ui" ),
		"use_featured_image" => esc_html__( "Use as featured image for this Member", "custom-post-type-ui" ),
		"archives" => esc_html__( "Member archives", "custom-post-type-ui" ),
		"insert_into_item" => esc_html__( "Insert into Member", "custom-post-type-ui" ),
		"uploaded_to_this_item" => esc_html__( "Upload to this Member", "custom-post-type-ui" ),
		"filter_items_list" => esc_html__( "Filter Member list", "custom-post-type-ui" ),
		"items_list_navigation" => esc_html__( "Member list navigation", "custom-post-type-ui" ),
		"items_list" => esc_html__( "Member list", "custom-post-type-ui" ),
		"attributes" => esc_html__( "Member attributes", "custom-post-type-ui" ),
		"name_admin_bar" => esc_html__( "Member", "custom-post-type-ui" ),
		"item_published" => esc_html__( "Member published", "custom-post-type-ui" ),
		"item_published_privately" => esc_html__( "Member published privately.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => esc_html__( "Member reverted to draft.", "custom-post-type-ui" ),
		"item_trashed" => esc_html__( "Member trashed.", "custom-post-type-ui" ),
		"item_scheduled" => esc_html__( "Member scheduled", "custom-post-type-ui" ),
		"item_updated" => esc_html__( "Member updated.", "custom-post-type-ui" ),
		"parent_item_colon" => esc_html__( "Parent Member:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Team", "custom-post-type-ui" ),
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
		"rewrite" => [ "slug" => "team-post-type", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
		"taxonomies" => [ "category" ],
		"show_in_graphql" => false,
	];

	register_post_type( "team-post-type", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


/** End Custom post type */