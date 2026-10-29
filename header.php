<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- 3. Preconnect for Google Fonts to improve Core Web Vitals (SEO) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <script>document.documentElement.classList.add('has-js');</script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#primary"><?php echo esc_html( dentiste_schmitt_text( 'Aller au contenu', 'Skip to content' ) ); ?></a>

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
			<button type="button" class="menu-toggle" aria-controls="navigation-panel" aria-expanded="false">
                <span class="screen-reader-text"><?php esc_html_e( 'Menu', 'dentiste-schmitt' ); ?></span>
                <span class="menu-toggle-lines" aria-hidden="true"></span>
            </button>
			<div class="navigation-panel" id="navigation-panel">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
                    'container'      => false,
				)
			);
			?>
                <a class="header-booking" href="https://booking.denteo.com/fr/edf983884f60c2615958c45caa5e1e93/" target="_blank" rel="noopener noreferrer"><?php echo esc_html( dentiste_schmitt_text( 'Prendre rendez-vous', 'Book an appointment' ) ); ?><span aria-hidden="true">↗</span></a>
            </div>
            <div class="lang-switcher">
                <?php
                if ( function_exists( 'pll_the_languages' ) ) {
                    $langs = pll_the_languages( array(
                        'raw'           => 1,
                        'hide_if_empty' => 1,
                        'hide_if_no_translation' => 1,
                    ) );
                    if ( $langs ) {
                        $links = array();
                        foreach ( $langs as $lang ) {
                             $class = $lang['current_lang'] ? ' class="current-lang"' : '';
                             $links[] = '<a href="' . esc_url( $lang['url'] ) . '"' . $class . '>' . esc_html( strtoupper( $lang['slug'] ) ) . '</a>';
                        }
                        echo implode( ' <span class="sep">|</span> ', $links );
                    }
                } else {
                    ?>
                    <span aria-current="page"><?php echo esc_html( strtoupper( substr( get_locale(), 0, 2 ) ) ); ?></span>
                    <?php
                }
                ?>
            </div>
		</nav><!-- #site-navigation -->
	</div>
</header><!-- #masthead -->
