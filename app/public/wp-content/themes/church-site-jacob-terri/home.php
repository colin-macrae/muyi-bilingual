<?php get_header(); ?>

<div class="announcements-page mx-auto px-24 py-12 bg-[#FAF7F2]" >
    <h1 class="text-3xl font-bold mb-10" style="color: #1E2A38;">Announcements</h1>
    
    <?php if (have_posts()) : ?>
        <div class="announcements-list space-y-10">
            <?php while (have_posts()) : the_post(); ?>
                <article class="announcement border-b border-[#C9A46D] pb-8 last:border-0">
                    <h2 class="text-2xl font-semibold mb-3" style="color: #1E2A38;">
                        <a href="<?php the_permalink(); ?>" class="hover:text-[#C9A46D] transition-colors">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    
                    <div class="post-meta text-sm mb-4" style="color: #333333;">
                        <span class="post-date">Posted on <?php echo get_the_date(); ?></span>
                        <span class="post-author mx-2">|</span>
                        <span class="post-author">By <?php the_author(); ?></span>
                    </div>
                    
                    <div class="post-content" style="color: #333333;">
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="text-[#C9A46D] hover:text-[#1E2A38] hover:underline mt-3 inline-block font-medium">
                            Continue Reading →
                        </a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
        
        <div class="pagination mt-12 flex justify-center">
            <?php the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => __('&laquo; Previous'),
                'next_text' => __('Next &raquo;'),
                'screen_reader_text' => ' ',
                'before_page_number' => '<span class="px-3 py-1 mx-1 border border-[#1E2A38]">',
                'after_page_number'  => '</span>',
            )); ?>
        </div>
        
    <?php else : ?>
        <p class="text-[#333333]">No announcements found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>