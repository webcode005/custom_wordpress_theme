<?php
function my_theme_enqueue_scripts() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

    // Template CSS (replace with your file names)
    wp_enqueue_style('template-style', get_template_directory_uri() . '/css/style.css');

    // WordPress main style.css
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Bootstrap JS
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), null, true);

    // Template JS (replace with your file names)
    wp_enqueue_script('template-script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

function my_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'my-bootstrap-theme')
    ));
}
add_action('after_setup_theme', 'my_theme_setup');
