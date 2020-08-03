<?php

wp_enqueue_style( 'style', get_stylesheet_uri() );

function register_theme_navigation() {
    register_nav_menus([
        'primary_menu' => 'Primary Menu'
    ]);
}
add_action('after_setup_theme', 'register_theme_navigation');