
<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-column">
                <h3>Cabinet Nyon</h3>
                <p>
                    Rue de la Gare 12<br>
                    1260 Nyon<br>
                    <a href="tel:+41223610000">022 361 00 00</a><br>
                    <a href="mailto:nyon@cabinet-schmitt.ch">nyon@cabinet-schmitt.ch</a>
                </p>
            </div>

            <div class="footer-column">
                <h3>Cabinet Bassins</h3>
                <p>
                    Route de l'Arzier 5<br>
                    1269 Bassins<br>
                    <a href="tel:+41223660000">022 366 00 00</a><br>
                    <a href="mailto:bassins@cabinet-schmitt.ch">bassins@cabinet-schmitt.ch</a>
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
                    <li><a href="#"><?php esc_html_e( 'Mentions légales', 'dentiste-schmitt' ); ?></a></li>
                    <li><a href="#"><?php esc_html_e( 'Protection des données', 'dentiste-schmitt' ); ?></a></li>
                </ul>
                <div class="social-icons">
                    <!-- Placeholders for social icons -->
                    <a href="#" aria-label="Facebook">FB</a>
                    <a href="#" aria-label="Instagram">IG</a>
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

<?php wp_footer(); ?>

</body>
</html>
