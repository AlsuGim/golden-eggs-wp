<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com');
    wp_enqueue_style('gs', 'https://fonts.gstatic.com');
    wp_enqueue_style('fg', 'https://fonts.googleapis.com/css2?family=Kurale&family=Open+Sans:wght@400;700&display=swap');


    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), '1.0.0', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true);
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
