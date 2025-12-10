<?php
/**
 * Template Name: Page Cabinets
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

    <div class="two-columns-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-top: 40px;">
        <div class="cabinet-nyon">
            <h2>Cabinet Nyon</h2>
            <p>Description spécifique du cabinet de Nyon...</p>
            <!-- Map Placeholder -->
            <div style="background:#eee; height:300px; display:flex; align-items:center; justify-content:center;">Google Maps Nyon</div>
        </div>
        <div class="cabinet-bassins">
            <h2>Cabinet Bassins</h2>
            <p>Description spécifique du cabinet de Bassins...</p>
            <!-- Map Placeholder -->
            <div style="background:#eee; height:300px; display:flex; align-items:center; justify-content:center;">Google Maps Bassins</div>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();
