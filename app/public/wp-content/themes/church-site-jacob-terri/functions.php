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

function custom_scroll_animation_script() {
    ?>
    <script>
    (function() {
        // Optimized viewport check
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top <= (window.innerHeight || document.documentElement.clientHeight) && 
                rect.bottom >= 0
            );
        }

        // Throttled scroll handler
        function handleScroll() {
            const elements = document.querySelectorAll('.animate-on-scroll:not(.in-view)');
            elements.forEach(element => {
                if (isInViewport(element)) {
                    element.classList.add('in-view');
                }
            });
        }

        // Add event listener with throttle
        let ticking = false;
        window.addEventListener('scroll', function() {
            if (!ticking) {
                window.requestAnimationFrame(function() {
                    handleScroll();
                    ticking = false;
                });
                ticking = true;
            }
        });

        // Initial check
        handleScroll();
    })();
    </script>
    <?php
}
add_action('wp_footer', 'custom_scroll_animation_script');

add_theme_support('title-tag');
?>