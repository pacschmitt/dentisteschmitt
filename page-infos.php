<?php
/**
 * Template Name: Page Infos
 *
 * @package Dentiste_Schmitt
 */

get_header();
?>

<main id="primary" class="site-main container section-padding interior-page information-page">

    <?php dentiste_schmitt_page_intro( __( 'Informations', 'dentiste-schmitt' ), dentiste_schmitt_text( 'Préparer votre visite', 'Plan your visit' ) ); ?>
    <nav class="page-jump-links" aria-label="<?php echo esc_attr( dentiste_schmitt_text( 'Sur cette page', 'On this page' ) ); ?>"><a href="#contacts"><?php echo esc_html( dentiste_schmitt_text( 'Contacts et accès', 'Contact and access' ) ); ?><span aria-hidden="true">↓</span></a><a href="#questions-frequentes"><?php esc_html_e( 'Questions Fréquentes', 'dentiste-schmitt' ); ?><span aria-hidden="true">↓</span></a></nav>
    <div class="info-content" style="max-width: 900px; margin: 0 auto;">
        <div class="mb-5 text-center">
            <p class="lead">
                <?php esc_html_e( 'Contactez notre cabinet dentaire Dentiste Schmitt pour en savoir plus sur nos services en soins bucco-dentaires. Vous êtes un nouveau patient ? Prenez rendez-vous avec notre équipe, pour votre première consultation.', 'dentiste-schmitt' ); ?>
            </p>
            <p>
                <?php echo esc_html( dentiste_schmitt_text( 'Nos collaborateurs vous accueillent sur rendez-vous à Nyon du lundi au vendredi et à Bassins du mardi au jeudi. Retrouvez ci-dessous les horaires et les coordonnées de chaque cabinet.', 'Our team welcomes you by appointment in Nyon from Monday to Friday and in Bassins from Tuesday to Thursday. Find opening hours and contact details for each practice below.' ) ); ?>
            </p>
        </div>

        <div class="contact-cards" id="contacts">
            <?php foreach ( dentiste_schmitt_locations() as $slug => $location ) : ?>
            <section class="contact-card">
                <p class="eyebrow"><?php echo esc_html( dentiste_schmitt_text( 'Cabinet dentaire', 'Dental practice' ) ); ?></p>
                <h2><?php echo esc_html( $location['city'] ); ?></h2>
                <?php dentiste_schmitt_practice_contact( $slug ); ?>
                <a class="text-link" href="<?php echo esc_url( dentiste_schmitt_location_url( $slug ) ); ?>"><?php echo esc_html( dentiste_schmitt_text( 'Découvrir le cabinet', 'Explore the practice' ) ); ?><span aria-hidden="true">→</span></a>
            </section>
            <?php endforeach; ?>
        </div>

        <section class="faq-section" id="questions-frequentes">
            <div class="faq-heading">
                <p class="eyebrow"><?php echo esc_html( dentiste_schmitt_text( 'Vos questions', 'Your questions' ) ); ?></p>
                <h2 class="h3 d-inline-flex align-items-center mb-3">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2" style="color:var(--color-primary); margin-right: 10px;"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                    <?php esc_html_e( 'Questions Fréquentes', 'dentiste-schmitt' ); ?>
                </h2>
                <p class="text-muted"><?php esc_html_e( 'Retrouvez les réponses aux questions les plus couramment posées par nos patients.', 'dentiste-schmitt' ); ?></p>
            </div>

            <div class="faq-accordion" itemscope itemtype="https://schema.org/FAQPage">
                <details class="mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <summary itemprop="name"><?php esc_html_e( 'Comment prendre rendez-vous ?', 'dentiste-schmitt' ); ?></summary>
                    <div class="faq-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text" class="m-0"><?php esc_html_e( 'Vous pouvez prendre rendez-vous par téléphone ou via notre formulaire en ligne sur Denteo pour nos deux cabinets.', 'dentiste-schmitt' ); ?></p>
                    </div>
                </details>
                <details class="mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <summary itemprop="name"><?php esc_html_e( 'Acceptez-vous les nouveaux patients ?', 'dentiste-schmitt' ); ?></summary>
                    <div class="faq-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text" class="m-0"><?php esc_html_e( 'Oui, nous acceptons les nouveaux patients, petits et grands, dans nos deux cabinets.', 'dentiste-schmitt' ); ?></p>
                    </div>
                </details>
                <details class="mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <summary itemprop="name"><?php esc_html_e( 'Que faire en cas d\'urgence dentaire ?', 'dentiste-schmitt' ); ?></summary>
                    <div class="faq-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text" class="m-0"><?php esc_html_e( 'En cas d\'urgence sur nos heures d\'ouverture, veuillez nous contacter immédiatement par téléphone. Nous ferons le maximum pour vous recevoir dans les plus brefs délais. En dehors de nos horaires, veuillez vous adresser au médecin-dentiste de garde de votre région.', 'dentiste-schmitt' ); ?></p>
                    </div>
                </details>
                <details class="mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <summary itemprop="name"><?php esc_html_e( 'À quelle fréquence dois-je faire un contrôle et un détartrage ?', 'dentiste-schmitt' ); ?></summary>
                    <div class="faq-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text" class="m-0"><?php esc_html_e( 'Nous recommandons une visite de contrôle accompagnée d\'un détartrage chez l\'hygiéniste au moins une à deux fois par an pour maintenir une santé bucco-dentaire optimale.', 'dentiste-schmitt' ); ?></p>
                    </div>
                </details>
                <details class="mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <summary itemprop="name"><?php esc_html_e( 'Quels sont les moyens de paiement acceptés ?', 'dentiste-schmitt' ); ?></summary>
                    <div class="faq-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text" class="m-0"><?php esc_html_e( 'Vous avez la possibilité de régler directement au cabinet par carte bancaire ou en espèces. De plus, grâce à notre partenariat avec la Caisse des Médecins-Dentistes, vous pouvez opter pour un paiement sur facture avec possibilité d\'échelonnement.', 'dentiste-schmitt' ); ?></p>
                    </div>
                </details>
                <details class="mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <summary itemprop="name"><?php esc_html_e( 'Les cabinets sont-ils accessibles aux personnes à mobilité réduite ?', 'dentiste-schmitt' ); ?></summary>
                    <div class="faq-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text" class="m-0"><?php esc_html_e( 'Totalement. À Nyon, le cabinet est facilement accessible via les ascenseurs du centre commercial de La Combe. À Bassins, notre cabinet au rez-de-chaussée dispose de places de stationnement de plain-pied juste devant l\'entrée.', 'dentiste-schmitt' ); ?></p>
                    </div>
                </details>
                <details class="mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <summary itemprop="name"><?php esc_html_e( 'Dès quel âge mon enfant doit-il consulter pour la première fois ?', 'dentiste-schmitt' ); ?></summary>
                    <div class="faq-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text" class="m-0"><?php esc_html_e( 'Il est conseillé de prendre un premier rendez-vous de contrôle vers l\'âge de 2 à 3 ans. Cela permet de rassurer l\'enfant, de l\'habituer au cabinet et de vérifier que les premières dents se développent bien.', 'dentiste-schmitt' ); ?></p>
                    </div>
                </details>
                <details class="mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <summary itemprop="name"><?php esc_html_e( 'J\'ai peur du dentiste, comment gérez-vous l\'anxiété des patients ?', 'dentiste-schmitt' ); ?></summary>
                    <div class="faq-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text" class="m-0"><?php esc_html_e( 'Notre équipe est formée pour accompagner les patients craintifs. Nous prenons le temps de vous écouter, de vous expliquer chaque étape du traitement et de procéder avec douceur pour que votre visite se déroule le plus sereinement possible.', 'dentiste-schmitt' ); ?></p>
                    </div>
                </details>
                <details class="mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <summary itemprop="name"><?php esc_html_e( 'Que dois-je préparer ou apporter lors de ma première consultation ?', 'dentiste-schmitt' ); ?></summary>
                    <div class="faq-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text" class="m-0"><?php esc_html_e( 'Pensez à vous munir de votre carte d\'assurance maladie, de la liste de vos médicaments éventuels, et de vos anciennes radiographies dentaires si vous en possédez.', 'dentiste-schmitt' ); ?></p>
                    </div>
                </details>
                <details class="mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <summary itemprop="name"><?php esc_html_e( 'Proposez-vous du blanchiment dentaire et des soins esthétiques ?', 'dentiste-schmitt' ); ?></summary>
                    <div class="faq-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text" class="m-0"><?php esc_html_e( 'Absolument. Nous proposons diverses solutions esthétiques, dont le blanchiment dentaire sécurisé et des facettes, pour redonner de l\'éclat à votre sourire. Un bilan préalable est toujours effectué.', 'dentiste-schmitt' ); ?></p>
                    </div>
                </details>
            </div>
        </section>
    </div></main><!-- #main -->

<?php
get_footer();
