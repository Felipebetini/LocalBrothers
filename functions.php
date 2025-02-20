<?php
function wordpressTest_enqueue_styles()
{
    wp_enqueue_style('my-style', get_stylesheet_uri());
    wp_enqueue_style('tailwind-output', get_template_directory_uri() . '/src/output.css');
    wp_enqueue_script('main-ts', get_template_directory_uri() . '/src/main.ts', [], false, true);
}

add_action('wp_enqueue_scripts', 'wordpressTest_enqueue_styles', 'theme_enqueue_scripts');