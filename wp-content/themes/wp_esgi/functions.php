<?php

function esgi_theme_support()
{
    add_theme_support('title-tag');
}

add_action('after_theme_setup', 'esgi_theme_support');

function esgi_register_nav_menus()
{
    register_nav_menus([
        'primary' => __('Primary Menu', 'ESGI'),
        'footer'  => __('Footer Menu', 'ESGI'),
    ]);
}
add_action('after_setup_theme', 'esgi_register_nav_menus', 0);

function esgi_enqueue_assets()
{
    wp_enqueue_style('main', get_stylesheet_uri());
    wp_enqueue_script('mainJS', get_template_directory_uri() . '/assets/js/main.js');
    $variables = [
        'ajaxURL' => admin_url('admin-ajax.php')
    ];
    wp_localize_script('mainJS', 'esgi', $variables);
}
add_action('wp_enqueue_scripts', 'esgi_enqueue_assets');
