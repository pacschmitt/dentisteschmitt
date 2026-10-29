<?php
/** Template Name: Page Cabinets */
get_header();
?>
<main id="primary" class="site-main container section-padding interior-page practices-page">
    <?php dentiste_schmitt_page_intro( dentiste_schmitt_text( 'Nos cabinets dentaires à Nyon et Bassins', 'Our dental practices in Nyon and Bassins' ), dentiste_schmitt_text( 'Deux lieux, une même équipe', 'Two locations, one team' ) ); ?>
    <nav class="page-jump-links" aria-label="<?php echo esc_attr( dentiste_schmitt_text( 'Choisir un cabinet', 'Choose a practice' ) ); ?>"><a href="#cabinet-nyon">Nyon <span aria-hidden="true">↓</span></a><a href="#cabinet-bassins">Bassins <span aria-hidden="true">↓</span></a></nav>
    <?php foreach ( dentiste_schmitt_locations() as $slug => $location ) :
        $map_query = rawurlencode( $location['street'] . ', ' . $location['postcode'] . ' ' . $location['city'] );
    ?>
    <section class="practice-detail card cabinet-<?php echo esc_attr( $slug ); ?>" id="cabinet-<?php echo esc_attr( $slug ); ?>">
        <header class="practice-detail-title"><p class="eyebrow"><?php echo esc_html( dentiste_schmitt_text( 'Cabinet dentaire', 'Dental practice' ) ); ?></p><h2><a href="<?php echo esc_url( dentiste_schmitt_location_url( $slug ) ); ?>"><?php echo esc_html( $location['city'] ); ?></a></h2></header>
        <div class="practice-detail-layout">
            <div class="practice-gallery">
                <div class="carousel" data-carousel tabindex="0" aria-label="<?php echo esc_attr( dentiste_schmitt_text( 'Photos du cabinet de ', 'Photos of our practice in ' ) . $location['city'] ); ?>">
                    <div class="carousel-track" data-carousel-track>
                        <?php for ( $i = 1; $i <= 3; $i++ ) :
                            $custom = get_theme_mod( "dentiste_schmitt_cabinet_{$slug}_{$i}" );
                            $extensions = array( 1 => 'webp', 2 => 'jpg', 3 => 'webp' );
                            $fallback = get_template_directory_uri() . ( 'nyon' === $slug ? '/images/' . $i . '.' . $extensions[$i] : '/images/cabinet-placeholder.svg' );
                            $photo = $custom ?: $fallback;
                        ?>
                        <div class="carousel-slide" data-carousel-slide aria-hidden="<?php echo 1 === $i ? 'false' : 'true'; ?>">
                            <?php echo dentiste_schmitt_image( $photo, dentiste_schmitt_text( 'Cabinet de ', 'Practice in ' ) . $location['city'] . ' — ' . $i, array( 'sizes' => '(max-width: 768px) 100vw, 55vw' ) ); ?>
                        </div>
                        <?php endfor; ?>
                    </div>
                    <div class="carousel-nav">
                        <button type="button" class="carousel-btn" data-carousel-prev aria-label="<?php esc_attr_e( 'Photo précédente', 'dentiste-schmitt' ); ?>">‹</button>
                        <button type="button" class="carousel-btn" data-carousel-next aria-label="<?php esc_attr_e( 'Photo suivante', 'dentiste-schmitt' ); ?>">›</button>
                    </div>
                </div>
                <div class="carousel-dots" data-carousel-dots></div>
                <details class="practice-map"><summary><?php echo esc_html( dentiste_schmitt_text( 'Voir la carte et préparer mon trajet', 'View the map and plan my journey' ) ); ?></summary>
                    <div class="map-embed"><iframe title="<?php echo esc_attr( $location['city'] . ' — Google Maps' ); ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen src="https://www.google.com/maps?q=<?php echo esc_attr( $map_query ); ?>&amp;output=embed"></iframe></div>
                </details>
            </div>
            <div class="practice-detail-information">
                <?php dentiste_schmitt_practice_contact( $slug ); ?>
                <a class="btn" href="https://booking.denteo.com/fr/edf983884f60c2615958c45caa5e1e93/" target="_blank" rel="noopener noreferrer"><?php echo esc_html( dentiste_schmitt_text( 'Prendre RDV à ', 'Book in ' ) . $location['city'] ); ?><span aria-hidden="true">↗</span></a>
                <a class="text-link" href="<?php echo esc_url( dentiste_schmitt_location_url( $slug ) ); ?>"><?php echo esc_html( dentiste_schmitt_text( 'Découvrir le cabinet de ', 'Explore our practice in ' ) . $location['city'] ); ?><span aria-hidden="true">→</span></a>
            </div>
        </div>
    </section>
    <?php endforeach; ?>
    <div class="page-opening-copy">
        <p class="lead"><?php echo esc_html( dentiste_schmitt_text( 'Nos deux cabinets dentaires et toutes leurs équipes vous accueillent chaleureusement pour vous offrir les meilleurs soins bucco-dentaires. Nous mettons toutes nos compétences et notre expérience au service de nos patients, enfant ou adulte, pour prévenir et soigner leur dentition.', 'Our teams welcome you to our two dental practices. We provide dental care for adults and children, with a focus on prevention and treatment tailored to each patient.' ) ); ?></p>
        <p><?php esc_html_e( 'Contactez le cabinet pour prendre rendez-vous avec nos chirurgiens-dentistes et nos hygiénistes de qualité.', 'dentiste-schmitt' ); ?></p>
    </div>
</main>
<?php get_footer(); ?>
