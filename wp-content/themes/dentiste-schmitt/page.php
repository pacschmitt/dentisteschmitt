<?php
/**
 * The template for displaying all pages
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
                </header>

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
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>
