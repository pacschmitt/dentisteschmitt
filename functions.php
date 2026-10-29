<?php
/**
 * Dentiste Schmitt functions and definitions
 *
 * @package Dentiste_Schmitt
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.2.0-rc4' );
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

    wp_enqueue_style( 'dentiste-schmitt-premium', get_template_directory_uri() . '/css/premium.css', array( 'dentiste-schmitt-style' ), _S_VERSION );
    wp_enqueue_style( 'dentiste-schmitt-interior', get_template_directory_uri() . '/css/interior.css', array( 'dentiste-schmitt-premium' ), _S_VERSION );
    wp_enqueue_script( 'dentiste-schmitt-interactions', get_template_directory_uri() . '/js/interactions.js', array(), _S_VERSION, true );

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
require get_template_directory() . '/inc/presentation.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add Floating CTA Button to Footer
 */
function dentiste_schmitt_floating_cta() {
    ?>
    <a href="https://booking.denteo.com/fr/edf983884f60c2615958c45caa5e1e93/" target="_blank" rel="noopener noreferrer" class="floating-cta-btn">
        <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="5" width="18" height="16" rx="3"/><path d="M7 3v4m10-4v4M3 11h18m-13 5h8"/></svg>
        <?php echo esc_html( dentiste_schmitt_text( 'RDV en ligne', 'Book online' ) ); ?>
    </a>
    <?php
}
add_action( 'wp_footer', 'dentiste_schmitt_floating_cta' );
