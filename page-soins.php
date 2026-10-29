<?php
/**
 * Template Name: Page Soins
 *
 * @package Dentiste_Schmitt
 */

get_header();
?>

<main id="primary" class="site-main container section-padding interior-page care-page">

    <?php dentiste_schmitt_page_intro( dentiste_schmitt_text( 'Soins dentaires à Nyon et Bassins', 'Dental care in Nyon and Bassins' ), dentiste_schmitt_text( 'Nos soins', 'Our treatments' ) ); ?>
    <div class="alignwide text-center mb-5" style="max-width: 900px; margin: 0 auto;">
        <p class="lead">
            <?php esc_html_e( 'Chez Dentiste Schmitt, nous savons qu’une bonne santé bucco-dentaire est indispensable à votre santé globale et à votre bien-être. C’est pourquoi notre équipe met tout en œuvre pour vous offrir un accompagnement personnalisé et un sourire éclatant !', 'dentiste-schmitt' ); ?>
        </p>
    </div>

    <div class="care-layout"><div class="care-heading"><p class="eyebrow"><?php echo esc_html( dentiste_schmitt_text( 'Nos prestations', 'Our services' ) ); ?></p>
    <h2 class="text-center mb-5 mt-5"><?php esc_html_e( 'Dentisterie globale et spécialisée pour enfants et adultes', 'dentiste-schmitt' ); ?></h2>

    </div><div class="soins-grid cards-grid">

        <details class="card soin-details">
            <summary><span class="care-number" aria-hidden="true">01</span><h3 class="mb-3"><?php esc_html_e( 'Soins Préventifs & Conservateurs', 'dentiste-schmitt' ); ?></h3>
                <span class="soin-preview"><?php esc_html_e( 'Contrôle, prévention, traitement des caries et traitements de racine.', 'dentiste-schmitt' ); ?></span>
            </summary>
            <p class="soin-description"><?php esc_html_e( 'Nous assurons votre suivi à travers des examens de contrôle réguliers, les soins préventifs (dont les scellements de fissures), le traitement des caries et les traitements de racine.', 'dentiste-schmitt' ); ?></p>
        </details>

        <details class="card soin-details">
            <summary><span class="care-number" aria-hidden="true">02</span><h3 class="mb-3"><?php esc_html_e( 'Hygiène Dentaire', 'dentiste-schmitt' ); ?></h3>
                <span class="soin-preview"><?php esc_html_e( 'Détartrage, polissage et conseils d\'hygiène personnalisés.', 'dentiste-schmitt' ); ?></span>
            </summary>
            <p class="soin-description"><?php esc_html_e( 'Un nettoyage complet comprenant le détartrage, le polissage et des conseils d\'hygiène pour garantir la santé de vos gencives et la propreté de vos dents.', 'dentiste-schmitt' ); ?></p>
        </details>

        <details class="card soin-details">
            <summary><span class="care-number" aria-hidden="true">03</span><h3 class="mb-3"><?php esc_html_e( 'Soins Prothétiques', 'dentiste-schmitt' ); ?></h3>
                <span class="soin-preview"><?php esc_html_e( 'Facettes, couronnes, inlays, onlays et appareils (fixes ou amovibles).', 'dentiste-schmitt' ); ?></span>
            </summary>
            <p class="soin-description"><?php esc_html_e( 'Restauration de l\'esthétique et de la fonction masticatoire grâce aux facettes, couronnes, inlays, onlays, ainsi que les appareils amovibles et fixés.', 'dentiste-schmitt' ); ?></p>
        </details>

        <details class="card soin-details">
            <summary><span class="care-number" aria-hidden="true">04</span><h3 class="mb-3"><?php esc_html_e( 'Urgences Dentaires', 'dentiste-schmitt' ); ?></h3>
                <span class="soin-preview"><?php esc_html_e( 'Soulagement rapide des douleurs, traumas, abcès et dents cassées.', 'dentiste-schmitt' ); ?></span>
            </summary>
            <p class="soin-description"><?php esc_html_e( 'Prise en charge rapide et efficace des douleurs intenses, des traumatismes (chocs), des abcès infectieux ou encore des dents cassées.', 'dentiste-schmitt' ); ?></p>
        </details>

        <details class="card soin-details">
            <summary><span class="care-number" aria-hidden="true">05</span><h3 class="mb-3"><?php esc_html_e( 'Orthodontie Classique', 'dentiste-schmitt' ); ?></h3>
                <span class="soin-preview"><?php esc_html_e( 'Traitements traditionnels pour corriger l\'alignement à tout âge.', 'dentiste-schmitt' ); ?></span>
            </summary>
            <p class="soin-description"><?php esc_html_e( 'Traitements visant à réaligner les dents, adaptés pour les problèmes d\'occlusion complexes chez les enfants, adolescents et adultes.', 'dentiste-schmitt' ); ?></p>
        </details>

        <details class="card soin-details">
            <summary><span class="care-number" aria-hidden="true">06</span><h3 class="mb-3"><?php esc_html_e( 'Smile Design & Orthodontie Invisible', 'dentiste-schmitt' ); ?></h3>
                <span class="soin-preview"><?php esc_html_e( 'Conception numérique sur-mesure et réalignement 100% discret par gouttières.', 'dentiste-schmitt' ); ?></span>
            </summary>
            <p class="soin-description"><?php esc_html_e( 'Nous concevons numériquement le sourire de vos rêves. L\'orthodontie invisible vous permet de visualiser le résultat final dès le début et de réaligner vos dents grâce à des gouttières transparentes, confortables et très discrètes.', 'dentiste-schmitt' ); ?></p>
        </details>

        <details class="card soin-details">
            <summary><span class="care-number" aria-hidden="true">07</span><h3 class="mb-3"><?php esc_html_e( 'Chirurgie Orale', 'dentiste-schmitt' ); ?></h3>
                <span class="soin-preview"><?php esc_html_e( 'Implants, extractions de dents de sagesse et corrections gingivales.', 'dentiste-schmitt' ); ?></span>
            </summary>
            <p class="soin-description"><?php esc_html_e( 'Interventions sous anesthésie pour l\'extraction de dents de sagesse complexes, la pose d\'implants dentaires ou la correction gingivale.', 'dentiste-schmitt' ); ?></p>
        </details>

        <details class="card soin-details">
            <summary><span class="care-number" aria-hidden="true">08</span><h3 class="mb-3"><?php esc_html_e( 'Dentisterie Esthétique', 'dentiste-schmitt' ); ?></h3>
                <span class="soin-preview"><?php esc_html_e( 'Restaurer l\'éclat avec le blanchiment au fauteuil et les facettes.', 'dentiste-schmitt' ); ?></span>
            </summary>
            <p class="soin-description"><?php esc_html_e( 'Sublimez votre sourire de façon immédiate grâce à nos solutions de blanchiment dentaire au fauteuil ou avec la pose de facettes en céramique.', 'dentiste-schmitt' ); ?></p>
        </details>

        <details class="card soin-details">
            <summary><span class="care-number" aria-hidden="true">09</span><h3 class="mb-3"><?php esc_html_e( 'Parodontologie & Apnée', 'dentiste-schmitt' ); ?></h3>
                <span class="soin-preview"><?php esc_html_e( 'Traitement des gencives et prise en charge de l\'apnée du sommeil.', 'dentiste-schmitt' ); ?></span>
            </summary>
            <p class="soin-description"><?php esc_html_e( 'Prise en charge et traitement approfondi des maladies parodontales (déchaussement, inflammation des gencives) et accompagnement pour l\'apnée du sommeil.', 'dentiste-schmitt' ); ?></p>
        </details>

    </div>

    </div>
    <?php dentiste_schmitt_page_cta(); ?>
</main><!-- #main -->

<?php
get_footer();
