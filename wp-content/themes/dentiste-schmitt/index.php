<?php
/**
 * The main template file
 * 
 * @package Dentiste_Schmitt
 */

get_header(); ?>

<main class="site-main">
    <?php if (is_home() || is_front_page()) : ?>
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <h1><?php _e('Bienvenue au Cabinet Dentaire Schmitt', 'dentiste-schmitt'); ?></h1>
                <p><?php _e('Des soins dentaires de qualité pour toute la famille dans une atmosphère chaleureuse et professionnelle.', 'dentiste-schmitt'); ?></p>
                <a href="#contact" class="btn btn-primary"><?php _e('Prendre Rendez-vous', 'dentiste-schmitt'); ?></a>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="container">
                <h2 class="section-title"><?php _e('Nos Services', 'dentiste-schmitt'); ?></h2>
                
                <div class="services-grid">
                    <?php
                    $services = new WP_Query(array(
                        'post_type'      => 'service',
                        'posts_per_page' => 6,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                    ));

                    if ($services->have_posts()) :
                        while ($services->have_posts()) : $services->the_post();
                    ?>
                        <div class="service-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="service-icon">
                                    <?php the_post_thumbnail('service-thumbnail'); ?>
                                </div>
                            <?php else : ?>
                                <div class="service-icon">
                                    <i class="fas fa-tooth"></i>
                                </div>
                            <?php endif; ?>
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn"><?php _e('En savoir plus', 'dentiste-schmitt'); ?></a>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        // Default services if none are created
                        $default_services = array(
                            array('icon' => 'fa-tooth', 'title' => 'Soins Dentaires', 'desc' => 'Traitements complets pour maintenir votre santé bucco-dentaire'),
                            array('icon' => 'fa-teeth', 'title' => 'Orthodontie', 'desc' => 'Solutions pour aligner vos dents et améliorer votre sourire'),
                            array('icon' => 'fa-teeth-open', 'title' => 'Implantologie', 'desc' => 'Remplacement permanent de dents manquantes'),
                            array('icon' => 'fa-smile', 'title' => 'Esthétique Dentaire', 'desc' => 'Blanchiment et embellissement du sourire'),
                            array('icon' => 'fa-user-md', 'title' => 'Parodontologie', 'desc' => 'Traitement des gencives et des tissus de soutien'),
                            array('icon' => 'fa-child', 'title' => 'Dentisterie Pédiatrique', 'desc' => 'Soins adaptés aux enfants dans un environnement rassurant'),
                        );
                        
                        foreach ($default_services as $service) :
                    ?>
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas <?php echo $service['icon']; ?>"></i>
                            </div>
                            <h3><?php echo $service['title']; ?></h3>
                            <p><?php echo $service['desc']; ?></p>
                        </div>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact-section" id="contact">
            <div class="container">
                <h2 class="section-title"><?php _e('Nous Contacter', 'dentiste-schmitt'); ?></h2>
                
                <div class="contact-info">
                    <div class="contact-card">
                        <i class="fas fa-phone fa-2x" style="color: var(--primary-color); margin-bottom: 1rem;"></i>
                        <h4><?php _e('Téléphone', 'dentiste-schmitt'); ?></h4>
                        <p>+33 (0)X XX XX XX XX</p>
                    </div>
                    
                    <div class="contact-card">
                        <i class="fas fa-envelope fa-2x" style="color: var(--primary-color); margin-bottom: 1rem;"></i>
                        <h4><?php _e('Email', 'dentiste-schmitt'); ?></h4>
                        <p>contact@dentisteschmitt.com</p>
                    </div>
                    
                    <div class="contact-card">
                        <i class="fas fa-map-marker-alt fa-2x" style="color: var(--primary-color); margin-bottom: 1rem;"></i>
                        <h4><?php _e('Adresse', 'dentiste-schmitt'); ?></h4>
                        <p>123 Rue Example<br>75000 Paris, France</p>
                    </div>
                    
                    <div class="contact-card">
                        <i class="fas fa-clock fa-2x" style="color: var(--primary-color); margin-bottom: 1rem;"></i>
                        <h4><?php _e('Horaires', 'dentiste-schmitt'); ?></h4>
                        <p>Lun-Ven: 9h-18h<br>Sam: 9h-13h</p>
                    </div>
                </div>
            </div>
        </section>
    <?php else : ?>
        <!-- Blog/Archive Section -->
        <div class="container">
            <div class="content-area">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        get_template_part('template-parts/content', get_post_type());
                    endwhile;
                    
                    the_posts_navigation();
                else :
                    get_template_part('template-parts/content', 'none');
                endif;
                ?>
            </div>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
