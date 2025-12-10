<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Dentiste_Schmitt
 */

get_header();
?>

<main id="primary" class="site-main container section-padding text-center">

    <section class="error-404 not-found">
        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e( 'Page non trouvée', 'dentiste-schmitt' ); ?></h1>
        </header><!-- .page-header -->

        <div class="page-content">
            <p><?php esc_html_e( 'Il semble que rien n’ait été trouvé à cet endroit. Essayez de retourner à l’accueil.', 'dentiste-schmitt' ); ?></p>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn"><?php esc_html_e( 'Retour à l’accueil', 'dentiste-schmitt' ); ?></a>
        </div><!-- .page-content -->
    </section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
