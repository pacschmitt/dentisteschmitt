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
        <h1 class="entry-title">Informations</h1>
    </header>

    <div class="info-content" style="max-width: 900px; margin: 0 auto;">
        <div class="mb-5 text-center">
            <p class="lead">
                <?php esc_html_e( 'Contactez notre cabinet dentaire Dentiste Schmitt pour en savoir plus sur nos services en soins bucco-dentaires. Vous êtes un nouveau patient ? Prenez rendez-vous avec notre équipe, pour votre première consultation.', 'dentiste-schmitt' ); ?>
            </p>
            <p>
                <?php esc_html_e( 'Nos collaborateurs vous accueillent avec professionnalisme du lundi au jeudi. Nos praticiens s\'engagent à vous offrir un service de qualité qui vous rendra votre beau sourire.', 'dentiste-schmitt' ); ?>
            </p>
        </div>

        <div class="cards-grid mb-5">
            <div class="card">
                <h3>Nyon</h3>
                <p>
                    <strong>Adresse :</strong> Avenue Reverdil 2, 1260 Nyon<br>
                    <strong>Téléphone :</strong> <a href="tel:+41223617844">+41 22 361 78 44</a><br>
                    <strong>Email :</strong> <a href="mailto:drschmitt.nyon@bluewin.ch">drschmitt.nyon@bluewin.ch</a>
                </p>
                <p class="mt-5">
                    <strong>Horaires :</strong><br>
                    Lundi au Jeudi : 8h00 - 18h00 (sur rendez-vous)
                </p>
                <p class="mt-5">
                    <strong>Situation :</strong><br>
                    Le cabinet est situé en plein centre de Nyon à 100m de la gare au-dessus du centre commercial de La Combe (3ème étage avec ascenseurs).
                </p>
                <p class="mt-5">
                    <strong>Parking :</strong><br>
                    Parking P1 et P2 de la Combe (accès direct avec les ascenseurs).
                </p>
            </div>

            <div class="card">
                <h3>Bassins</h3>
                <p>
                    <strong>Adresse :</strong> Ruelle de la Repentance 4, 1269 Bassins<br>
                    <strong>Téléphone :</strong> <a href="tel:+41223652626">+41 22 365 26 26</a><br>
                    <strong>Email :</strong> <a href="mailto:cabinetdentairebassins@gmail.com">cabinetdentairebassins@gmail.com</a>
                </p>
                <p class="mt-3">
                    <strong>Horaires :</strong><br>
                    Mardi au Jeudi : 8h30 - 18h00 (sur rendez-vous)
                </p>
                <p class="mt-3">
                    <strong>Situation :</strong><br>
                    Le cabinet est situé au rez-de-chaussée à 50m de la boulangerie de Bassins.
                </p>
                <p class="mt-3">
                    <strong>Parking :</strong><br>
                    Places de parking directement devant le cabinet.
                </p>
            </div>
        </div>

        <div class="faq-section mt-5">
            <h3 class="text-center mb-4">Questions Fréquentes</h3>
            <details>
                <summary>Comment prendre rendez-vous ?</summary>
                <p>Vous pouvez prendre rendez-vous par téléphone ou via notre formulaire en ligne sur Denteo.</p>
            </details>
            <details>
                <summary>Acceptez-vous les nouveaux patients ?</summary>
                <p>Oui, nous acceptons les nouveaux patients dans nos deux cabinets.</p>
            </details>
        </div>
    </div></main><!-- #main -->

<?php
get_footer();
