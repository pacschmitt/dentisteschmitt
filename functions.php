<?php
/**
 * Dentiste Schmitt functions and definitions
 *
 * @package Dentiste_Schmitt
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.1.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function dentiste_schmitt_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'dentiste-schmitt', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

    // Enable Custom Logo (Appearance → Customize → Site Identity).
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 120,
            'width'       => 360,
            'flex-height' => true,
            'flex-width'  => true,
        )
    );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Menu Principal', 'dentiste-schmitt' ),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

    // Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );

    // Add support for block styles.
    add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'dentiste_schmitt_setup' );

/**
 * Enqueue scripts and styles.
 */
function dentiste_schmitt_scripts() {
	wp_enqueue_style( 'dentiste-schmitt-style', get_stylesheet_uri(), array(), _S_VERSION );

    // Google Fonts (Inter & Montserrat for better readability and a professional medical look)
    wp_enqueue_style( 'dentiste-schmitt-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@500;600;700&display=swap', array(), null );

    wp_enqueue_script( 'dentiste-schmitt-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    if ( is_page_template( 'page-cabinets.php' ) || is_page( 'cabinets' ) ) {
        wp_enqueue_script( 'dentiste-schmitt-carousel', get_template_directory_uri() . '/js/carousel.js', array(), _S_VERSION, true );
    }

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dentiste_schmitt_scripts' );

// SEO defaults, plugin integration and local business data.
require get_template_directory() . '/inc/seo.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add Floating CTA Button to Footer
 */
function dentiste_schmitt_floating_cta() {
    ?>
    <style>
        .floating-cta-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 999999;
            background-color: var(--color-primary) !important; /* Terracotta Primary */
            color: var(--color-white) !important;
            padding: 16px 32px;
            border-radius: 10px;
            font-weight: 700;
            box-shadow: 0 4px 20px rgba(127, 70, 48, 0.2);
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 1rem;
            border: 2px solid var(--color-white);
            text-decoration: none;
            font-family: var(--font-body);
            cursor: pointer;
            display: block;
        }

        .floating-cta-btn:hover {
            background-color: var(--color-primary-dark) !important; /* Terracotta Accent/Dark */
            transform: translateY(-4px);
            box-shadow: 0 8px 25px rgba(127, 70, 48, 0.3);
            color: var(--color-white) !important;
        }

        @media (max-width: 768px) {
            .floating-cta-btn {
                bottom: 16px;
                right: 16px;
                width: 56px;
                height: 56px;
                padding: 0;
                border-radius: 999px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                font-size: 0.95rem;
                letter-spacing: 0;
                text-transform: uppercase;
            }

            /* Replace long label with compact “RDV” on mobile */
            .floating-cta-btn {
                font-size: 0; /* hide original text visually */
            }
            .floating-cta-btn::before {
                content: 'RDV';
                font-size: 0.95rem;
                line-height: 1;
            }
        }

        @media (max-width: 480px) {
            .floating-cta-btn {
                width: 52px;
                height: 52px;
            }
        }
    </style>
    <a href="https://booking.denteo.com/fr/edf983884f60c2615958c45caa5e1e93/" target="_blank" rel="noopener noreferrer" class="floating-cta-btn">
        <?php esc_html_e( 'Prendre RDV', 'dentiste-schmitt' ); ?>
    </a>
    <?php
}
add_action( 'wp_footer', 'dentiste_schmitt_floating_cta' );
