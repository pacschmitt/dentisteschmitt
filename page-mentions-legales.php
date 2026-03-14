<?php
/**
 * Template Name: Mentions Légales
 *
 * @package Dentiste_Schmitt
 */

get_header();
?>

<main id="primary" class="site-main container section-padding">

    <header class="entry-header text-center mb-5">
        <h1 class="entry-title"><?php esc_html_e( 'Mentions Légales', 'dentiste-schmitt' ); ?></h1>
    </header>

    <div class="legal-content entry-content" style="max-width: 800px; margin: 0 auto;">

        <h2><?php esc_html_e( 'Éditeur du site', 'dentiste-schmitt' ); ?></h2>
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

        <h2><?php esc_html_e( 'Responsable de la publication', 'dentiste-schmitt' ); ?></h2>
        <p>
            Dr Laurent Schmitt
        </p>

        <hr class="my-5">

        <h2><?php esc_html_e( 'Hébergement', 'dentiste-schmitt' ); ?></h2>
        <p>
            <?php esc_html_e( 'Hostinger', 'dentiste-schmitt' ); ?>
        </p>

        <hr class="my-5">

        <h2><?php esc_html_e( 'Propriété intellectuelle', 'dentiste-schmitt' ); ?></h2>
        <p>
            <?php esc_html_e( 'Le contenu de ce site (textes, images, graphismes, logo, icônes, etc.) est la propriété exclusive du Cabinet Dentaire Schmitt, à l\'exception des marques, logos ou contenus appartenant à d\'autres sociétés partenaires ou auteurs.', 'dentiste-schmitt' ); ?>
        </p>

        <p>
            <?php esc_html_e( 'Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l\'accord exprès par écrit du Cabinet Dentaire Schmitt.', 'dentiste-schmitt' ); ?>
        </p>

    </div>

</main><!-- #main -->

<?php
get_footer();
