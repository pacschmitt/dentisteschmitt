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

    // Extra safety: enforce centered headings (in case another stylesheet overrides).
    $heading_css = 'h1,h2,h3,h4,h5,h6{ text-align:center !important; }';
    wp_add_inline_style( 'dentiste-schmitt-style', $heading_css );

    // Google Fonts (Inter & Montserrat for better readability and a professional medical look)
    wp_enqueue_style( 'dentiste-schmitt-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@500;600;700&display=swap', array(), null );

    wp_enqueue_script( 'dentiste-schmitt-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'dentiste-schmitt-carousel', get_template_directory_uri() . '/js/carousel.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dentiste_schmitt_scripts' );

/**
 * Build a context-aware meta description.
 *
 * @return string
 */
function dentiste_schmitt_get_meta_description() {
    if ( is_singular() ) {
        $excerpt = has_excerpt() ? get_the_excerpt() : wp_strip_all_tags( get_the_content( null, false ) );
        $excerpt = preg_replace( '/\s+/', ' ', $excerpt );
        $excerpt = trim( $excerpt );

        if ( ! empty( $excerpt ) ) {
            return wp_trim_words( $excerpt, 30, '…' );
        }
    }

    $description = get_bloginfo( 'description', 'display' );
    if ( ! empty( $description ) ) {
        return $description;
    }

    return __( 'Cabinet dentaire à Nyon et Bassins: soins dentaires adultes et enfants, orthodontie, esthétique et prévention.', 'dentiste-schmitt' );
}

/**
 * Output core SEO meta tags and social metadata.
 */
function dentiste_schmitt_output_seo_meta() {
    $description = dentiste_schmitt_get_meta_description();
    $title       = wp_get_document_title();
    $site_name   = get_bloginfo( 'name', 'display' );
    $canonical   = wp_get_canonical_url();
    $locale      = str_replace( '_', '-', get_locale() );
    $type        = is_singular() ? 'article' : 'website';

    if ( ! $canonical ) {
        global $wp;
        $request   = isset( $wp->request ) ? $wp->request : '';
        $canonical = is_front_page() ? home_url( '/' ) : home_url( add_query_arg( array(), $request ) );
    }

    $image_url = '';
    if ( is_singular() && has_post_thumbnail() ) {
        $image_url = get_the_post_thumbnail_url( get_queried_object_id(), 'full' );
    } elseif ( has_custom_logo() ) {
        $logo_id   = get_theme_mod( 'custom_logo' );
        $image_url = $logo_id ? wp_get_attachment_image_url( $logo_id, 'full' ) : '';
    }

    echo "\n" . '<meta name="description" content="' . esc_attr( $description ) . '">' . "\n";
    echo '<meta property="og:locale" content="' . esc_attr( $locale ) . '">' . "\n";
    echo '<meta property="og:type" content="' . esc_attr( $type ) . '">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr( $title ) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr( $description ) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url( $canonical ) . '">' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr( $site_name ) . '">' . "\n";
    echo '<meta name="twitter:card" content="' . esc_attr( $image_url ? 'summary_large_image' : 'summary' ) . '">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr( $title ) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr( $description ) . '">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( $canonical ) . '">' . "\n";

    if ( ! empty( $image_url ) ) {
        echo '<meta property="og:image" content="' . esc_url( $image_url ) . '">' . "\n";
        echo '<meta name="twitter:image" content="' . esc_url( $image_url ) . '">' . "\n";
    }

    if ( function_exists( 'pll_the_languages' ) ) {
        $langs = pll_the_languages(
            array(
                'raw'           => 1,
                'hide_if_empty' => 0,
            )
        );

        if ( is_array( $langs ) ) {
            foreach ( $langs as $lang ) {
                if ( empty( $lang['url'] ) || empty( $lang['locale'] ) ) {
                    continue;
                }
                echo '<link rel="alternate" hreflang="' . esc_attr( str_replace( '_', '-', $lang['locale'] ) ) . '" href="' . esc_url( $lang['url'] ) . '">' . "\n";
            }
        }
    }
}
add_action( 'wp_head', 'dentiste_schmitt_output_seo_meta', 1 );

/**
 * Improve robots directives for search and error pages.
 *
 * @param array $robots Array of robots directives.
 * @return array
 */
function dentiste_schmitt_robots_directives( $robots ) {
    if ( is_search() || is_404() ) {
        $robots['noindex'] = true;
        $robots['nofollow'] = true;
    }

    return $robots;
}
add_filter( 'wp_robots', 'dentiste_schmitt_robots_directives' );

/**
 * Output structured data for the business.
 */
function dentiste_schmitt_output_business_schema() {
    $logo_id  = get_theme_mod( 'custom_logo' );
    $logo_url = $logo_id ? wp_get_attachment_image_url( $logo_id, 'full' ) : '';

    $schema = array(
        '@context'    => 'https://schema.org',
        '@graph'      => array(
            array(
                '@type'     => 'WebSite',
                '@id'       => trailingslashit( home_url() ) . '#website',
                'url'       => home_url( '/' ),
                'name'      => get_bloginfo( 'name', 'display' ),
                'inLanguage'=> get_locale(),
            ),
            array(
                '@type'       => 'Dentist',
                '@id'         => trailingslashit( home_url() ) . '#organization',
                'name'        => 'Cabinet Dentaire Schmitt',
                'url'         => home_url( '/' ),
                'logo'        => $logo_url,
                'telephone'   => '+41 22 361 78 44',
                'email'       => 'drschmitt.nyon@bluewin.ch',
                'address'     => array(
                    '@type'           => 'PostalAddress',
                    'streetAddress'   => 'Avenue Reverdil 2',
                    'postalCode'      => '1260',
                    'addressLocality' => 'Nyon',
                    'addressCountry'  => 'CH',
                ),
                'areaServed'   => array( 'Nyon', 'Bassins', 'Vaud' ),
                'department'   => array(
                    array(
                        '@type'     => 'Dentist',
                        'name'      => 'Cabinet Dentaire Schmitt - Nyon',
                        'telephone' => '+41 22 361 78 44',
                        'address'   => array(
                            '@type'           => 'PostalAddress',
                            'streetAddress'   => 'Avenue Reverdil 2',
                            'postalCode'      => '1260',
                            'addressLocality' => 'Nyon',
                            'addressCountry'  => 'CH',
                        ),
                    ),
                    array(
                        '@type'     => 'Dentist',
                        'name'      => 'Cabinet Dentaire Schmitt - Bassins',
                        'telephone' => '+41 22 365 26 26',
                        'address'   => array(
                            '@type'           => 'PostalAddress',
                            'streetAddress'   => 'Ruelle de la Repentance 4',
                            'postalCode'      => '1269',
                            'addressLocality' => 'Bassins',
                            'addressCountry'  => 'CH',
                        ),
                    ),
                ),
                'mainEntityOfPage' => trailingslashit( home_url() ),
            ),
        ),
    );

    echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
}
add_action( 'wp_head', 'dentiste_schmitt_output_business_schema', 20 );

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
            font-family: 'DM Sans', sans-serif;
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

/**
 * Add Soins Modal to Footer
 */
function dentiste_schmitt_soins_modal() {
    // Check if we are on the Soins page (template or slug)
    if ( is_page_template( 'page-soins.php' ) || is_page( 'soins' ) || is_page( 'nos-soins' ) ) {
        ?>
        <!-- Modal Styles (Inline to ensure loading) -->
        <style>
            #soinModal {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.7);
                z-index: 9999999; /* Max z-index to be on top of everything */
                justify-content: center;
                align-items: center;
                opacity: 0;
                transition: opacity 0.3s ease;
                backdrop-filter: blur(5px);
            }
            #soinModal.active {
                display: flex !important;
                opacity: 1 !important;
                visibility: visible !important;
            }
            #soinModal .modal-content {
                background-color: var(--color-bg-primary);
                padding: 40px;
                border-radius: 16px;
                max-width: 600px;
                width: 90%;
                position: relative;
                box-shadow: 0 25px 50px -12px rgba(44, 38, 35, 0.15);
                transform: scale(0.95);
                transition: transform 0.3s ease;
                text-align: center;
                border: 1px solid var(--color-border);
                border-top: 5px solid var(--color-primary);
            }
            #soinModal.active .modal-content {
                transform: scale(1);
            }
            #soinModal .modal-close {
                position: absolute;
                top: 15px;
                right: 20px;
                font-size: 2rem;
                color: var(--color-text-light);
                cursor: pointer;
                line-height: 1;
                transition: color 0.2s;
                background: none;
                border: none;
                padding: 0;
            }
            #soinModal .modal-close:hover {
                color: var(--color-primary);
            }
            #soinModal .modal-title {
                color: var(--color-primary);
                margin-top: 10px;
                margin-bottom: 20px;
                font-size: 1.8rem;
                font-weight: 700;
                font-family: var(--font-heading);
            }
            #soinModal .modal-body {
                color: var(--color-text);
                font-size: 1.1rem;
                line-height: 1.6;
                font-family: var(--font-body);
            }
        </style>

        <!-- Modal Structure -->
        <div id="soinModal" class="modal-overlay">
            <div class="modal-content">
                <button class="modal-close" aria-label="Fermer">&times;</button>
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
                            document.body.style.overflow = 'hidden'; // Lock scroll
                        }
                    }
                });
            }

            function closeModal() {
                modal.classList.remove('active');
                document.body.style.overflow = ''; // Unlock scroll
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

/**
 * SEO Optimization: Meta Tags and Open Graph
 *
 * Adds meta description, Open Graph tags, and Twitter Card tags to the head.
 */
function dentiste_schmitt_seo_meta() {
    global $post;

    // 1. Meta Description
    $description = '';
    if ( is_front_page() || is_home() ) {
        // Optimized for "Canton de Vaud", "Nyon", "Bassins", "La Côte"
        $description = 'Bienvenue aux Cabinets Dentaire Schmitt à Nyon et Bassins (Canton de Vaud). Soins dentaires complets sur La Côte : urgences, implants, orthodontie, pédiatrie.';
    } elseif ( is_single() || is_page() ) {
        if ( has_excerpt() ) {
            $description = get_the_excerpt();
        } else {
            $description = wp_trim_words( $post->post_content, 25 );
        }
    } elseif ( is_category() ) {
        $description = category_description();
    }

    // Clean up description
    $description = strip_tags( $description );
    $description = trim( $description );
    if ( empty( $description ) ) {
        $description = get_bloginfo( 'description' );
    }

    echo '<meta name="description" content="' . esc_attr( $description ) . '" />' . "\n";
    // Optional: Keywords meta tag (though less critical for Google, can help other engines)
    echo '<meta name="keywords" content="Dentiste Nyon, Dentiste Bassins, Urgence dentaire Vaud, Implantologie La Côte, Orthodontiste Nyon, Hygiéniste dentaire Vaud" />' . "\n";

    // 1.1 Geo Meta Tags (Crucial for Local SEO in Vaud)
    echo '<meta name="geo.region" content="CH-VD" />' . "\n";
    echo '<meta name="geo.placename" content="Nyon" />' . "\n"; // Default to primary location
    echo '<meta name="geo.position" content="46.3833;6.2348" />' . "\n";
    echo '<meta name="ICBM" content="46.3833, 6.2348" />' . "\n";

    // 1.2 Robots (Ensure indexing)
    echo '<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />' . "\n";

    // 2. Open Graph Tags
    $og_title = get_the_title();
    if ( is_front_page() || is_home() ) {
        $og_title = get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description' );
    }

    $og_url = get_permalink();
    if ( is_front_page() || is_home() ) {
        $og_url = home_url( '/' );
    }

    $og_type = is_single() ? 'article' : 'website';

    // Image
    $og_image = '';
    if ( has_post_thumbnail() ) {
        $og_image = get_the_post_thumbnail_url( null, 'large' );
    } else {
        // Fallback or generic logo
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        if ( $custom_logo_id ) {
            $image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
            $og_image = $image[0];
        }
    }

    echo '<meta property="og:title" content="' . esc_attr( $og_title ) . '" />' . "\n";
    echo '<meta property="og:description" content="' . esc_attr( $description ) . '" />' . "\n";
    echo '<meta property="og:type" content="' . esc_attr( $og_type ) . '" />' . "\n";
    echo '<meta property="og:url" content="' . esc_attr( $og_url ) . '" />' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr( get_bloginfo( 'name' ) ) . '" />' . "\n";
    if ( $og_image ) {
        echo '<meta property="og:image" content="' . esc_attr( $og_image ) . '" />' . "\n";
    }
    echo '<meta property="og:locale" content="' . esc_attr( get_locale() ) . '" />' . "\n";

    // 3. Twitter Card
    echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr( $og_title ) . '" />' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr( $description ) . '" />' . "\n";
    if ( $og_image ) {
        echo '<meta name="twitter:image" content="' . esc_attr( $og_image ) . '" />' . "\n";
    }
}
add_action( 'wp_head', 'dentiste_schmitt_seo_meta', 5 );

/**
 * SEO Optimization: Schema.org JSON-LD
 *
 * Adds structured data for Dentist/LocalBusiness.
 */
function dentiste_schmitt_schema_markup() {
    // Only output on front page or contact/cabinets page to avoid duplication,
    // or output primarily on front page.
    if ( ! is_front_page() && ! is_page_template('page-cabinets.php') ) {
        return;
    }

    $schemas = array();

    // Cabinet Nyon
    $schemas[] = array(
        '@context'      => 'https://schema.org',
        '@type'         => 'Dentist',
        'name'          => 'Cabinet Dentaire Schmitt - Nyon',
        'image'         => get_home_url() . '/wp-content/themes/dentistes-schmitt/screenshot.png', // Fallback or logo
        'url'           => home_url( '/' ),
        'telephone'     => '+41223617844',
        'email'         => 'drschmitt.nyon@bluewin.ch',
        'address'       => array(
            '@type'           => 'PostalAddress',
            'streetAddress'   => 'Avenue Reverdil 2',
            'addressLocality' => 'Nyon',
            'postalCode'      => '1260',
            'addressCountry'  => 'CH'
        ),
        'geo'           => array(
            '@type'     => 'GeoCoordinates',
            'latitude'  => 46.3833, // Approx Nyon
            'longitude' => 6.2348
        ),
        'areaServed'    => array(
            'Nyon',
            'Prangins',
            'Gland',
            'Crans-près-Céligny',
            'Canton de Vaud',
            'La Côte'
        ),
        'openingHoursSpecification' => array(
            array(
                '@type'     => 'OpeningHoursSpecification',
                'dayOfWeek' => array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'),
                'opens'     => '08:00',
                'closes'    => '18:00'
            )
        ),
        'priceRange' => '$$',
        'paymentAccepted' => 'Cash, Credit Card, Invoice',
        'hasMap' => 'https://www.google.com/maps?q=Avenue+Reverdil+2,+1260+Nyon',
        'medicalSpecialty' => array(
            'General Dentistry',
            'Oral Surgery',
            'Orthodontics',
            'Pediatric Dentistry'
        )
    );

    // Cabinet Bassins
    $schemas[] = array(
        '@context'      => 'https://schema.org',
        '@type'         => 'Dentist',
        'name'          => 'Cabinet Dentaire Schmitt - Bassins',
        'url'           => home_url( '/' ),
        'telephone'     => '+41223652626',
        'email'         => 'cabinetdentairebassins@gmail.com',
        'address'       => array(
            '@type'           => 'PostalAddress',
            'streetAddress'   => 'Ruelle de la Repentance 4',
            'addressLocality' => 'Bassins',
            'postalCode'      => '1269',
            'addressCountry'  => 'CH'
        ),
        'geo'           => array(
            '@type'     => 'GeoCoordinates',
            'latitude'  => 46.4667, // Approx Bassins
            'longitude' => 6.2333
        ),
        'areaServed'    => array(
            'Bassins',
            'Le Vaud',
            'Begnins',
            'Arzier-Le Muids',
            'Saint-Cergue',
            'Genolier',
            'Canton de Vaud'
        ),
        'openingHoursSpecification' => array(
            array(
                '@type'     => 'OpeningHoursSpecification',
                'dayOfWeek' => array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'),
                'opens'     => '08:00',
                'closes'    => '18:00'
            )
        ),
        'priceRange' => '$$',
        'paymentAccepted' => 'Cash, Credit Card, Invoice',
        'hasMap' => 'https://www.google.com/maps?q=Ruelle+de+la+Repentance+4,+1269+Bassins',
        'medicalSpecialty' => array(
            'General Dentistry',
            'Oral Surgery',
            'Orthodontics',
            'Pediatric Dentistry'
        )
    );

    foreach ( $schemas as $schema ) {
        echo '<script type="application/ld+json">' . json_encode( $schema ) . '</script>' . "\n";
    }
}
add_action( 'wp_head', 'dentiste_schmitt_schema_markup' );

/**
 * Performance Optimization for SEO
 * Preconnect to external domains and key resources.
 */
function dentiste_schmitt_performance_hints() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
    echo '<link rel="preconnect" href="https://booking.denteo.com">' . "\n"; // Improve loading speed of booking widget page
}
add_action( 'wp_head', 'dentiste_schmitt_performance_hints', 1 );

/**
 * Add lang attribute to html tag (Critical for SEO)
 * Ensure it is set to fr-CH or fr-FR
 */
add_filter('language_attributes', function($output) {
    // If language is default, ensure region is CH for better local targeting
    if ( strpos($output, 'fr-FR') !== false ) {
        $output = str_replace('fr-FR', 'fr-CH', $output);
    }
    return $output;
});
