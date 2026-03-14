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

        <div class="card" data-title="Soins Préventifs & Conservateurs" data-desc="Nous assurons votre suivi à travers des examens de contrôle réguliers, les soins préventifs (dont les scellements de fissures), le traitement des caries et les traitements de racine.">
            <h3 class="mb-3">Soins Préventifs & Conservateurs</h3>
            <p>Contrôle, prévention, traitement des caries et traitements de racine.</p>
        </div>

        <div class="card" data-title="Hygiène Dentaire" data-desc="Un nettoyage complet comprenant le détartrage, le polissage et des conseils d'hygiène pour garantir la santé de vos gencives et la propreté de vos dents.">
            <h3 class="mb-3">Hygiène Dentaire</h3>
            <p>Détartrage, polissage et conseils d'hygiène personnalisés.</p>
        </div>

        <div class="card" data-title="Soins Prothétiques" data-desc="Restauration de l'esthétique et de la fonction masticatoire grâce aux facettes, couronnes, inlays, onlays, ainsi que les appareils amovibles et fixés.">
            <h3 class="mb-3">Soins Prothétiques</h3>
            <p>Facettes, couronnes, inlays, onlays et appareils (fixes ou amovibles).</p>
        </div>

        <div class="card" data-title="Urgences Dentaires" data-desc="Prise en charge rapide et efficace des douleurs intenses, des traumatismes (chocs), des abcès infectieux ou encore des dents cassées.">
            <h3 class="mb-3">Urgences Dentaires</h3>
            <p>Soulagement rapide des douleurs, traumas, abcès et dents cassées.</p>
        </div>

        <div class="card" data-title="Orthodontie" data-desc="Traitements visant à réaligner les dents, adaptés pour les problèmes d'occlusion complexes chez les enfants, adolescents et adultes.">
            <h3 class="mb-3">Orthodontie Classique</h3>
            <p>Traitements traditionnels pour corriger l'alignement à tout âge.</p>
        </div>

        <div class="card" data-title="Smile Design & Orthodontie Invisible" data-desc="Nous concevons numériquement le sourire de vos rêves. L'orthodontie invisible vous permet de visualiser le résultat final dès le début et de réaligner vos dents grâce à des gouttières transparentes, confortables et très discrètes.">
            <h3 class="mb-3">Smile Design & Orthodontie Invisible</h3>
            <p>Conception numérique sur-mesure et réalignement 100% discret par gouttières.</p>
        </div>

        <div class="card" data-title="Chirurgie Orale" data-desc="Interventions sous anesthésie pour l'extraction de dents de sagesse complexes, la pose d'implants dentaires ou la correction gingivale.">
            <h3 class="mb-3">Chirurgie Orale</h3>
            <p>Implants, extractions de dents de sagesse et corrections gingivales.</p>
        </div>

        <div class="card" data-title="Dentisterie Esthétique" data-desc="Sublimez votre sourire de façon immédiate grâce à nos solutions de blanchiment dentaire au fauteuil ou avec la pose de facettes en céramique.">
            <h3 class="mb-3">Dentisterie Esthétique</h3>
            <p>Restaurer l'éclat avec le blanchiment au fauteuil et les facettes.</p>
        </div>

        <div class="card" data-title="Parodontologie & Apnée du sommeil" data-desc="Prise en charge et traitement approfondi des maladies parodontales (déchaussement, inflammation des gencives) et accompagnement pour l'apnée du sommeil.">
            <h3 class="mb-3">Parodontologie & Apnée</h3>
            <p>Traitement des gencives et prise en charge de l'apnée du sommeil.</p>
        </div>

    </div>

</main><!-- #main -->

<?php
get_footer();
