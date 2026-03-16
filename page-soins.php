<?php
/**
 * Template Name: Page Soins
 *
 * @package Dentiste_Schmitt
 */

get_header();
?>

<main id="primary" class="site-main container section-padding">

    <header class="entry-header text-center mb-5" style="max-width: 800px; margin-left: auto; margin-right: auto;">
      <h1 class="entry-title"><?php esc_html_e( 'Nos Soins', 'dentiste-schmitt' ); ?></h1>
    </header>

    <div class="alignwide text-center mb-5" style="max-width: 900px; margin: 0 auto;">
        <p class="lead">
            <?php esc_html_e( 'Chez Dentiste Schmitt, nous savons qu’une bonne santé bucco-dentaire est indispensable à votre santé globale et à votre bien-être. C’est pourquoi notre équipe met tout en œuvre pour vous offrir un accompagnement personnalisé et un sourire éclatant !', 'dentiste-schmitt' ); ?>
        </p>
    </div>

    <div class="separator"></div>
    <h2 class="text-center mb-5 mt-5"><?php esc_html_e( 'Dentisterie globale et spécialisée pour enfants et adultes', 'dentiste-schmitt' ); ?></h2>

    <div class="soins-grid cards-grid">

        <div class="card" data-title="<?php esc_attr_e( 'Soins Préventifs & Conservateurs', 'dentiste-schmitt' ); ?>" data-desc="<?php esc_attr_e( 'Nous assurons votre suivi à travers des examens de contrôle réguliers, les soins préventifs (dont les scellements de fissures), le traitement des caries et les traitements de racine.', 'dentiste-schmitt' ); ?>">
            <h3 class="mb-3"><?php esc_html_e( 'Soins Préventifs & Conservateurs', 'dentiste-schmitt' ); ?></h3>
            <p><?php esc_html_e( 'Contrôle, prévention, traitement des caries et traitements de racine.', 'dentiste-schmitt' ); ?></p>
        </div>

        <div class="card" data-title="<?php esc_attr_e( 'Hygiène Dentaire', 'dentiste-schmitt' ); ?>" data-desc="<?php esc_attr_e( 'Un nettoyage complet comprenant le détartrage, le polissage et des conseils d\'hygiène pour garantir la santé de vos gencives et la propreté de vos dents.', 'dentiste-schmitt' ); ?>">
            <h3 class="mb-3"><?php esc_html_e( 'Hygiène Dentaire', 'dentiste-schmitt' ); ?></h3>
            <p><?php esc_html_e( 'Détartrage, polissage et conseils d\'hygiène personnalisés.', 'dentiste-schmitt' ); ?></p>
        </div>

        <div class="card" data-title="<?php esc_attr_e( 'Soins Prothétiques', 'dentiste-schmitt' ); ?>" data-desc="<?php esc_attr_e( 'Restauration de l\'esthétique et de la fonction masticatoire grâce aux facettes, couronnes, inlays, onlays, ainsi que les appareils amovibles et fixés.', 'dentiste-schmitt' ); ?>">
            <h3 class="mb-3"><?php esc_html_e( 'Soins Prothétiques', 'dentiste-schmitt' ); ?></h3>
            <p><?php esc_html_e( 'Facettes, couronnes, inlays, onlays et appareils (fixes ou amovibles).', 'dentiste-schmitt' ); ?></p>
        </div>

        <div class="card" data-title="<?php esc_attr_e( 'Urgences Dentaires', 'dentiste-schmitt' ); ?>" data-desc="<?php esc_attr_e( 'Prise en charge rapide et efficace des douleurs intenses, des traumatismes (chocs), des abcès infectieux ou encore des dents cassées.', 'dentiste-schmitt' ); ?>">
            <h3 class="mb-3"><?php esc_html_e( 'Urgences Dentaires', 'dentiste-schmitt' ); ?></h3>
            <p><?php esc_html_e( 'Soulagement rapide des douleurs, traumas, abcès et dents cassées.', 'dentiste-schmitt' ); ?></p>
        </div>

        <div class="card" data-title="<?php esc_attr_e( 'Orthodontie', 'dentiste-schmitt' ); ?>" data-desc="<?php esc_attr_e( 'Traitements visant à réaligner les dents, adaptés pour les problèmes d\'occlusion complexes chez les enfants, adolescents et adultes.', 'dentiste-schmitt' ); ?>">
            <h3 class="mb-3"><?php esc_html_e( 'Orthodontie Classique', 'dentiste-schmitt' ); ?></h3>
            <p><?php esc_html_e( 'Traitements traditionnels pour corriger l\'alignement à tout âge.', 'dentiste-schmitt' ); ?></p>
        </div>

        <div class="card" data-title="<?php esc_attr_e( 'Smile Design & Orthodontie Invisible', 'dentiste-schmitt' ); ?>" data-desc="<?php esc_attr_e( 'Nous concevons numériquement le sourire de vos rêves. L\'orthodontie invisible vous permet de visualiser le résultat final dès le début et de réaligner vos dents grâce à des gouttières transparentes, confortables et très discrètes.', 'dentiste-schmitt' ); ?>">
            <h3 class="mb-3"><?php esc_html_e( 'Smile Design & Orthodontie Invisible', 'dentiste-schmitt' ); ?></h3>
            <p><?php esc_html_e( 'Conception numérique sur-mesure et réalignement 100% discret par gouttières.', 'dentiste-schmitt' ); ?></p>
        </div>

        <div class="card" data-title="<?php esc_attr_e( 'Chirurgie Orale', 'dentiste-schmitt' ); ?>" data-desc="<?php esc_attr_e( 'Interventions sous anesthésie pour l\'extraction de dents de sagesse complexes, la pose d\'implants dentaires ou la correction gingivale.', 'dentiste-schmitt' ); ?>">
            <h3 class="mb-3"><?php esc_html_e( 'Chirurgie Orale', 'dentiste-schmitt' ); ?></h3>
            <p><?php esc_html_e( 'Implants, extractions de dents de sagesse et corrections gingivales.', 'dentiste-schmitt' ); ?></p>
        </div>

        <div class="card" data-title="<?php esc_attr_e( 'Dentisterie Esthétique', 'dentiste-schmitt' ); ?>" data-desc="<?php esc_attr_e( 'Sublimez votre sourire de façon immédiate grâce à nos solutions de blanchiment dentaire au fauteuil ou avec la pose de facettes en céramique.', 'dentiste-schmitt' ); ?>">
            <h3 class="mb-3"><?php esc_html_e( 'Dentisterie Esthétique', 'dentiste-schmitt' ); ?></h3>
            <p><?php esc_html_e( 'Restaurer l\'éclat avec le blanchiment au fauteuil et les facettes.', 'dentiste-schmitt' ); ?></p>
        </div>

        <div class="card" data-title="<?php esc_attr_e( 'Parodontologie & Apnée du sommeil', 'dentiste-schmitt' ); ?>" data-desc="<?php esc_attr_e( 'Prise en charge et traitement approfondi des maladies parodontales (déchaussement, inflammation des gencives) et accompagnement pour l\'apnée du sommeil.', 'dentiste-schmitt' ); ?>">
            <h3 class="mb-3"><?php esc_html_e( 'Parodontologie & Apnée', 'dentiste-schmitt' ); ?></h3>
            <p><?php esc_html_e( 'Traitement des gencives et prise en charge de l\'apnée du sommeil.', 'dentiste-schmitt' ); ?></p>
        </div>

    </div>

</main><!-- #main -->

<?php
get_footer();
