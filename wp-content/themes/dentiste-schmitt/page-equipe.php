<?php
/**
 * Template Name: Page Équipe
 *
 * @package Dentiste_Schmitt
 */

get_header();
?>

<main id="primary" class="site-main container section-padding">

    <header class="entry-header text-center mb-5">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>

    <!-- Custom Team Grid Section -->
    <section class="team-grid">
        <?php
        // Standard loop to display page content (intro text)
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>

        <!-- Placeholder for Team Members (could be ACF repeater or hardcoded) -->
        <div class="cards-grid">
            <div class="card">
                <div style="background:#ddd; height:200px; margin-bottom:15px;">Photo</div>
                <h3>Dr L. Schmitt</h3>
                <p>Chirurgien Dentiste</p>
            </div>
            <div class="card">
                <div style="background:#ddd; height:200px; margin-bottom:15px;">Photo</div>
                <h3>Assistante 1</h3>
                <p>Hygiéniste</p>
            </div>
            <!-- Add more team members here -->
        </div>
    </section>

</main><!-- #main -->

<?php
get_footer();
