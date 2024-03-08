<?php
function sajed_add_theme_page(){
  // add_menu_page( 
  //   'Theme Option for Admin', // $page_title:string, 
  //   'Theme Option', // $menu_title:string, 
  //   'manage_options', // $capability:string, 
  //   'ali_theme_option', // $menu_slug:string, 
  //   'ali_theme_create_page', // $callback:callable, 
  //   'dashicons-visibility', // $icon_url:string, 
  //   101,// $position:integer|float|null 
  // );
  add_menu_page('Theme Option for Admin', 'Theme Option', 'manage_options', 'sajed_theme_option', 'sajed_theme_general_page','dashicons-admin-generic', 2);

  add_submenu_page( 'sajed_theme_option', 'Theme Option', 'General', 'manage_options', 'sajed_theme_option', 'sajed_theme_general_page',2 );
 // add_submenu_page( 'sajed_theme_option', 'Theme Custom CSS', 'Custom CSS', 'manage_options', 'ali_custom_css', 'ali_theme_custom_css_page',1 );

}
add_action( 'admin_menu', 'sajed_add_theme_page');

function sajed_theme_general_page(){
  // Generating Theme option
  require_once(get_template_directory() . '/theme-options/general.php');
}
