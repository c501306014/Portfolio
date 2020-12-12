<?php

function my_scripts(){
    wp_enqueue_style( 'stylesheet', get_template_directory_uri().'/css/stylesheet.css', array(), '1.0.0', 'all');
    wp_enqueue_script( 'scroll', get_template_directory_uri().'/js/scroll.js',array(), false, true );
}

function my_setup(){
    add_theme_support('menus');
    add_theme_support( 'custom-background' );
    add_theme_support('custom-logo');
}

function my_theme_widgets_init(){
    register_sidebar( array(
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
    ) );
}

add_action( 'after_setup_theme', 'my_setup');
add_action( 'widgets_init', 'my_theme_widgets_init' );
add_action( 'wp_enqueue_scripts', 'my_scripts');