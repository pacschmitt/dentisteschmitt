
<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-column">
                <h3>Cabinet Nyon</h3>
                <p>
                    Avenue Reverdil 2<br>
                    1260 Nyon<br>
                    <a href="tel:+41223617844">+41 22 361 78 44</a><br>
                    <a href="mailto:drschmitt.nyon@bluewin.ch">drschmitt.nyon@bluewin.ch</a>
                </p>
            </div>

            <div class="footer-column">
                <h3>Cabinet Bassins</h3>
                <p>
                    Ruelle de la Repentance 4<br>
                    1269 Bassins<br>
                    <a href="tel:+41223652626">+41 22 365 26 26</a><br>
                    <a href="mailto:cabinetdentairebassins@gmail.com">cabinetdentairebassins@gmail.com</a>
                </p>
            </div>

            <div class="footer-column">
                <h3>Horaires</h3>
                <p>
                    Lundi – Jeudi<br>
                    08h00 – 18h00
                </p>
            </div>

            <div class="footer-column">
                <h3>Informations</h3>
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/mentions-legales' ) ); ?>"><?php esc_html_e( 'Mentions légales', 'dentiste-schmitt' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/privacy' ) ); ?>"><?php esc_html_e( 'Protection des données', 'dentiste-schmitt' ); ?></a></li>
                </ul>
                <div class="social-icons">
                    <!-- Placeholders for social icons -->
                    <!-- <a href="#" aria-label="Facebook">FB</a> -->
                </div>
            </div>
        </div>

        <div class="site-info">
            <p>
                &copy; <?php echo date( 'Y' ); ?> Cabinet Dentaire Schmitt.
                <?php esc_html_e( 'Tous droits réservés.', 'dentiste-schmitt' ); ?>
            </p>
        </div><!-- .site-info -->
    </div><!-- .container -->
</footer><!-- #colophon -->

<!-- Floating CTA Button -->
<a href="https://booking.denteo.com/fr/edf983884f60c2615958c45caa5e1e93/" target="_blank" class="floating-cta">
    <?php esc_html_e( 'Prendre RDV', 'dentiste-schmitt' ); ?>
</a>

<?php wp_footer(); ?>

</body>
</html>
