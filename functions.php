<?php

function my_scripts(){
    wp_enqueue_style( 'stylesheet', get_template_directory_uri().'/css/stylesheet.css', array(), '1.0.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'my_scripts');