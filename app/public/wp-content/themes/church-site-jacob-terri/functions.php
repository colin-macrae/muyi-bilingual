<?php
function your_theme_enqueue_styles() {
    // Main stylesheet (style.css is automatically loaded by WordPress)
    
    // Enqueue additional styles
    wp_enqueue_style(
        'your-theme-index', 
        get_template_directory_uri() . '/style.css', 
        array(), 
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'your_theme_enqueue_styles');