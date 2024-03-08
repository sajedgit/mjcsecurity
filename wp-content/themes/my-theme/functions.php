<?php
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS() {

	
	wp_enqueue_style( 'plugins', get_template_directory_uri() . '/assets/css/plugins.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	

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

add_theme_support( 'post-thumbnails', array( 'post', 'page','our-clients-say-post', 'why-choose-us-post' ) );



// //callback to print a simple section in general page
// function my_custom_section_callback(){
// 	echo 'This text is inside the callback!';
// }

// //callback to print a simple input field
// function my_custom_field_callback(){
// 	echo '<input type="text">';
// }

// function add_my_custom_section_to_settings(){

// 	//add the section to general page in admin panel
// 	add_settings_section(
// 		'id_for_settings_section',
// 		'A custom title to show',
// 		'my_custom_section_callback',
// 		'general',
// 		array(
// 			'before_section' => 'Text Before the Section', //html for before the section
// 			'after_section' => 'Text After the Section', //html for after the section
// 		)
// 	);

// 	//add a sample field to this section.
// 	add_settings_field(
// 		'id_for_setting_field',
// 		'A custom field',
// 		'my_custom_field_callback',
// 		'general',
// 		//put the id of custom section here:
// 		'id_for_settings_section'
// 	);

// }
// add_action('admin_init', 'add_my_custom_section_to_settings');



include_once get_template_directory() . '/additional-functions/breadcrumb.php';
include_once get_template_directory() . '/additional-functions/custom-post-type.php';
include_once get_template_directory() . '/additional-functions/get-menu-submenu-items.php';
include_once get_template_directory() . '/theme-options/admin-theme-options.php';


// function nexmag_customize_register( $wp_customize ) {

// 	// $wp_customize->add_panel('demo_panel_id',array(
// 	// 		'title'=>'Demo panel title'
// 	//  ));
		
		
// 	$wp_customize->add_section('demo_section_id',array(
// 			'title'=>'Logo'
// 	));
		
		
// 	$wp_customize->add_setting('demo_setting_id',array(
// 			'default'=>'klk',
// 	));
	
// 	$wp_customize->add_control('demo_control_id',array(
// 			'type'=>'text',
// 			'section'=>'demo_section_id',
// 			'settings'=>'demo_setting_id',
// 	));

// 	$wp_customize->add_control('demo_control_id2',array(
// 		'type'=>'text',
// 		'section'=>'demo_section_id',
// 		'settings'=>'demo_setting_id',
// ));
	
// 	}
// 	add_action( 'customize_register', 'nexmag_customize_register' );


// add logo option
add_theme_support( 'custom-logo', array(
    'height'      => 70,
    'width'       => 70,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );

	// add order option in admin grid view
	add_filter('manage_service-post_posts_columns', 'my_service_post_columns');
	add_action( 'manage_service-post_posts_custom_column', 'my_service_post_columns_value', 10, 2);

	function my_service_post_columns($columns) {
		$columns['order'] = 'Order';
		return $columns;
	}
	function my_service_post_columns_value($column, $post_id) {
		global $post;
		echo $post->menu_order;
	}
	// end of order option in admin grid view

function my_excerpt_length($length)
{
	return 20;
} 
add_filter('excerpt_length', 'my_excerpt_length');

/** start custom post type placeholder replace */
function our_clients_say_title_text( $title ){
	$screen = get_current_screen();
  
	if  ( 'our-clients-say-post' == $screen->post_type ) {
		 $title = 'Client Name';
	}
  
	return $title;
}
  
add_filter( 'enter_title_here', 'our_clients_say_title_text' );

/** end custom post type placeholder replace */