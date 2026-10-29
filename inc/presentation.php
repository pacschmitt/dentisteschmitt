<?php
/** Shared presentation elements. Content and SEO remain owned by the page templates. */
function dentiste_schmitt_page_intro( $title, $eyebrow, $lead = '' ) {
    ?>
    <header class="page-intro">
        <nav class="page-breadcrumb" aria-label="<?php echo esc_attr( dentiste_schmitt_text( 'Fil d’Ariane', 'Breadcrumb' ) ); ?>">
            <a href="<?php echo esc_url( dentiste_schmitt_page_url( 'front-page.php', '/' ) ); ?>"><?php echo esc_html( dentiste_schmitt_text( 'Accueil', 'Home' ) ); ?></a>
            <span aria-hidden="true">/</span><span aria-current="page"><?php echo esc_html( $title ); ?></span>
        </nav>
        <p class="eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
        <h1 class="entry-title"><?php echo esc_html( $title ); ?></h1>
        <?php if ( $lead ) : ?><p class="page-intro-lead"><?php echo esc_html( $lead ); ?></p><?php endif; ?>
    </header>
    <?php
}

function dentiste_schmitt_page_cta() {
    ?>
    <aside class="page-appointment" aria-label="<?php echo esc_attr( dentiste_schmitt_text( 'Prendre rendez-vous', 'Book an appointment' ) ); ?>">
        <div><p class="eyebrow">Nyon · Bassins</p><h2><?php echo esc_html( dentiste_schmitt_text( 'Prenons le temps d’en parler.', 'Let’s take the time to talk.' ) ); ?></h2><p><?php echo esc_html( dentiste_schmitt_text( 'Notre équipe vous accueille sur rendez-vous dans nos deux cabinets.', 'Our team welcomes you by appointment at both practices.' ) ); ?></p></div>
        <a class="btn" href="https://booking.denteo.com/fr/edf983884f60c2615958c45caa5e1e93/" target="_blank" rel="noopener noreferrer"><?php echo esc_html( dentiste_schmitt_text( 'Prendre rendez-vous', 'Book an appointment' ) ); ?><span aria-hidden="true">↗</span></a>
    </aside>
    <?php
}

function dentiste_schmitt_location_hours( $slug ) {
    return dentiste_schmitt_text(
        'nyon' === $slug ? 'Lundi – vendredi · 8h00 – 18h00' : 'Mardi – jeudi · 8h30 – 18h00',
        'nyon' === $slug ? 'Monday – Friday · 8:00 – 18:00' : 'Tuesday – Thursday · 8:30 – 18:00'
    );
}

/** Existing access descriptions, kept as gettext strings for the current translations. */
function dentiste_schmitt_location_access( $slug ) {
    return 'nyon' === $slug ? array(
        'situation' => __( 'Le cabinet est situé en plein centre de Nyon à 100m de la gare au-dessus du centre commercial de La Combe (3ème étage avec ascenseurs).', 'dentiste-schmitt' ),
        'parking' => __( 'Parking P1 et P2 de la Combe (accès direct avec les ascenseurs).', 'dentiste-schmitt' ),
    ) : array(
        'situation' => __( 'Le cabinet est situé au rez-de-chaussée à 50m de la boulangerie de Bassins.', 'dentiste-schmitt' ),
        'parking' => __( 'Places de parking directement devant le cabinet.', 'dentiste-schmitt' ),
    );
}

function dentiste_schmitt_practice_contact( $slug, $with_access = true ) {
    $location = dentiste_schmitt_locations()[ $slug ];
    $phone = 'nyon' === $slug ? '+41 22 361 78 44' : '+41 22 365 26 26';
    $access = dentiste_schmitt_location_access( $slug );
    ?>
    <div class="practice-contact">
        <dl class="contact-list">
            <div><dt><?php esc_html_e( 'Adresse', 'dentiste-schmitt' ); ?></dt><dd><?php echo esc_html( $location['street'] ); ?><br><?php echo esc_html( $location['postcode'] . ' ' . $location['city'] ); ?></dd></div>
            <div><dt><?php esc_html_e( 'Horaires', 'dentiste-schmitt' ); ?></dt><dd><?php echo esc_html( dentiste_schmitt_location_hours( $slug ) ); ?></dd></div>
            <div><dt><?php esc_html_e( 'Téléphone', 'dentiste-schmitt' ); ?></dt><dd><a href="tel:<?php echo esc_attr( $location['telephone'] ); ?>"><?php echo esc_html( $phone ); ?></a></dd></div>
            <div><dt><?php esc_html_e( 'Email', 'dentiste-schmitt' ); ?></dt><dd><a href="mailto:<?php echo esc_attr( $location['email'] ); ?>"><?php echo esc_html( $location['email'] ); ?></a></dd></div>
            <?php if ( $with_access ) : ?>
            <div><dt><?php esc_html_e( 'Situation', 'dentiste-schmitt' ); ?></dt><dd><?php echo esc_html( $access['situation'] ); ?></dd></div>
            <div><dt><?php esc_html_e( 'Parking', 'dentiste-schmitt' ); ?></dt><dd><?php echo esc_html( $access['parking'] ); ?></dd></div>
            <?php endif; ?>
        </dl>
    </div>
    <?php
}
