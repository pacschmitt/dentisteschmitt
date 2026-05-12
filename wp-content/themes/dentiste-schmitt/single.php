<?php
/**
 * The template for displaying all single posts
 * 
 * @package Dentiste_Schmitt
 */

get_header(); ?>

<main class="site-main">
    <div class="container">
        <?php
        while (have_posts()) : the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header" style="padding: 2rem 0;">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-meta" style="color: var(--text-light); margin-top: 0.5rem;">
                        <span><?php echo get_the_date(); ?></span>
                    </div>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="entry-thumbnail" style="margin-bottom: 2rem;">
                        <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto; border-radius: 10px;')); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content" style="padding: 2rem 0;">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . __('Pages:', 'dentiste-schmitt'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>
            </article>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>

        <?php
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>
