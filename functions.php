<?php

function bootstrap_register_style() {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '4.0', 'all');
    wp_enqueue_style('fontawesome-free', get_template_directory_uri() . '/assets/fontawesome-free/css/all.css', array(), '5.10.2', 'all');
    wp_enqueue_style('clean-blog-css', get_template_directory_uri() . '/assets/css/clean-blog.css', array(), '5.0.8', 'all');
}

add_action('wp_enqueue_scripts', 'bootstrap_register_style');

function bootstrap_register_scripts() {
    wp_enqueue_script( 'jquery-slim', get_template_directory_uri() . '/assets/js/jquery.slim.js', array(), '3.4.1', true);
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '4.0', true);
    wp_enqueue_script( 'clean-blog', get_template_directory_uri() . '/assets/js/clean-blog.js', array(), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'bootstrap_register_scripts');

function bootstrap_theme_setup() {
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    register_nav_menu('primary', 'Primary Header Navigation');
}

add_action('init', 'bootstrap_theme_setup');

function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}

add_filter('wp_nav_menu', 'add_menuclass');