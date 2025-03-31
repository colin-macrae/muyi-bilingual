<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header-container"> 
    <div><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
    <p><?php bloginfo('description'); ?></p>
    <nav>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary'
        ));
        ?>
    </nav>
</header>

<main class="site-content">