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
                <a href="https://booking.denteo.com/fr/edf983884f60c2615958c45caa5e1e93/" target="_blank" class="btn btn-outline"><?php esc_html_e( 'RDV en ligne à Nyon', 'dentiste-schmitt' ); ?></a>
                <a href="https://booking.denteo.com/fr/edf983884f60c2615958c45caa5e1e93/" target="_blank" class="btn btn-outline"><?php esc_html_e( 'RDV en ligne à Bassins', 'dentiste-schmitt' ); ?></a>
            </div>
        </div>
    </section>

    <!-- 2. Cabinet Familial -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="alignwide">
                <p class="lead text-center">
                    <?php esc_html_e( 'Dentiste Schmitt, c\'est un cabinet familial qui se transmet de père en fils, où la dentisterie globale est pratiquée. Le cabinet répond aux normes les plus sévères et les plus récentes en termes d’hygiène, de numérisation et de technologie. Nous sommes en partenariat avec un technicien dentaire installé à Nyon, au plus près du cabinet qui vous garantit un résultat esthétique et durable conforme à votre sensibilité.', 'dentiste-schmitt' ); ?>
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
                        <?php esc_html_e( 'C’est une première consultation de 45 minutes pour définir expliquer la ou les pathologies et proposer un plan de traitement validé par le patient à partir de données objectivables et dans un langage clair et compréhensible.', 'dentiste-schmitt' ); ?>
                    </p>
                    <a href="https://booking.denteo.com/fr/edf983884f60c2615958c45caa5e1e93/" target="_blank" class="btn"><?php esc_html_e( 'Prendre rendez-vous', 'dentiste-schmitt' ); ?></a>
                </div>
                <div class="image-content">
                    <!-- Placeholder image -->
                    <div style="background-color: #f0f0f0; height: 300px; width: 100%; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                        <span style="color: #999;">Image Patient</span>
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
                    <div style="background-color: #f0f0f0; height: 300px; width: 100%; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                        <span style="color: #999;">Photo Dr Schmitt</span>
                    </div>
                </div>
                <div class="text-content">
                    <h2><?php esc_html_e( 'Dr. L. Schmitt', 'dentiste-schmitt' ); ?></h2>
                    <h3 class="h5 mb-3"><?php esc_html_e( 'Docteur en chirurgie dentaire – Pratique la dentisterie globale', 'dentiste-schmitt' ); ?></h3>
                    <p>
                        <?php esc_html_e( 'Merci de l’intérêt et de la confiance que vous placez en nous. L’expérience, la polyvalence et la mise en confiance sont les moyens mis à votre disposition pour résoudre tous les problèmes esthétiques et/ou fonctionnels auxquels vous pourriez être confrontés, dans tous les domaines dentaires : implantologie « PRF FELLOW » dentisterie régénérative depuis 2006, orthodontie, prothèses esthétiques, soins pédiatriques, parodontologie.', 'dentiste-schmitt' ); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. À propos -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2><?php esc_html_e( 'À propos', 'dentiste-schmitt' ); ?></h2>
            </div>
            <div class="alignwide" style="max-width: 900px; margin: 0 auto;">
                <p class="mb-4">
                    <?php esc_html_e( 'Nos dentistes et nos collaborateurs, spécialisés en santé bucco-dentaire, vous accueillent au cabinet du lundi au jeudi, pour vous prodiguer des soins de qualité dans une ambiance bienveillante et chaleureuse.', 'dentiste-schmitt' ); ?>
                </p>
                <p class="mb-4">
                    <?php esc_html_e( 'Nos praticiens sont formés pour réaliser des soins sur les enfants et les adultes avec douceur et assurance. Nous voulons, à travers les générations, changer l\'appréhension que certaines personnes peuvent avoir à la vue d’un dentiste. Pour cela, nous créons une vraie relation de confiance avec chacun de nos patients. Nous nous adaptons à vos besoins et nous vous proposons un suivi personnalisé tout au long de votre prise en charge.', 'dentiste-schmitt' ); ?>
                </p>
                <p>
                    <?php esc_html_e( 'Nos équipes d’experts sont à votre écoute pour discuter de votre situation et des potentielles solutions à mettre en place pour retrouver ou maintenir un sourire splendide. Du simple détartrage à la chirurgie, vous pouvez disposer des meilleurs soins dentaires, dans un cadre stérilisé, avec des équipements à la pointe de la technologie et une équipe aux petits soins pour vous.', 'dentiste-schmitt' ); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- 6. Nos spécialités -->
    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="text-center mb-5"><?php esc_html_e( 'Nos spécialités', 'dentiste-schmitt' ); ?></h2>
            <div class="cards-grid">
                <div class="card">
                    <h3><?php esc_html_e( 'Dentisterie générale adulte', 'dentiste-schmitt' ); ?></h3>
                </div>
                <div class="card">
                    <h3><?php esc_html_e( 'Soins esthétiques dentaires', 'dentiste-schmitt' ); ?></h3>
                </div>
                <div class="card">
                    <h3><?php esc_html_e( 'Parodontologie', 'dentiste-schmitt' ); ?></h3>
                </div>
                <div class="card">
                    <h3><?php esc_html_e( 'Traumatologie', 'dentiste-schmitt' ); ?></h3>
                </div>
            </div>
            <div class="text-center mt-5">
                 <a href="<?php echo esc_url( home_url( '/nos-soins' ) ); ?>" class="btn"><?php esc_html_e( 'En savoir plus sur nos soins', 'dentiste-schmitt' ); ?></a>
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
