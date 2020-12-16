<?php

function my_scripts(){
    wp_enqueue_style( 'stylesheet', get_template_directory_uri().'/css/stylesheet.css', array(), '1.0.0', 'all');
    wp_enqueue_script( 'scroll', get_template_directory_uri().'/js/scroll.js',array(), false, true );
    wp_enqueue_script( 'scroll-to-top', get_template_directory_uri().'/js/scroll-to-top.js',array(), false, true );
    wp_enqueue_script( 'carousel', get_template_directory_uri().'/js/carousel.js', array(), false, true );
}


function my_setup(){
    add_theme_support('menus');
    add_theme_support( 'custom-background' );
    add_theme_support('custom-logo');


    $custom_header = array(
        'default-image' => get_template_directory_uri().'/images/top.png',
        'width' => 1200,
        'height' => 800,
        'flex-width' => true,
        'flex-height' => true,
        'uploads' => true,
    );
    add_theme_support( 'custom-header', $custom_header );
}

function my_theme_widgets_init(){
    register_sidebar( array(
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
    ) );
}

function custom_editor_settings( $initArray ){
	$initArray['body_id'] = 'primary';
	$initArray['body_class'] = 'post';
	$initArray['extended_valid_elements'] = '*[*]'; //すべてのタグを許可(削除防止のため)
    $initArray['valid_children'] = '+body[style],+div[div|span],+span[span]+button[onClick],+input[onClick],
                                    +a[@mousedown], +a[@mouseup], +a[@click]';        
	$initArray['verify_html'] = false;
	return $initArray;
}

function customKsesAllowedHtml( $tags, $context){
    if( $context == 'page' ) {
        $tags['a'] = array(
            '@*' => true
        );
        $tags['slide'] = true;
    }
    return $tags;
}

add_filter( 'wp_kses_allowed_html', 'customKsesAllowedHtml', 10, 2 );

add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );

add_action( 'after_setup_theme', 'my_setup');
add_action( 'widgets_init', 'my_theme_widgets_init' );
add_action( 'wp_enqueue_scripts', 'my_scripts');