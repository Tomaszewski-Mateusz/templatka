<?php

function placeholder_theme_stylesheets()
{
    $theme_version = wp_get_theme()->get('Version');
    
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), $theme_version);
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper.min.css', array(), $theme_version);
    wp_enqueue_style('wow', get_template_directory_uri() . '/assets/vendor/animation/animate.css', array(), $theme_version);
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), $theme_version);

}
add_action('wp_enqueue_scripts', 'placeholder_theme_stylesheets');