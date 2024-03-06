<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

function ajouter_element_menu( $items, $args ) {
    if ( current_user_can( 'manage_options' ) ) {
        $items .= '<li class="menu_item"><a href="' . admin_url() . '">Admin</a></li>';
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'ajouter_element_menu', 10, 2 );