<?php
/**
 * The template for displaying search results
 * 
 * @package Dentiste_Schmitt
 */

get_header(); ?>

<main class="site-main">
    <div class="container">
        <header class="page-header" style="padding: 2rem 0;">
            <h1 class="page-title">
                <?php
                printf(
                    __('Résultats de recherche pour : %s', 'dentiste-schmitt'),
                    '<span>' . get_search_query() . '</span>'
                );
                ?>
            </h1>
        </header>

        <div class="content-area">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    get_template_part('template-parts/content', 'search');
                endwhile;

                the_posts_navigation();
            else :
                get_template_part('template-parts/content', 'none');
            endif;
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
