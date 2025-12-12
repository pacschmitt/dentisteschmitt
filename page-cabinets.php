<?php
/**
 * Template Name: Page Cabinets
 *
 * @package Dentiste_Schmitt
 */

get_header();

$fallback_img = 'https://via.placeholder.com/1200x800.png?text=Photo+cabinet';
?>

<main id="primary" class="site-main container section-padding">

    <header class="entry-header text-center mb-5">
        <h1 class="entry-title">Nos Cabinets</h1>
    </header>

    <div class="alignwide text-center mb-5" style="max-width: 900px; margin: 0 auto;">
        <p class="lead">
            <?php esc_html_e( 'Nos deux cabinets dentaire et toute leurs équipes vous accueillent chaleureusement pour vous offrir les meilleurs soins bucco-dentaires. Nous mettons toutes nos compétences et notre expérience au service de nos patients, enfant ou adulte, pour prévenir et soigner leur dentition.', 'dentiste-schmitt' ); ?>
        </p>
        <p>
            <?php esc_html_e( 'Contactez le cabinet pour prendre rendez-vous avec nos chirurgiens-dentistes et nos hygiénistes de qualité.', 'dentiste-schmitt' ); ?>
        </p>
        <div class="mt-4 p-4 bg-light text-center" style="border-radius: 8px; display: inline-block;">
            <strong><?php esc_html_e( 'Tarifs', 'dentiste-schmitt' ); ?> :</strong>
            <?php esc_html_e( 'Tout mode et facilité de paiement', 'dentiste-schmitt' ); ?><br>
            <?php esc_html_e( 'Tarif hygiéniste : 150 CHF', 'dentiste-schmitt' ); ?> |
            <?php esc_html_e( 'Tarif SSO : CHF 1.12', 'dentiste-schmitt' ); ?>
        </div>
    </div>

    <div class="two-columns-grid" style="margin-top: 60px;">
        <div class="cabinet-nyon card">
            <h2 class="mb-4">Cabinet Nyon</h2>
            <div class="mt-4 mb-4">
                <a href="https://booking.denteo.com/fr/edf983884f60c2615958c45caa5e1e93/" target="_blank" class="btn btn-sm">Prendre RDV à Nyon</a>
            </div>

            <div class="carousel" data-carousel tabindex="0" aria-label="Photos du cabinet de Nyon">
                <div class="carousel-track" data-carousel-track>
                    <div class="carousel-slide" data-carousel-slide aria-hidden="false">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/1.webp' ); ?>" alt="Cabinet Nyon - photo 1" onerror="this.onerror=null;this.src='<?php echo esc_url( $fallback_img ); ?>';">
                    </div>
                    <div class="carousel-slide" data-carousel-slide aria-hidden="true">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/2.jpg' ); ?>" alt="Cabinet Nyon - photo 2" onerror="this.onerror=null;this.src='<?php echo esc_url( $fallback_img ); ?>';">
                    </div>
                    <div class="carousel-slide" data-carousel-slide aria-hidden="true">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/3.png' ); ?>" alt="Cabinet Nyon - photo 3" onerror="this.onerror=null;this.src='<?php echo esc_url( $fallback_img ); ?>';">
                    </div>
                </div>
                <div class="carousel-nav" aria-hidden="true">
                    <button type="button" class="carousel-btn" data-carousel-prev aria-label="Photo précédente">‹</button>
                    <button type="button" class="carousel-btn" data-carousel-next aria-label="Photo suivante">›</button>
                </div>
            </div>
            <div class="carousel-dots" data-carousel-dots></div>

            <p>
                <strong>Adresse :</strong><br>
                Avenue Reverdil 2<br>
                1260 Nyon
            </p>
            <p>
                <strong>Téléphone :</strong><br>
                <a href="tel:+41223617844">+41 22 361 78 44</a>
            </p>
            <p>
                <strong>Email :</strong><br>
                <a href="mailto:drschmitt.nyon@bluewin.ch">drschmitt.nyon@bluewin.ch</a>
            </p>
            <div class="map-embed mt-4" aria-label="Carte Google Maps - Cabinet Nyon">
                <iframe
                    title="Cabinet Nyon - Google Maps"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen
                    src="https://www.google.com/maps?q=Avenue%20Reverdil%202%2C%201260%20Nyon&output=embed">
                </iframe>
            </div>
        </div>

        <div class="cabinet-bassins card">
            <h2 class="mb-4">Cabinet Bassins</h2>
            <div class="mt-4 mb-4">
                <a href="https://booking.denteo.com/fr/edf983884f60c2615958c45caa5e1e93/" target="_blank" class="btn btn-sm">Prendre RDV à Bassins</a>
            </div>

            <div class="carousel" data-carousel tabindex="0" aria-label="Photos du cabinet de Bassins">
                <div class="carousel-track" data-carousel-track>
                    <div class="carousel-slide" data-carousel-slide aria-hidden="false">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/1.webp' ); ?>" alt="Cabinet Bassins - photo 1" onerror="this.onerror=null;this.src='<?php echo esc_url( $fallback_img ); ?>';">
                    </div>
                    <div class="carousel-slide" data-carousel-slide aria-hidden="true">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/2.jpg' ); ?>" alt="Cabinet Bassins - photo 2" onerror="this.onerror=null;this.src='<?php echo esc_url( $fallback_img ); ?>';">
                    </div>
                    <div class="carousel-slide" data-carousel-slide aria-hidden="true">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/3.png' ); ?>" alt="Cabinet Bassins - photo 3" onerror="this.onerror=null;this.src='<?php echo esc_url( $fallback_img ); ?>';">
                    </div>
                </div>
                <div class="carousel-nav" aria-hidden="true">
                    <button type="button" class="carousel-btn" data-carousel-prev aria-label="Photo précédente">‹</button>
                    <button type="button" class="carousel-btn" data-carousel-next aria-label="Photo suivante">›</button>
                </div>
            </div>
            <div class="carousel-dots" data-carousel-dots></div>

            <p>
                <strong>Adresse :</strong><br>
                Ruelle de la Repentance 4<br>
                1269 Bassins
            </p>
            <p>
                <strong>Téléphone :</strong><br>
                <a href="tel:+41223652626">+41 22 365 26 26</a>
            </p>
            <p>
                <strong>Email :</strong><br>
                <a href="mailto:cabinetdentairebassins@gmail.com">cabinetdentairebassins@gmail.com</a>
            </p>
            <div class="map-embed mt-4" aria-label="Carte Google Maps - Cabinet Bassins">
                <iframe
                    title="Cabinet Bassins - Google Maps"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen
                    src="https://www.google.com/maps?q=Ruelle%20de%20la%20Repentance%204%2C%201269%20Bassins&output=embed">
                </iframe>
            </div>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();
