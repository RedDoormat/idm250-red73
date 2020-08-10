<?php

function add_post_thumbnails_support() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_post_thumbnails_support');

function include_css_files() {
    // including an external link
    wp_enqueue_style('adobe-font', 'https://use.typekit.net/nmh6qge.css');

    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('case-study-css', get_template_directory_uri() . '/dist/css/case-study.css');
}
add_action('wp_enqueue_scripts', 'include_css_files');

function register_theme_sidebar() {
    register_sidebar([
      'name'        => 'Project Description Sidebar',
      'id'          => 'proj-sidebar',
      'description' => 'This is a custom sidebar for my theme'
  ]);
}

add_action('widgets_init', 'register_theme_sidebar');

function register_theme_navigation() {
    register_nav_menus([
        'primary_menu' => 'Primary Menu'
    ]);
}
add_action('after_setup_theme', 'register_theme_navigation');