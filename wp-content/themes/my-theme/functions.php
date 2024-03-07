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


include_once get_template_directory() . '/additional-functions/breadcrumb.php';
include_once get_template_directory() . '/additional-functions/custom-post-type.php';
include_once get_template_directory() . '/additional-functions/get-menu-submenu-items.php';