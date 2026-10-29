<?php
/** Generic pages, including the two existing local practice pages. */
get_header();
?>
<main id="primary" class="site-main container section-padding interior-page content-page">
    <?php while ( have_posts() ) : the_post();
        $slug = get_post_field( 'post_name', get_the_ID() );
        $local = in_array( $slug, array( 'dentiste-nyon', 'dentiste-bassins' ), true );
        $city_slug = $local ? substr( $slug, 9 ) : '';
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class( $local ? 'local-practice-page' : '' ); ?>>
        <?php dentiste_schmitt_page_intro( get_the_title(), dentiste_schmitt_text( $local ? 'Votre cabinet, près de chez vous' : 'Cabinet Dentaire Schmitt', $local ? 'Your local dental practice' : 'Schmitt Dental Practices' ) ); ?>
        <div class="<?php echo $local ? 'local-page-layout' : 'document-reading'; ?>">
            <div class="entry-content"><?php the_content(); ?></div>
            <?php if ( $local ) :
                $location = dentiste_schmitt_locations()[ $city_slug ];
                $photo = get_theme_mod( 'dentiste_schmitt_cabinet_' . $city_slug . '_1' );
                $photo = $photo ?: get_template_directory_uri() . ( 'nyon' === $city_slug ? '/images/1.webp' : '/images/cabinet-placeholder.svg' );
            ?>
            <aside class="local-practice-sidebar">
                <?php echo dentiste_schmitt_image( $photo, dentiste_schmitt_text( 'Cabinet de ', 'Practice in ' ) . $location['city'], array( 'sizes' => '(max-width: 768px) 100vw, 30vw' ) ); ?>
                <div class="local-contact-panel"><p class="eyebrow"><?php echo esc_html( $location['city'] ); ?></p>
                    <?php dentiste_schmitt_practice_contact( $city_slug, false ); ?>
                    <a class="btn" href="https://booking.denteo.com/fr/edf983884f60c2615958c45caa5e1e93/" target="_blank" rel="noopener noreferrer"><?php echo esc_html( dentiste_schmitt_text( 'Prendre rendez-vous', 'Book an appointment' ) ); ?><span aria-hidden="true">↗</span></a>
                </div>
            </aside>
            <?php endif; ?>
        </div>
    </article>
    <?php endwhile; ?>
</main>
<?php get_footer(); ?>
