<?php
function placeholder_theme_scripts()
{
    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js', array(), $theme_version, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), $theme_version, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/vendor/animation/wow.min.js', array(), $theme_version, true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), $theme_version, true);
}
add_action('wp_enqueue_scripts', 'placeholder_theme_scripts');