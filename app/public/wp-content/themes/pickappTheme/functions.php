<?php

function pickApp_menus()
{
    register_nav_menus(array(
        'menu-principal' => __('Menu principal', 'pickapptheme')
    ));
}
add_action('init', 'pickApp_menus');

function pickApp_scripts_styles()
{
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
}

add_action('wp_enqueue_scripts', 'pickApp_scripts_styles');
