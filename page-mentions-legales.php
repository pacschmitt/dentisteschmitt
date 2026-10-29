<?php
/**
 * Template Name: Mentions Légales
 *
 * @package Dentiste_Schmitt
 */

get_header();
?>

<main id="primary" class="site-main container section-padding interior-page document-page">

    <?php dentiste_schmitt_page_intro( __( 'Mentions Légales', 'dentiste-schmitt' ), dentiste_schmitt_text( 'Informations légales', 'Legal information' ) ); ?>
    <div class="document-layout"><aside class="document-nav"><p class="eyebrow"><?php echo esc_html( dentiste_schmitt_text( 'Sommaire', 'Contents' ) ); ?></p><nav aria-label="<?php echo esc_attr( dentiste_schmitt_text( 'Dans ce document', 'In this document' ) ); ?>"><ol><li><a href="#document-section-1"><?php esc_html_e( 'Éditeur du site', 'dentiste-schmitt' ); ?></a></li><li><a href="#document-section-2"><?php esc_html_e( 'Responsable de la publication', 'dentiste-schmitt' ); ?></a></li><li><a href="#document-section-3"><?php esc_html_e( 'Hébergement', 'dentiste-schmitt' ); ?></a></li><li><a href="#document-section-4"><?php esc_html_e( 'Propriété intellectuelle', 'dentiste-schmitt' ); ?></a></li></ol></nav></aside>
    <div class="legal-content entry-content" style="max-width: 800px; margin: 0 auto;">

        <h2 id="document-section-1"><?php esc_html_e( 'Éditeur du site', 'dentiste-schmitt' ); ?></h2>
        <p>
            <strong>Cabinet Dentaire Schmitt</strong><br>
            Dr Laurent Schmitt, Dr Sacha Schmitt, Dr Aline Koring<br>
            Avenue Reverdil 2<br>
            1260 Nyon<br>
            Suisse
        </p>
        <p>
            <strong>Téléphone :</strong> +41 22 361 78 44<br>
            <strong>Email :</strong> drschmitt.nyon@bluewin.ch
        </p>

        <hr class="my-5">

        <h2 id="document-section-2"><?php esc_html_e( 'Responsable de la publication', 'dentiste-schmitt' ); ?></h2>
        <p>
            Dr Laurent Schmitt
        </p>

        <hr class="my-5">

        <h2 id="document-section-3"><?php esc_html_e( 'Hébergement', 'dentiste-schmitt' ); ?></h2>
        <p>
            <?php esc_html_e( 'Hostinger', 'dentiste-schmitt' ); ?>
        </p>

        <hr class="my-5">

        <h2 id="document-section-4"><?php esc_html_e( 'Propriété intellectuelle', 'dentiste-schmitt' ); ?></h2>
        <p>
            <?php esc_html_e( 'Le contenu de ce site (textes, images, graphismes, logo, icônes, etc.) est la propriété exclusive du Cabinet Dentaire Schmitt, à l\'exception des marques, logos ou contenus appartenant à d\'autres sociétés partenaires ou auteurs.', 'dentiste-schmitt' ); ?>
        </p>

        <p>
            <?php esc_html_e( 'Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l\'accord exprès par écrit du Cabinet Dentaire Schmitt.', 'dentiste-schmitt' ); ?>
        </p>

    </div>

    </div>
</main><!-- #main -->

<?php
get_footer();
