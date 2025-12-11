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
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    Cabinet Dentaire Schmitt
                <?php endif; ?>
            </a>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Menu Principal', 'dentiste-schmitt' ); ?>">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="screen-reader-text"><?php esc_html_e( 'Menu', 'dentiste-schmitt' ); ?></span>
                ☰
            </button>
            <div class="lang-switcher">
                <!-- Placeholder for language switcher plugin like Polylang or WPML -->
                <a href="#">FR</a> | <a href="#">EN</a>
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
