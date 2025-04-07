<?php get_header(); ?>

<div class="single-post mx-auto px-4 py-16" style="background-color: #FAF7F2;">
    <article>
        <header class="mb-10">
            <h1 class="text-3xl md:text-4xl font-bold mb-4" style="color: #1E2A38;">
                <?php the_title(); ?>
            </h1>
            
            <div class="post-meta flex items-center text-sm" style="color: #333333;">
                <span class="post-date mr-4">
                    <?php echo get_the_date('F j, Y'); ?>
                </span>
                <span class="post-author">
                    By <?php the_author(); ?>
                </span>
            </div>
            
            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail mt-6 rounded-lg overflow-hidden">
                    <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
                </div>
            <?php endif; ?>
        </header>
        
        <div class="post-content max-w-none" style="color: #333333;">
            <?php the_content(); ?>
        </div>
        
        <footer class="mt-12 pt-6 border-t border-[#C9A46D]">
            <div class="post-categories mb-4">
                <?php if (has_category()) : ?>
                    <span class="text-sm font-medium mr-2" style="color: #1E2A38;">Categories:</span>
                    <?php the_category(', '); ?>
                <?php endif; ?>
            </div>
            
            <div class="post-tags">
                <?php if (has_tag()) : ?>
                    <span class="text-sm font-medium mr-2" style="color: #1E2A38;">Tags:</span>
                    <?php the_tags('', ', '); ?>
                <?php endif; ?>
            </div>
        </footer>
    </article>
    
    <div class="post-navigation mt-16 flex justify-between">
        <div class="previous-post">
            <?php previous_post_link('%link', '← Previous Announcement'); ?>
        </div>
        <div class="next-post">
            <?php next_post_link('%link', 'Next Announcement →'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>