<?php
get_header();
?>

<main id="primary" class="site-main pb-16 bg-[#FAF7F2]">
    <article id="post-<?php the_ID(); ?>" <?php post_class('max-w-4xl mx-auto px-4 py-8 md:py-12'); ?>>
        
        <!-- Post Header -->
        <header class="entry-header mb-8">

            <h1 class="entry-title text-3xl md:text-4xl font-bold leading-tight text-gray-900 mb-4">
                <?php the_title(); ?>
            </h1>

            <div class="entry-meta">
                <span class="posted-on">
                    <?php echo esc_html(get_the_date('F j, Y')); ?>
                </span>                
                <span class="byline">
                    By <span class="author">
                    <?php 
                    // Direct author data fetch (a fix since get_the_author() didn't work)
                    global $post;
                    $author = get_userdata($post->post_author);
                    echo esc_html($author ? $author->display_name : 'Admin');
                    ?>
                    </span>
                </span>
            </div>

            <?php if (has_post_thumbnail()) : ?>
                <figure class="entry-thumbnail mt-6 rounded-lg overflow-hidden shadow-md">
                    <?php
                    the_post_thumbnail('large', array(
                        'class' => 'w-full h-auto object-cover',
                        'alt'   => esc_attr(get_the_title())
                    ));
                    ?>
                    <?php if (get_the_post_thumbnail_caption()) : ?>
                        <figcaption class="text-sm text-center text-gray-500 mt-2">
                            <?php echo esc_html(get_the_post_thumbnail_caption()); ?>
                        </figcaption>
                    <?php endif; ?>
                </figure>
            <?php endif; ?>
        </header>

        <!-- Post Content -->
        <div class="entry-content prose max-w-none text-gray-800">
            <?php
            the_content();
            
            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'your-theme'),
                'after'  => '</div>',
            ));
            ?>
        </div>

        
    </article>

    <!-- Post Navigation -->
    <nav class="post-navigation mt-12 max-w-4xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="previous-post">
                <?php previous_post_link('%link', '← %title'); ?>
            </div>
            <div class="next-post">
                <?php next_post_link('%link', '%title →'); ?>
            </div>
        </div>
    </nav>    
</main>
<?php
get_footer();