<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
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
            <div class="lang-switcher">
                <?php
                if ( function_exists( 'pll_the_languages' ) ) {
                    $langs = pll_the_languages( array( 'raw' => 1 ) );
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
                    <a href="#">FR</a> <span class="sep">|</span> <a href="#">EN</a>
                    <?php
                }
                ?>
            </div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
                    'container'      => false,
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</div>
</header><!-- #masthead -->
