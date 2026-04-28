<?php
/**
 * Template Name: Page Tarifs
 *
 * @package Dentiste_Schmitt
 */

get_header();
?>

<main id="primary" class="site-main container section-padding">

    <header class="entry-header text-center mb-5">
        <h1 class="entry-title"><?php esc_html_e( 'Nos Tarifs', 'dentiste-schmitt' ); ?></h1>
    </header>

    <div class="alignwide text-center mb-5" style="max-width: 900px; margin: 0 auto;">
        <p class="lead">
            <?php esc_html_e( 'La confiance avec nos patients est essentielle. C’est pourquoi nous faisons le choix de la transparence totale sur nos tarifs.', 'dentiste-schmitt' ); ?>
        </p>
        <p>
            <?php esc_html_e( 'Avant chaque soin, nous sommes à votre disposition pour vous délivrer un devis clair et détaillé, afin que vous soyez pleinement informé et serein.', 'dentiste-schmitt' ); ?>
        </p>
    </div>

    <!-- SSO Info -->
    <div class="p-4 bg-light text-center" style="border-radius: 8px; max-width: 800px; margin: 60px auto;">
        <p class="mb-0">
            <strong><?php esc_html_e( 'Valeur du point', 'dentiste-schmitt' ); ?> :</strong>
            <?php esc_html_e( 'Nous travaillons selon l’actuelle tarification de la SSO. La valeur du point Dentotar appliquée pour les soins est de 1.20.', 'dentiste-schmitt' ); ?>
        </p>
    </div>

    <!-- Prices Grid -->
    <div class="tarifs-grid mb-5" style="max-width: 900px; margin: 60px auto;">
        <h2 class="text-center mb-5 mt-5 pt-3"><?php esc_html_e( 'Nos soins dentaires et d’hygiène les plus demandés :', 'dentiste-schmitt' ); ?></h2>

        <div class="cards-grid">

            <div class="card">
                <h3 class="mb-4 text-primary"><?php esc_html_e( 'Consultations & Prévention', 'dentiste-schmitt' ); ?></h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="display: flex; justify-content: space-between; align-items: center; padding: 10px 0; border-bottom: 1px dashed var(--color-border, #ccc);">
                        <span><?php esc_html_e( '1ère consultation avec radios', 'dentiste-schmitt' ); ?></span>
                        <strong style="white-space: nowrap; margin-left: 15px;">176 CHF</strong>
                    </li>
                    <li style="display: flex; justify-content: space-between; align-items: center; padding: 10px 0; border-bottom: 1px dashed var(--color-border, #ccc);">
                        <span>
                            <?php esc_html_e( 'Détartrage adulte', 'dentiste-schmitt' ); ?><br>
                            <small class="text-muted"><?php esc_html_e( '+ polissage et conseils d\'hygiène', 'dentiste-schmitt' ); ?></small>
                        </span>
                        <strong style="white-space: nowrap; margin-left: 15px;">160 CHF</strong>
                    </li>
                    <li style="display: flex; justify-content: space-between; align-items: center; padding: 10px 0; border-bottom: 1px dashed var(--color-border, #ccc);">
                        <span><?php esc_html_e( 'Détartrage enfant / Adolescent', 'dentiste-schmitt' ); ?></span>
                        <strong style="white-space: nowrap; margin-left: 15px;">100 / 120 CHF</strong>
                    </li>
                    <li style="display: flex; justify-content: space-between; align-items: center; padding: 10px 0; border-bottom: 1px dashed var(--color-border, #ccc);">
                        <span><?php esc_html_e( 'Blanchiment dentaire au fauteuil', 'dentiste-schmitt' ); ?></span>
                        <strong style="white-space: nowrap; margin-left: 15px;">585 CHF</strong>
                    </li>
                </ul>
            </div>

            <div class="card">
                <h3 class="mb-4 text-primary"><?php esc_html_e( 'Soins Spécifiques', 'dentiste-schmitt' ); ?></h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="display: flex; justify-content: space-between; align-items: center; padding: 10px 0; border-bottom: 1px dashed var(--color-border, #ccc);">
                        <span><?php esc_html_e( 'Orthodontie', 'dentiste-schmitt' ); ?><br><small class="text-muted"><?php esc_html_e( '1ère consultation', 'dentiste-schmitt' ); ?></small></span>
                        <strong style="white-space: nowrap; margin-left: 15px;">126 CHF</strong>
                    </li>
                    <li style="display: flex; justify-content: space-between; align-items: center; padding: 10px 0; border-bottom: 1px dashed var(--color-border, #ccc);">
                        <span><?php esc_html_e( 'Couronne prothétique', 'dentiste-schmitt' ); ?></span>
                        <strong style="white-space: nowrap; margin-left: 15px;">1600 CHF</strong>
                    </li>
                    <li style="display: flex; justify-content: space-between; align-items: center; padding: 10px 0; border-bottom: 1px dashed var(--color-border, #ccc);">
                        <span><?php esc_html_e( 'Extraction de dent de sagesse', 'dentiste-schmitt' ); ?></span>
                        <strong style="white-space: nowrap; margin-left:15px; font-weight:normal; font-style:italic;"><?php esc_html_e( 'Sur devis', 'dentiste-schmitt' ); ?></strong>
                    </li>
                    <li style="display: flex; justify-content: space-between; align-items: center; padding: 10px 0; border-bottom: 1px dashed var(--color-border, #ccc);">
                        <span><?php esc_html_e( 'Pose d\'un implant avec sa couronne', 'dentiste-schmitt' ); ?></span>
                        <strong style="white-space: nowrap; margin-left:15px; font-weight:normal; font-style:italic;"><?php esc_html_e( 'Sur devis', 'dentiste-schmitt' ); ?></strong>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <!-- Mieux nous connaitre / Payment Details -->
    <div class="alignwide" style="max-width: 900px; margin: 0 auto; margin-top: 60px;">
        <h2 class="mb-4 text-center"><?php esc_html_e( 'Moyens et facilités de paiement', 'dentiste-schmitt' ); ?></h2>

        <div class="card p-5 bg-light" style="border: none;">
            <p class="mb-4">
                <?php esc_html_e( 'Nous collaborons avec la Caisse des Médecins-Dentistes, ce qui vous offre la possibilité d\'échelonner le paiement de vos factures si vous le souhaitez.', 'dentiste-schmitt' ); ?>
            </p>
            <p class="mb-2"><strong><?php esc_html_e( 'Pour le règlement, deux options s’offrent à vous :', 'dentiste-schmitt' ); ?></strong></p>
            <ul style="margin-left: 20px; padding-left: 20px;">
                <li class="mb-2"><?php esc_html_e( 'Recevoir votre facture à domicile ou par e-mail afin d’effectuer un virement bancaire.', 'dentiste-schmitt' ); ?></li>
                <li><?php esc_html_e( 'Régler directement au cabinet par carte bancaire ou en espèces à l\'issue de votre rendez-vous.', 'dentiste-schmitt' ); ?></li>
            </ul>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();
