<?php
/**
 * Template Name: Page Soins
 *
 * @package Dentiste_Schmitt
 */

get_header();
?>

<main id="primary" class="site-main container section-padding">

    <header class="entry-header text-center mb-5">
        <h1 class="entry-title">Nos Soins</h1>
    </header>

    <div class="alignwide text-center mb-5" style="max-width: 900px; margin: 0 auto;">
        <p class="lead">
            <?php esc_html_e( 'Chez Dentiste Schmitt, nos praticiens proposent leurs compétences et leurs savoir-faire en dentisterie globale, pour parfaire l\'esthétique et l\'hygiène de vos dents.', 'dentiste-schmitt' ); ?>
        </p>
        <p>
            <?php esc_html_e( 'En effet, à la suite d’une prise de rendez-vous, nous réalisons un examen complet de votre dentition. Notre hygiéniste vous accompagne minutieusement dans la collecte de toutes les données concernant votre santé buccale. Ainsi, nous pouvons réfléchir, concevoir et vous proposer un plan de traitement préventif ou curatif, personnalisé, adapté à vos besoins.', 'dentiste-schmitt' ); ?>
        </p>
        <p>
            <?php esc_html_e( 'Consciencieux et minutieux dans notre travail, nous nous engageons à réaliser des soins de qualité en privilégiant le confort et la quiétude de nos patients. Durant nos consultations et dans la prise en charge de nos patients, nous respectons rigoureusement les normes d\'hygiène et utilisons des équipements derniers cris pour traiter et améliorer votre santé buccale.', 'dentiste-schmitt' ); ?>
        </p>
        <p>
            <?php esc_html_e( 'À l\'écoute de notre patientèle, nous prenons le temps de comprendre leur histoire, leur priorité et quelques fois leur peur du dentiste. Au cabinet Dentiste Schmitt, nous souhaitons changer les appréhensions sur notre métier et réussir a traiter les problèmes dentaire en douceur et sans douleur. Nous adaptons notre façon de réaliser nos soins en fonction de l’âge de nos patients.', 'dentiste-schmitt' ); ?>
        </p>
    </div>

    <h2 class="text-center mb-5"><?php esc_html_e( 'Découvrez nos pratiques et soins disponibles', 'dentiste-schmitt' ); ?></h2>

    <div class="soins-grid cards-grid">
        <div class="card">
            <h3>La dentisterie globale</h3>
            <p>Une approche complète pour votre santé bucco-dentaire.</p>
        </div>
        <div class="card">
            <h3>La dentisterie régénérative</h3>
            <p>Techniques avancées pour régénérer les tissus.</p>
        </div>
        <div class="card">
            <h3>La dentisterie conservatrice</h3>
            <p>Préserver au maximum vos dents naturelles.</p>
        </div>
        <div class="card">
            <h3>Urgence et traumatologie</h3>
            <p>Un service spécialisé pour les urgences dentaires.</p>
        </div>
        <div class="card">
            <h3>Les prothèses</h3>
            <p>Solutions fixes ou amovibles pour remplacer les dents manquantes.</p>
        </div>
        <div class="card">
            <h3>L’orthodontie</h3>
            <p>Alignement des dents pour un sourire harmonieux.</p>
        </div>
        <div class="card">
            <h3>L’orthopédie dento-faciale</h3>
            <p>Correction des bases osseuses des mâchoires.</p>
        </div>
        <div class="card">
            <h3>La chirurgie implant</h3>
            <p>Remplacement durable des racines dentaires.</p>
        </div>
        <div class="card">
            <h3>Les soins pédiatriques</h3>
            <p>Soins adaptés aux enfants avec douceur.</p>
        </div>
        <div class="card">
            <h3>La parodontologie</h3>
            <p>Traitement des maladies des gencives.</p>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();
