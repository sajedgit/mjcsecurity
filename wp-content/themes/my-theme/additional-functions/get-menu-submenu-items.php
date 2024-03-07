<?php


// loop the multidimensional array recursively to generate the HTML
function GenerateNavHTML($menu_items)
{
    $html='<ul>';
    foreach ($menu_items as $item) {

        $html.= '<li><a href="' . $item['url'] . '">' . $item['title'] . '</a>';
          
        if( !empty($item['children']) )
        {
         $html.='<ul>';
         foreach($item['children'] as $child)
         {
             $html.= '<li><a href="' . $child['url'] . '">' . $child['title'] . '</a></li>';
         }
         $html.='</ul>';
        }
        $html.='</li>';
    } 
       
       
    return $html;
}


function wp_get_menu_array(){
    
    
    $menu_name = "header-menu";
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
    $array_menu = wp_get_nav_menu_items( $menu->term_id); 
    $menu = array();
    foreach ($array_menu as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID']      =   $m->ID;
            $menu[$m->ID]['title']       =   $m->title;
            $menu[$m->ID]['url']         =   $m->url;
            $menu[$m->ID]['children']    =   array();
        }
    }
    $submenu = array();
    foreach ($array_menu as $m) {
        if ($m->menu_item_parent) {
            $submenu[$m->ID] = array();
            $submenu[$m->ID]['ID']       =   $m->ID;
            $submenu[$m->ID]['title']    =   $m->title;
            $submenu[$m->ID]['url']  =   $m->url;
            $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
        }
    }
  
   echo GenerateNavHTML($menu);
    //return $menu;

}
