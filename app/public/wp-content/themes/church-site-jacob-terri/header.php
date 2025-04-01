<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="bg-red-300"> 
    <div class="flex justify-between mx-16">
        <div class="mr-5">
            <a href="<?php echo home_url(); ?>">
                Muyi Bilingual Congregation
            </a>
            <a href="<?php echo home_url(); ?>">
                慕義堂雙語崇拜
            </a>
        </div>
        <p><?php bloginfo('description'); ?></p>
        <ul class="flex gap-4"> 
            <li>
                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">
                    Announcements
                </a>
            </li>
        </ul>
    </div>
    
</header>

<main class="site-content">