<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- 3. Preconnect for Google Fonts to improve Core Web Vitals (SEO) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- 1. Local Business Schema (SEO) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalOrganization",
      "name": "Cabinet Dentaire Schmitt",
      "url": "<?php echo esc_url( home_url( '/' ) ); ?>",
      "logo": "<?php echo esc_url( wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' ) ); ?>",
      "department": [
        {
          "@type": "Dentist",
          "name": "Cabinet Dentaire Schmitt - Nyon",
          "telephone": "+41223617844",
          "email": "drschmitt.nyon@bluewin.ch",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Avenue Reverdil 2",
            "postalCode": "1260",
            "addressLocality": "Nyon",
            "addressCountry": "CH"
          }
        },
        {
          "@type": "Dentist",
          "name": "Cabinet Dentaire Schmitt - Bassins",
          "telephone": "+41223652626",
          "email": "cabinetdentairebassins@gmail.com",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Ruelle de la Repentance 4",
            "postalCode": "1269",
            "addressLocality": "Bassins",
            "addressCountry": "CH"
          }
        }
      ]
    }
    </script>

    <?php wp_head(); ?>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
	<div class="container header-inner">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Cabinet Dentaire Schmitt</a>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Menu Principal', 'dentiste-schmitt' ); ?>">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="screen-reader-text"><?php esc_html_e( 'Menu', 'dentiste-schmitt' ); ?></span>
                ☰
            </button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
                    'container'      => false,
				)
			);
			?>
            <div class="lang-switcher">
                <?php
                if ( function_exists( 'pll_the_languages' ) ) {
                    $langs = pll_the_languages( array(
                        'raw'           => 1,
                        'hide_if_empty' => 0,
                    ) );
                    if ( $langs ) {
                        $links = array();
                        foreach ( $langs as $lang ) {
                             $class = $lang['current_lang'] ? ' class="current-lang"' : '';
                             $url   = is_front_page() ? pll_home_url( $lang['slug'] ) : $lang['url'];
                             $links[] = '<a href="' . esc_url( $url ) . '"' . $class . '>' . esc_html( strtoupper( $lang['slug'] ) ) . '</a>';
                        }
                        echo implode( ' <span class="sep">|</span> ', $links );
                    }
                } else {
                    ?>
                    <a href="#">FR</a> <span class="sep">|</span> <a href="#">EN</a>
                    <?php
                }
                ?>
            </div>
		</nav><!-- #site-navigation -->
	</div>
</header><!-- #masthead -->
