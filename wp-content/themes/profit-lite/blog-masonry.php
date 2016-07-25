<?php
/**
 * Masonry (Blog)
 * The template file for pages without right sidebar.
 * @package Profit
 * @since Profit 1.0
 */
if (!(is_front_page())) {
    $GLOBALS['mpProfitPageTemplate'] = 'masonry';
}
?> 
<div class="container main-container list-posts">
    <?php if (have_posts()) : ?>
        <div class="masonry-blog">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('content-masonry', get_post_format()); ?>
            <?php endwhile; ?>
            <?php
            $args = array(
                'prev_next' => False
            );
            ?>
        </div>
        <nav class="navigation navigation-prev-next">
            <?php posts_nav_link('  ', 'previous', 'next'); ?>
        </nav><!-- .navigation -->
    <?php endif; ?>
</div>
<?php

