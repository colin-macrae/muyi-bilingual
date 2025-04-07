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

function enqueue_theme_scripts() {
    // Only enqueue ONCE with proper versioning
    wp_enqueue_script(
        'theme-scroll-reveal',
        get_template_directory_uri() . '/assets/js/scroll-reveal.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/scroll-reveal.js'), // Uses file modification time
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');

add_theme_support('title-tag');
?>