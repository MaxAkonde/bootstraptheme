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