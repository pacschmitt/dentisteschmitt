<?php
/**
 * Template Name: Page Soins
 *
 * @package Dentiste_Schmitt
 */

get_header();
?>

<main id="primary" class="site-main container section-padding">

    <header class="entry-header text-center mb-5 alignwide" style="margin-left: auto; margin-right: auto;">
      <h1 class="entry-title"><?php esc_html_e( 'Nos Soins', 'dentiste-schmitt' ); ?></h1>
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
        <div class="card" data-title="La dentisterie globale" data-desc="Approche médicale prenant en compte l'ensemble de la bouche et ses interactions avec le reste du corps pour proposer des traitements complets et durables.">
            <h3>La dentisterie globale</h3>
            <p>Une approche complète pour votre santé bucco-dentaire.</p>
        </div>
        <div class="card" data-title="La dentisterie régénérative" data-desc="Techniques visant à régénérer les tissus osseux et gingivaux perdus, souvent à l'aide de facteurs de croissance (PRF) pour optimiser la guérison.">
            <h3>La dentisterie régénérative</h3>
            <p>Techniques avancées pour régénérer les tissus.</p>
        </div>
        <div class="card" data-title="La dentisterie conservatrice" data-desc="Soins destinés à soigner les dents abîmées (caries, fractures) en préservant au maximum le tissu dentaire sain et la vitalité de la dent.">
            <h3>La dentisterie conservatrice</h3>
            <p>Préserver au maximum vos dents naturelles.</p>
        </div>
        <div class="card" data-title="Urgence et traumatologie" data-desc="Service dédié à la prise en charge rapide des douleurs aiguës, infections ou traumatismes dentaires (chocs, chutes) pour soulager et réparer.">
            <h3>Urgence et traumatologie</h3>
            <p>Un service spécialisé pour les urgences dentaires.</p>
        </div>
        <div class="card" data-title="Les prothèses" data-desc="Dispositifs fixes (couronnes, bridges) ou amovibles destinés à remplacer une ou plusieurs dents manquantes et restaurer la fonction et l'esthétique.">
            <h3>Les prothèses</h3>
            <p>Solutions fixes ou amovibles pour remplacer les dents manquantes.</p>
        </div>
        <div class="card" data-title="L’orthodontie" data-desc="Traitement des malpositions dentaires et des mâchoires pour aligner les dents, améliorer l'occlusion et harmoniser le sourire, chez l'enfant et l'adulte.">
            <h3>L’orthodontie</h3>
            <p>Alignement des dents pour un sourire harmonieux.</p>
        </div>
        <div class="card" data-title="L’orthopédie dento-faciale" data-desc="Correction des décalages des bases osseuses (mâchoires) chez l'enfant en croissance pour harmoniser le visage et préparer l'alignement dentaire.">
            <h3>L’orthopédie dento-faciale</h3>
            <p>Correction des bases osseuses des mâchoires.</p>
        </div>
        <div class="card" data-title="La chirurgie implant" data-desc="Remplacement de la racine d'une dent manquante par un implant (vis en titane ou zircone) sur lequel sera fixée une couronne ou une prothèse.">
            <h3>La chirurgie implant</h3>
            <p>Remplacement durable des racines dentaires.</p>
        </div>
        <div class="card" data-title="Les soins pédiatriques" data-desc="Dentisterie dédiée aux enfants, axée sur la prévention, l'hygiène et les soins conservateurs dans une atmosphère rassurante et adaptée.">
            <h3>Les soins pédiatriques</h3>
            <p>Soins adaptés aux enfants avec douceur.</p>
        </div>
        <div class="card" data-title="La parodontologie" data-desc="Traitement des maladies des gencives et de l'os qui soutient les dents (parodontite), visant à stopper l'infection et conserver les dents.">
            <h3>La parodontologie</h3>
            <p>Traitement des maladies des gencives.</p>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();
