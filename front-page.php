<?php
/**
 * Template Name: Accueil
 * The template for displaying the front page
 *
 * @package Dentiste_Schmitt
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- 0. New Hero Section (Welcome) -->
    <?php
    $hero_bg = dentiste_schmitt_hero_image();
    $hero_style = $hero_bg ? 'style="background-image: url(' . esc_url( $hero_bg ) . ');"' : 'style="background-color: var(--color-primary);"';
    ?>
    <section class="welcome-hero" <?php echo $hero_style; ?>>
        <div class="hero-overlay"></div>
        <div class="container welcome-content">
            <p class="hero-eyebrow"><?php echo esc_html( dentiste_schmitt_text( 'Cabinet Dentaire Schmitt', 'Schmitt Dental Practices' ) ); ?></p>
            <h1 class="welcome-title"><?php echo esc_html( dentiste_schmitt_text( 'Dentistes à Nyon et Bassins – Cabinets Schmitt', 'Dentists in Nyon and Bassins – Schmitt Dental Practices' ) ); ?></h1>
            <p class="welcome-intro"><?php echo esc_html( dentiste_schmitt_text( 'Une équipe familiale, deux cabinets au cœur de la région.', 'A family team, two practices at the heart of the region.' ) ); ?></p>
            <div class="welcome-actions">
                <a class="btn" href="https://booking.denteo.com/fr/edf983884f60c2615958c45caa5e1e93/" target="_blank" rel="noopener noreferrer"><?php echo esc_html( dentiste_schmitt_text( 'Prendre rendez-vous', 'Book an appointment' ) ); ?><span aria-hidden="true">↗</span></a>
                <a class="hero-discover" href="#nos-cabinets"><?php echo esc_html( dentiste_schmitt_text( 'Découvrir nos cabinets', 'Explore our practices' ) ); ?><span aria-hidden="true">↓</span></a>
            </div>
        </div>
        <span class="hero-location-note" aria-hidden="true">Nyon · Bassins</span>
    </section>

    <!-- 1. Locations Section (Previously Hero) -->
    <section class="locations-section section-padding" id="nos-cabinets">
        <div class="container">
            <div class="section-intro">
                <p class="eyebrow"><?php echo esc_html( dentiste_schmitt_text( 'Nos deux adresses', 'Our two locations' ) ); ?></p>
                <h2><?php esc_html_e( 'Vos cabinets dentaires à Nyon et Bassins (Vaud)', 'dentiste-schmitt' ); ?></h2>
                <p><?php esc_html_e( 'Chirurgie – Orthodontie – Prothèses esthétiques – Soins pédiatriques – Parodontologie', 'dentiste-schmitt' ); ?></p>
            </div>
            <div class="practice-grid">
                <?php foreach ( dentiste_schmitt_locations() as $slug => $location ) :
                    $photo = get_theme_mod( 'dentiste_schmitt_cabinet_' . $slug . '_1' );
                    $photo = $photo ?: get_template_directory_uri() . ( 'nyon' === $slug ? '/images/1.webp' : '/images/cabinet-placeholder.svg' );
                    $local_url = dentiste_schmitt_location_url( $slug );
                ?>
                <article class="practice-preview">
                    <a class="practice-photo" href="<?php echo esc_url( $local_url ); ?>" aria-label="<?php echo esc_attr( dentiste_schmitt_text( 'Découvrir le cabinet de ', 'Explore our practice in ' ) . $location['city'] ); ?>">
                        <?php echo dentiste_schmitt_image( $photo, dentiste_schmitt_text( 'Cabinet de ', 'Practice in ' ) . $location['city'], array( 'sizes' => '(max-width: 768px) 100vw, 50vw' ) ); ?>
                        <span class="practice-photo-label"><?php echo esc_html( $location['city'] ); ?></span>
                        <span class="practice-photo-arrow" aria-hidden="true">↗</span>
                    </a>
                    <div class="practice-preview-body">
                        <p class="eyebrow"><?php echo esc_html( dentiste_schmitt_text( 'Cabinet dentaire', 'Dental practice' ) ); ?></p>
                        <h3><a href="<?php echo esc_url( $local_url ); ?>"><?php echo esc_html( $location['city'] ); ?></a></h3>
                        <p class="practice-street"><?php echo esc_html( $location['street'] ); ?><br><?php echo esc_html( $location['postcode'] . ' ' . $location['city'] ); ?></p>
                        <p class="practice-hours"><?php echo esc_html( dentiste_schmitt_text( 'nyon' === $slug ? 'Lundi – vendredi · 8h00 – 18h00' : 'Mardi – jeudi · 8h30 – 18h00', 'nyon' === $slug ? 'Monday – Friday · 8:00 – 18:00' : 'Tuesday – Thursday · 8:30 – 18:00' ) ); ?></p>
                        <a class="practice-phone" href="tel:<?php echo esc_attr( $location['telephone'] ); ?>"><?php echo esc_html( 'nyon' === $slug ? '+41 22 361 78 44' : '+41 22 365 26 26' ); ?></a>
                        <div class="practice-preview-actions">
                            <a class="text-link" href="<?php echo esc_url( $local_url ); ?>"><?php echo esc_html( dentiste_schmitt_text( 'Découvrir le cabinet', 'Explore the practice' ) ); ?><span aria-hidden="true">→</span></a>
                            <a class="practice-booking" href="https://booking.denteo.com/fr/edf983884f60c2615958c45caa5e1e93/" target="_blank" rel="noopener noreferrer"><?php echo esc_html( dentiste_schmitt_text( 'RDV en ligne', 'Book online' ) ); ?><span class="screen-reader-text"> <?php echo esc_html( $location['city'] ); ?></span><span aria-hidden="true">↗</span></a>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 2. Cabinet Familial -->
    <section class="section-padding family-intro">
        <div class="container">
            <p class="eyebrow"><?php echo esc_html( dentiste_schmitt_text( 'Un cabinet, une histoire de famille', 'A practice, a family story' ) ); ?></p>
            <div class="alignwide">
                <p class="lead text-center">
                    <?php esc_html_e( 'Dentiste Schmitt, c\'est un cabinet familial qui se transmet de père en fils, où la dentisterie globale est pratiquée. Le cabinet répond aux normes les plus sévères et les plus récentes en termes d’hygiène, de numérisation et de technologie. Nous sommes en partenariat avec un technicien dentaire installé à Nyon, au plus près du cabinet qui vous garantit un résultat esthétique et durable conforme à votre sensibilité.', 'dentiste-schmitt' ); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- 3. Devenir un nouveau patient -->
    <section class="section-padding bg-light patient-section">
        <div class="container">
            <h2 class="mb-5"><?php esc_html_e( 'Devenir un nouveau patient', 'dentiste-schmitt' ); ?></h2>
            <div class="two-columns-grid" style="align-items: center;">
                <div class="text-content mb-5">
                    <p class="mb-4">
                        <?php esc_html_e( 'C’est une première consultation de 45 minutes pour définir expliquer la ou les pathologies et proposer un plan de traitement validé par le patient à partir de données objectivables et dans un langage clair et compréhensible.', 'dentiste-schmitt' ); ?>
                    </p>
                    <a href="https://booking.denteo.com/fr/edf983884f60c2615958c45caa5e1e93/" target="_blank" rel="noopener noreferrer" class="btn mt-5"><?php esc_html_e( 'Prendre rendez-vous', 'dentiste-schmitt' ); ?></a>
                </div>
                <div class="image-content">
                    <?php
                    $patient_image = get_theme_mod( 'dentiste_schmitt_patient_image' );
                    if ( $patient_image ) : ?>
                        <?php echo dentiste_schmitt_image( $patient_image, __( 'Nouveau patient', 'dentiste-schmitt' ), array( 'sizes' => '(max-width: 768px) 100vw, 50vw' ) ); ?>
                    <?php else : ?>
                        <!-- Placeholder image -->
                        <div style="background-color: var(--color-bg-secondary); width: 100%; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                            <span style="color: var(--color-text-light);">Image Patient</span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Dr L. Schmitt -->
    <section class="section-padding">
        <div class="container">
            <h2 class="text-center mb-3"><?php esc_html_e( 'Dr. L. Schmitt', 'dentiste-schmitt' ); ?></h2>
            <h3 class="h5 text-center mb-5"><?php esc_html_e( 'Docteur en chirurgie dentaire – Pratique la dentisterie globale', 'dentiste-schmitt' ); ?></h3>
            <div class="two-columns-grid" style="align-items: center;">
                <div class="image-content">
                    <?php
                    $doctor_image = get_theme_mod( 'dentiste_schmitt_doctor_image' );
                    if ( $doctor_image ) : ?>
                         <?php echo dentiste_schmitt_image( $doctor_image, __( 'Dr. Schmitt', 'dentiste-schmitt' ), array( 'sizes' => '(max-width: 768px) 100vw, 50vw' ) ); ?>
                    <?php else : ?>
                        <!-- Placeholder image -->
                        <div style="background-color: var(--color-bg-secondary); width: 100%; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                            <span style="color: var(--color-text-light);">Photo Dr Schmitt</span>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="text-content">
                    <p>
                        <?php esc_html_e( 'Merci de l’intérêt et de la confiance que vous placez en nous. L’expérience, la polyvalence et la mise en confiance sont les moyens mis à votre disposition pour résoudre tous les problèmes esthétiques et/ou fonctionnels auxquels vous pourriez être confrontés, dans tous les domaines dentaires : implantologie « PRF FELLOW » dentisterie régénérative depuis 2006, orthodontie, prothèses esthétiques, soins pédiatriques, parodontologie.', 'dentiste-schmitt' ); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. À propos -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2><?php echo esc_html( dentiste_schmitt_text( 'À propos', 'About us' ) ); ?></h2>
            </div>
            <div class="alignwide" style="max-width: 900px; margin: 0 auto;">
                <p class="mb-4">
                    <?php esc_html_e( 'Nos dentistes et nos collaborateurs, spécialisés en santé bucco-dentaire, vous accueillent au cabinet du lundi au vendredi, pour vous prodiguer des soins de qualité dans une ambiance bienveillante et chaleureuse.', 'dentiste-schmitt' ); ?>
                </p>
                <p class="mb-4">
                    <?php esc_html_e( 'Nos praticiens sont formés pour réaliser des soins sur les enfants et les adultes avec douceur et assurance. Nous voulons, à travers les générations, changer l\'appréhension que certaines personnes peuvent avoir à la vue d’un dentiste. Pour cela, nous créons une vraie relation de confiance avec chacun de nos patients. Nous nous adaptons à vos besoins et nous vous proposons un suivi personnalisé tout au long de votre prise en charge.', 'dentiste-schmitt' ); ?>
                </p>
                <p>
                    <?php esc_html_e( 'Nos équipes d’experts sont à votre écoute pour discuter de votre situation et des potentielles solutions à mettre en place pour retrouver ou maintenir un sourire splendide. Du simple détartrage à la chirurgie, vous pouvez disposer des meilleurs soins dentaires, dans un cadre stérilisé, avec des équipements à la pointe de la technologie et une équipe aux petits soins pour vous.', 'dentiste-schmitt' ); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- 6. Nos spécialités -->
    <section class="section-padding">
        <div class="container">
            <h2 class="text-center mb-5"><?php esc_html_e( 'Nos Compétences', 'dentiste-schmitt' ); ?></h2>
            <div class="cards-grid mb-5">
                <div class="card">
                    <h3><?php esc_html_e( 'Dentisterie générale adulte', 'dentiste-schmitt' ); ?></h3>
                </div>
                <div class="card">
                    <h3><?php esc_html_e( 'Soins esthétiques dentaires', 'dentiste-schmitt' ); ?></h3>
                </div>
                <div class="card">
                    <h3><?php esc_html_e( 'Parodontologie', 'dentiste-schmitt' ); ?></h3>
                </div>
                <div class="card">
                    <h3><?php esc_html_e( 'Traumatologie', 'dentiste-schmitt' ); ?></h3>
                </div>
                <div class="card">
                    <h3><?php esc_html_e( 'Soins pédiatriques', 'dentiste-schmitt' ); ?></h3>
                </div>
                <div class="card">
                    <h3><?php esc_html_e( 'Prévention & hygiène dentaire', 'dentiste-schmitt' ); ?></h3>
                </div>
            </div>
            <div class="text-center mt-5">
                 <?php
                 $soins_url = dentiste_schmitt_page_url( 'page-soins.php', '/page-soins/' );
                 ?>
                 <a href="<?php echo esc_url( $soins_url ); ?>" class="btn"><?php esc_html_e( 'En savoir plus sur nos soins', 'dentiste-schmitt' ); ?></a>
            </div>
        </div>
    </section>

</main><!-- #main -->

<?php
get_footer();
