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
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>

    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>

    <div class="soins-grid cards-grid">
        <!-- Example static content for treatments, can be replaced by child pages loop -->
        <div class="card">
            <h3>Implantologie</h3>
            <p>Remplacement de dents manquantes par des racines artificielles en titane.</p>
        </div>
        <div class="card">
            <h3>Orthodontie</h3>
            <p>Correction de l'alignement des dents pour enfants et adultes (Invisalign, bagues).</p>
        </div>
        <div class="card">
            <h3>Prothèses</h3>
            <p>Couronnes, ponts et prothèses amovibles pour restaurer la fonction et l'esthétique.</p>
        </div>
        <div class="card">
            <h3>Soins Pédiatriques</h3>
            <p>Approche douce et adaptée pour les soins dentaires des enfants.</p>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();
