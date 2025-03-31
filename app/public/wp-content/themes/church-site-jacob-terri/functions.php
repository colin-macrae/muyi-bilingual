<?php

function your_theme_enqueue_styles() {
    wp_enqueue_style(
        'your-theme-index', 
        get_template_directory_uri() . '/style.css', 
        array(), 
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'your_theme_enqueue_styles');

function enqueue_tailwind() {
  wp_enqueue_style(
    'tailwind',
    get_template_directory_uri() . '/dist/output.css',
    array(),
    '1.0'
  );
}
add_action('wp_enqueue_scripts', 'enqueue_tailwind');

?>

