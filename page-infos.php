<?php
/**
 * Template Name: Page Infos
 *
 * @package Dentiste_Schmitt
 */

get_header();
?>

<main id="primary" class="site-main container section-padding">

    <header class="entry-header text-center mb-5">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>

    <div class="info-content" style="max-width: 800px; margin: 0 auto;">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>

        <div class="faq-section mt-5">
            <h3>Questions Fréquentes</h3>
            <details>
                <summary>Comment prendre rendez-vous ?</summary>
                <p>Vous pouvez prendre rendez-vous par téléphone ou via notre formulaire en ligne.</p>
            </details>
            <details>
                <summary>Acceptez-vous les nouveaux patients ?</summary>
                <p>Oui, nous acceptons les nouveaux patients dans nos deux cabinets.</p>
            </details>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();
