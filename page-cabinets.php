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
    </div>

    <div class="two-columns-grid" style="margin-top: 60px;">
        <div class="cabinet-nyon card">
            <h2 class="mb-4">Cabinet Nyon</h2>
            <div class="mt-4 mb-4">
                <a href="https://booking.denteo.com/fr/edf983884f60c2615958c45caa5e1e93/" target="_blank" class="btn btn-sm">Prendre RDV à Nyon</a>
            </div>

            <div class="carousel" data-carousel tabindex="0" aria-label="Photos du cabinet de Nyon">
                <div class="carousel-track" data-carousel-track>
                    <?php
                    for ( $i = 1; $i <= 3; $i++ ) :
                        $img_custom = get_theme_mod( "dentiste_schmitt_cabinet_nyon_{$i}" );
                        // Fallbacks
                        $exts = array( 1 => 'webp', 2 => 'jpg', 3 => 'png' );
                        $img_fallback = get_template_directory_uri() . "/images/{$i}." . $exts[$i];
                        $img_final = $img_custom ? $img_custom : $img_fallback;
                    ?>
                    <div class="carousel-slide" data-carousel-slide aria-hidden="<?php echo $i === 1 ? 'false' : 'true'; ?>">
                        <img src="<?php echo esc_url( $img_final ); ?>" alt="<?php echo esc_attr( "Cabinet Nyon - photo $i" ); ?>" style="object-fit:cover; height:320px; width:100%;" onerror="this.onerror=null;this.src='<?php echo esc_url( $fallback_img ); ?>';">
                    </div>
                    <?php endfor; ?>
                </div>
                <div class="carousel-nav" aria-hidden="true">
                    <button type="button" class="carousel-btn" data-carousel-prev aria-label="Photo précédente">‹</button>
                    <button type="button" class="carousel-btn" data-carousel-next aria-label="Photo suivante">›</button>
                </div>
            </div>
            <div class="carousel-dots" data-carousel-dots></div>

            <p>
                <strong><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:-3px; margin-right:5px; color:var(--color-primary);"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> Adresse :</strong><br>
                Avenue Reverdil 2<br>
                1260 Nyon
            </p>
            <p>
                <strong><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:-3px; margin-right:5px; color:var(--color-primary);"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> Téléphone :</strong><br>
                <a href="tel:+41223617844">+41 22 361 78 44</a>
            </p>
            <p>
                <strong><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:-3px; margin-right:5px; color:var(--color-primary);"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> Email :</strong><br>
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
                    <?php
                    for ( $i = 1; $i <= 3; $i++ ) :
                        $img_custom = get_theme_mod( "dentiste_schmitt_cabinet_bassins_{$i}" );
                        // Fallbacks
                        $exts = array( 1 => 'webp', 2 => 'jpg', 3 => 'png' );
                        $img_fallback = get_template_directory_uri() . "/images/{$i}." . $exts[$i];
                        $img_final = $img_custom ? $img_custom : $img_fallback;
                    ?>
                    <div class="carousel-slide" data-carousel-slide aria-hidden="<?php echo $i === 1 ? 'false' : 'true'; ?>">
                        <img src="<?php echo esc_url( $img_final ); ?>" alt="<?php echo esc_attr("Cabinet Bassins - photo $i"); ?>" style="object-fit:cover; height:320px; width:100%;" onerror="this.onerror=null;this.src='<?php echo esc_url( $fallback_img ); ?>';">
                    </div>
                    <?php endfor; ?>
                </div>
                <div class="carousel-nav" aria-hidden="true">
                    <button type="button" class="carousel-btn" data-carousel-prev aria-label="Photo précédente">‹</button>
                    <button type="button" class="carousel-btn" data-carousel-next aria-label="Photo suivante">›</button>
                </div>
            </div>
            <div class="carousel-dots" data-carousel-dots></div>

            <p>
                <strong><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:-3px; margin-right:5px; color:var(--color-primary);"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> Adresse :</strong><br>
                Ruelle de la Repentance 4<br>
                1269 Bassins
            </p>
            <p>
                <strong><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:-3px; margin-right:5px; color:var(--color-primary);"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> Téléphone :</strong><br>
                <a href="tel:+41223652626">+41 22 365 26 26</a>
            </p>
            <p>
                <strong><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:-3px; margin-right:5px; color:var(--color-primary);"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> Email :</strong><br>
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
