<?php
/**
 * Template Name: Protection des données
 *
 * @package Dentiste_Schmitt
 */

get_header();
?>

<main id="primary" class="site-main container section-padding">

    <header class="entry-header text-center mb-5">
        <h1 class="entry-title"><?php esc_html_e( 'Politique de Confidentialité', 'dentiste-schmitt' ); ?></h1>
    </header>

    <div class="legal-content entry-content" style="max-width: 800px; margin: 0 auto;">

        <h2><?php esc_html_e( 'Introduction', 'dentiste-schmitt' ); ?></h2>
        <p>
            <?php esc_html_e( 'La protection de vos données personnelles est une priorité pour le Cabinet Dentaire Schmitt. Cette politique de confidentialité explique quelles informations nous collectons, comment nous les utilisons et les droits dont vous disposez.', 'dentiste-schmitt' ); ?>
        </p>
        <p>
            <?php esc_html_e( 'Nous traitons vos données conformément à la Loi fédérale sur la protection des données (LPD) en Suisse et aux réglementations applicables.', 'dentiste-schmitt' ); ?>
        </p>

        <hr class="my-5">

        <h2><?php esc_html_e( 'Responsable du traitement', 'dentiste-schmitt' ); ?></h2>
        <p>
            <strong>Cabinet Dentaire Schmitt</strong><br>
            Avenue Reverdil 2<br>
            1260 Nyon<br>
            Suisse<br>
            <strong>Email :</strong> drschmitt.nyon@bluewin.ch
        </p>

        <hr class="my-5">

        <h2><?php esc_html_e( 'Données collectées', 'dentiste-schmitt' ); ?></h2>
        <p>
            <?php esc_html_e( 'Nous collectons uniquement les données strictement nécessaires au traitement de votre dossier médical et à la gestion de nos rendez-vous :', 'dentiste-schmitt' ); ?>
        </p>
        <ul>
            <li><?php esc_html_e( 'Coordonnées (Nom, Prénom, Adresse, Téléphone, Email)', 'dentiste-schmitt' ); ?></li>
            <li><?php esc_html_e( 'Informations médicales et antécédents de santé (dossier patient confidentiel)', 'dentiste-schmitt' ); ?></li>
            <li><?php esc_html_e( 'Données de facturation et d\'assurances', 'dentiste-schmitt' ); ?></li>
        </ul>

        <hr class="my-5">

        <h2><?php esc_html_e( 'Finalité du traitement', 'dentiste-schmitt' ); ?></h2>
        <p>
            <?php esc_html_e( 'Vos données sont collectées pour :', 'dentiste-schmitt' ); ?>
        </p>
        <ul>
            <li><?php esc_html_e( 'Assurer votre suivi médical et dentaire', 'dentiste-schmitt' ); ?></li>
            <li><?php esc_html_e( 'Gérer les rendez-vous et le secrétariat', 'dentiste-schmitt' ); ?></li>
            <li><?php esc_html_e( 'Établir la facturation et les relations avec les assurances', 'dentiste-schmitt' ); ?></li>
            <li><?php esc_html_e( 'Respecter nos obligations légales de conservation des dossiers médicaux', 'dentiste-schmitt' ); ?></li>
        </ul>

        <hr class="my-5">

        <h2><?php esc_html_e( 'Partage des données', 'dentiste-schmitt' ); ?></h2>
        <p>
            <?php esc_html_e( 'Vos données médicales sont soumises au secret médical et ne sont transmises à des tiers (assurances, laboratoires, confrères spécialistes) qu\'avec votre consentement ou si la loi l\'exige.', 'dentiste-schmitt' ); ?>
        </p>
        <p>
            <?php esc_html_e( 'Les prestataires informatiques (hébergement, logiciel médical) qui traitent des données pour notre compte sont tenus à des obligations strictes de confidentialité et de sécurité.', 'dentiste-schmitt' ); ?>
        </p>

        <hr class="my-5">

        <h2><?php esc_html_e( 'Vos droits', 'dentiste-schmitt' ); ?></h2>
        <p>
            <?php esc_html_e( 'Vous disposez d\'un droit d\'accès, de rectification et d\'effacement de vos données (dans les limites légales de conservation des dossiers médicaux). Pour exercer ces droits, vous pouvez nous contacter à l\'adresse indiquée ci-dessus.', 'dentiste-schmitt' ); ?>
        </p>

        <hr class="my-5">

        <h2><?php esc_html_e( 'Cookies et traceurs', 'dentiste-schmitt' ); ?></h2>
        <p>
            <?php esc_html_e( 'Ce site peut utiliser des cookies techniques pour son fonctionnement. Aucune donnée personnelle n\'est collectée à des fins publicitaires sans votre consentement préalable.', 'dentiste-schmitt' ); ?>
        </p>

        <hr class="my-5">

        <h2><?php esc_html_e( 'Modification de la politique', 'dentiste-schmitt' ); ?></h2>
        <p>
            <?php esc_html_e( 'Nous nous réservons le droit de modifier cette déclaration de protection des données à tout moment afin de garantir sa conformité avec les dispositions légales en vigueur.', 'dentiste-schmitt' ); ?>
        </p>
    </div>

</main><!-- #main -->

<?php
get_footer();
