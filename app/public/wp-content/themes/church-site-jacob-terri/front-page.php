<?php
if ( ! is_front_page() ) {
    wp_redirect( home_url() );
    exit;
}
?>

<?php get_header(); ?>

Yippeee!  Jacob Terri church home page!! 

<?php get_footer(); ?>