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
        <h1 class="entry-title">Nos Cabinets</h1>
    </header>

    <div class="alignwide text-center mb-5" style="max-width: 900px; margin: 0 auto;">
        <p class="lead">
            <?php esc_html_e( 'Notre deuxième cabinet dentaire et toute son équipe vous accueillent chaleureusement pour vous offrir les meilleurs soins bucco-dentaires. Nous mettons toutes nos compétences et notre expérience au service de nos patients, enfant ou adulte, pour prévenir et soigner leur dentition.', 'dentiste-schmitt' ); ?>
        </p>
        <p>
            <?php esc_html_e( 'Contactez le cabinet pour prendre rendez-vous avec nos chirurgiens-dentistes et nos hygiénistes de qualité.', 'dentiste-schmitt' ); ?>
        </p>
        <div class="mt-4 p-4 bg-light text-center" style="border-radius: 8px; display: inline-block;">
            <strong><?php esc_html_e( 'Tarifs', 'dentiste-schmitt' ); ?> :</strong>
            <?php esc_html_e( 'Tout mode et facilité de paiement', 'dentiste-schmitt' ); ?><br>
            <?php esc_html_e( 'Tarif hygiéniste : 150 CHF', 'dentiste-schmitt' ); ?> |
            <?php esc_html_e( 'Tarif SSO : CHF 1.12', 'dentiste-schmitt' ); ?>
        </div>
    </div>

    <div class="two-columns-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-top: 60px;">
        <div class="cabinet-nyon card">
            <h2 class="mb-4">Cabinet Nyon</h2>
            <div class="mt-4 mb-4">
                <a href="https://booking.denteo.com/fr/edf983884f60c2615958c45caa5e1e93/" target="_blank" class="btn btn-sm">Prendre RDV à Nyon</a>
            </div>
            <p>
                <strong>Adresse :</strong><br>
                Avenue Reverdil 2<br>
                1260 Nyon
            </p>
            <p>
                <strong>Téléphone :</strong><br>
                <a href="tel:+41223617844">+41 22 361 78 44</a>
            </p>
            <p>
                <strong>Email :</strong><br>
                <a href="mailto:drschmitt.nyon@bluewin.ch">drschmitt.nyon@bluewin.ch</a>
            </p>
            <!-- Map Placeholder -->
            <div class="mt-4" style="background:#eee; height:300px; display:flex; align-items:center; justify-content:center; border-radius: 8px;">Google Maps Nyon</div>
        </div>

        <div class="cabinet-bassins card">
            <h2 class="mb-4">Cabinet Bassins</h2>
            <p>
                <strong>Adresse :</strong><br>
                Ruelle de la Repentance 4<br>
                1269 Bassins
            </p>
            <p>
                <strong>Téléphone :</strong><br>
                <a href="tel:+41223652626">+41 22 365 26 26</a>
            </p>
            <p>
                <strong>Email :</strong><br>
                <a href="mailto:cabinetdentairebassins@gmail.com">cabinetdentairebassins@gmail.com</a>
            </p>
            <div class="mt-4">
                <a href="https://booking.denteo.com/fr/edf983884f60c2615958c45caa5e1e93/" target="_blank" class="btn btn-sm">Prendre RDV à Bassins</a>
            </div>
            <!-- Map Placeholder -->
            <div class="mt-4" style="background:#eee; height:300px; display:flex; align-items:center; justify-content:center; border-radius: 8px;">Google Maps Bassins</div>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();
