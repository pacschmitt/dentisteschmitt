<?php
/**
 * The template for displaying the front page
 *
 * @package Dentiste_Schmitt
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- 1. Hero Section -->
    <section class="hero-section">
        <div class="container hero-content">
            <h1><?php esc_html_e( 'Votre cabinet dentaire à Nyon et Bassins', 'dentiste-schmitt' ); ?></h1>
            <p class="hero-subtitle">
                <?php esc_html_e( 'Chirurgie – Orthodontie – Prothèses esthétiques – Soins pédiatriques – Parodontologie', 'dentiste-schmitt' ); ?>
            </p>
            <div class="hero-buttons">
                <a href="#" class="btn btn-outline"><?php esc_html_e( 'RDV en ligne à Nyon', 'dentiste-schmitt' ); ?></a>
                <a href="#" class="btn btn-outline"><?php esc_html_e( 'RDV en ligne à Bassins', 'dentiste-schmitt' ); ?></a>
            </div>
        </div>
    </section>

    <!-- 2. Cabinet Familial -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="alignwide">
                <p class="lead text-center">
                    <?php esc_html_e( 'Notre cabinet familial, transmis de père en fils, vous accueille pour une dentisterie globale alliant hygiène rigoureuse et technologies de pointe.', 'dentiste-schmitt' ); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- 3. Devenir un nouveau patient -->
    <section class="section-padding">
        <div class="container">
            <div class="two-columns-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                <div class="text-content">
                    <h2><?php esc_html_e( 'Devenir un nouveau patient', 'dentiste-schmitt' ); ?></h2>
                    <p>
                        <?php esc_html_e( 'Nous accordons une importance particulière à votre première visite. Prévoyez 45 minutes de consultation pour établir un bilan complet et un plan de traitement personnalisé. Nous nous engageons à utiliser un langage clair pour vous expliquer chaque étape.', 'dentiste-schmitt' ); ?>
                    </p>
                    <a href="#" class="btn"><?php esc_html_e( 'Prendre rendez-vous', 'dentiste-schmitt' ); ?></a>
                </div>
                <div class="image-content">
                    <!-- Placeholder image -->
                    <div style="background-color: #ddd; height: 300px; width: 100%; display: flex; align-items: center; justify-content: center;">
                        Image Patient
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Dr L. Schmitt -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="two-columns-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                <div class="image-content">
                    <!-- Placeholder image -->
                    <div style="background-color: #ddd; height: 300px; width: 100%; display: flex; align-items: center; justify-content: center;">
                        Photo Dr Schmitt
                    </div>
                </div>
                <div class="text-content">
                    <h2><?php esc_html_e( 'Dr L. Schmitt – Docteur en chirurgie dentaire', 'dentiste-schmitt' ); ?></h2>
                    <p>
                        <?php esc_html_e( 'Spécialisé en dentisterie globale, je pratique l’implantologie, l’orthodontie, les prothèses esthétiques ainsi que les soins pédiatriques et la parodontologie. Mon objectif est de vous offrir des soins durables et esthétiques.', 'dentiste-schmitt' ); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. À propos -->
    <section class="section-padding">
        <div class="container text-center">
            <h2><?php esc_html_e( 'À propos du cabinet', 'dentiste-schmitt' ); ?></h2>
            <div class="alignwide" style="max-width: 800px; margin: 0 auto;">
                <p>
                    <?php esc_html_e( 'Nous vous accueillons dans une ambiance bienveillante et chaleureuse. Notre équipe assure un suivi personnalisé grâce à une technologie moderne (radiographie numérique, scanner 3D) pour votre confort et votre sécurité.', 'dentiste-schmitt' ); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- 6. Nos spécialités -->
    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="text-center"><?php esc_html_e( 'Nos spécialités', 'dentiste-schmitt' ); ?></h2>
            <div class="cards-grid">
                <div class="card">
                    <h3><?php esc_html_e( 'Dentisterie générale', 'dentiste-schmitt' ); ?></h3>
                    <p><?php esc_html_e( 'Soins conservateurs et prévention pour adultes.', 'dentiste-schmitt' ); ?></p>
                </div>
                <div class="card">
                    <h3><?php esc_html_e( 'Soins esthétiques', 'dentiste-schmitt' ); ?></h3>
                    <p><?php esc_html_e( 'Blanchiment, facettes et reconstruction du sourire.', 'dentiste-schmitt' ); ?></p>
                </div>
                <div class="card">
                    <h3><?php esc_html_e( 'Parodontologie', 'dentiste-schmitt' ); ?></h3>
                    <p><?php esc_html_e( 'Traitement des gencives et des tissus de soutien.', 'dentiste-schmitt' ); ?></p>
                </div>
                <div class="card">
                    <h3><?php esc_html_e( 'Traumatologie', 'dentiste-schmitt' ); ?></h3>
                    <p><?php esc_html_e( 'Prise en charge rapide des urgences dentaires.', 'dentiste-schmitt' ); ?></p>
                </div>
            </div>
        </div>
    </section>

</main><!-- #main -->

<!-- Schema.org JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Dentist",
  "name": "Cabinet Dentaire Schmitt",
  "image": "",
  "@id": "",
  "url": "<?php echo esc_url( home_url( '/' ) ); ?>",
  "telephone": "+41223610000",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Rue de la Gare 12",
    "addressLocality": "Nyon",
    "postalCode": "1260",
    "addressCountry": "CH"
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday"
    ],
    "opens": "08:00",
    "closes": "18:00"
  }
}
</script>

<?php
get_footer();
