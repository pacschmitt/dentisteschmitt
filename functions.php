<?php
/**
 * Dentiste Schmitt functions and definitions
 *
 * @package Dentiste_Schmitt
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
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

    // Google Fonts (Inter & Montserrat)
    wp_enqueue_style( 'dentiste-schmitt-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Montserrat:wght@600;700&display=swap', array(), null );

    wp_enqueue_script( 'dentiste-schmitt-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dentiste_schmitt_scripts' );

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
            background-color: #4D93CE;
            color: #FFFFFF !important;
            padding: 16px 32px;
            border-radius: 50px;
            font-weight: 700;
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 1rem;
            border: 2px solid #FFFFFF;
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;
            cursor: pointer;
            display: block;
        }

        .floating-cta-btn:hover {
            background-color: #1B3C73;
            transform: translateY(-4px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.4);
            color: #FFFFFF !important;
        }

        @media (max-width: 768px) {
            .floating-cta-btn {
                bottom: 20px;
                right: 20px;
                padding: 12px 24px;
                font-size: 0.9rem;
            }
        }
    </style>
    <a href="https://booking.denteo.com/fr/edf983884f60c2615958c45caa5e1e93/" target="_blank" class="floating-cta-btn">
        <?php esc_html_e( 'Prendre RDV', 'dentiste-schmitt' ); ?>
    </a>
    <?php
}
add_action( 'wp_footer', 'dentiste_schmitt_floating_cta' );

/**
 * Add Soins Modal to Footer
 */
function dentiste_schmitt_soins_modal() {
    if ( is_page_template( 'page-soins.php' ) ) {
        ?>
        <!-- Modal Structure -->
        <div id="soinModal" class="modal-overlay">
            <div class="modal-content">
                <span class="modal-close">&times;</span>
                <h3 class="modal-title"></h3>
                <div class="modal-body"></div>
            </div>
        </div>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('soinModal');
            const modalTitle = modal.querySelector('.modal-title');
            const modalBody = modal.querySelector('.modal-body');
            const closeBtn = modal.querySelector('.modal-close');
            // Use event delegation for better reliability
            const grid = document.querySelector('.soins-grid');

            if (grid) {
                grid.addEventListener('click', function(e) {
                    const card = e.target.closest('.card');
                    if (card) {
                        const title = card.getAttribute('data-title');
                        const desc = card.getAttribute('data-desc');

                        if (title && desc) {
                            modalTitle.textContent = title;
                            modalBody.textContent = desc;

                            modal.classList.add('active');
                            document.body.style.overflow = 'hidden';
                        }
                    }
                });
            }

            function closeModal() {
                modal.classList.remove('active');
                document.body.style.overflow = '';
            }

            if (closeBtn) {
                closeBtn.addEventListener('click', closeModal);
            }

            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModal();
                }
            });

            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && modal.classList.contains('active')) {
                    closeModal();
                }
            });
        });
        </script>
        <?php
    }
}
add_action( 'wp_footer', 'dentiste_schmitt_soins_modal' );
