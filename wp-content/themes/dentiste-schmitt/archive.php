<?php
/**
 * The template for displaying archive pages
 * 
 * @package Dentiste_Schmitt
 */

get_header(); ?>

<main class="site-main">
    <div class="container">
        <header class="page-header" style="padding: 2rem 0; text-align: center;">
            <?php
            the_archive_title('<h1 class="page-title">', '</h1>');
            the_archive_description('<div class="archive-description">', '</div>');
            ?>
        </header>

        <div class="content-area">
            <?php
            if (have_posts()) :
                echo '<div class="services-grid">';
                
                while (have_posts()) : the_post();
                    if (get_post_type() === 'service') :
                        ?>
                        <div class="service-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="service-icon">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('service-thumbnail'); ?>
                                    </a>
                                </div>
                            <?php else : ?>
                                <div class="service-icon">
                                    <i class="fas fa-tooth"></i>
                                </div>
                            <?php endif; ?>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn"><?php _e('En savoir plus', 'dentiste-schmitt'); ?></a>
                        </div>
                        <?php
                    else :
                        get_template_part('template-parts/content', get_post_type());
                    endif;
                endwhile;
                
                echo '</div>';
                
                the_posts_navigation();
            else :
                get_template_part('template-parts/content', 'none');
            endif;
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
