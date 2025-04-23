<?php

//load stylesheets
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all');

    wp_enqueue_style('bootstrap');

    wp_register_style('my-customed-style', get_template_directory_uri() . '/style.css', array(), false, 'all');

    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'load_css');



//load js
function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script(
        'bootstrap',
        get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
        array('jquery'),
        false,
        true // true = 在 footer 加载
    );


    wp_register_script(
        'custom',
        get_template_directory_uri() . '/script.js',
        array('jquery', 'bootstrap'),
        false,
        true // true = 在 footer 加载
    );
    wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'load_js');






//theme option
add_theme_support('menus');



// add a favcion icon to the title
function add_favicon()
{
    echo '<link rel="icon" type="image/x-icon" href="' . get_template_directory_uri() . '/favicon.ico" />';
}

add_action('wp_head', 'add_favicon');




// <meta> for SEO 
function custom_meta_tags()
{
    echo '<meta name="description" content="">';
    echo '<meta name="keywords" content="">';
    echo '<meta name="author" content="Lisa Xiao">';
    echo '<meta name="robots" content="index, follow">';
    echo '<meta name="theme-color" content="#712cf9" />';
}
add_action('wp_head', 'custom_meta_tags');




// add menu function to use

function wpb_custom_new_menu()
{
    register_nav_menus(
        array(
            'top-menu' => __('My Custom Menu'),
            'extra-menu' => __('Extra Menu')
        )
    );
}
add_action('init', 'wpb_custom_new_menu');
