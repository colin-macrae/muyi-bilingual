<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="bg-[#1B365D] text-white px-4 py-2 md:px-6 md:py-4 lg:px-8 lg:py-6"> 
    <div class="flex justify-between items-center">
        <div class="mr-5">
            <!-- <a href="<?php echo home_url(); ?>" class="text-xl font-bold">
                Muyi Bilingual Congregation
            </a>
            <a href="<?php echo home_url(); ?>" class="text-xl font-bold">
                慕義堂雙語崇拜
            </a> -->
            <a href="<?php echo home_url(); ?>" class="text-xl font-bold">
                <img class="w-40" style="width: 160px !important;" src="<?php echo get_template_directory_uri(); ?>/assets/images/muyi-logo-no-bkrd-white.png" alt="Muyi Bilingual Congregation Logo">
            </a>

        </div>
        <!-- <p><?php bloginfo('description'); ?></p> -->
        <ul class="flex gap-4"> 
            <li>
                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="hover:text-[#C9A66B]">
                    <!-- Announcements -->
                </a>
            </li>
        </ul>
    </div>
    
</header>

<main class="site-content">