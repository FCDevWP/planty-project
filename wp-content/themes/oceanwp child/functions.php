<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

// function add_extra_item_to_nav_menu($items,$args){
//     var_dump($args->menu);
//     exit;
//     if(is_user_logged_in() && $args->menu ==2) {
//         $items .= '<li class="menu_item"><a href="'.get_site_url().'/wp-admin'.'">admin</a></li>';
//     }
//     return $items;
// }

// add_filter('wp_nav_menu_items', 'add_extra_items_to_nav_menu',10,2);


