<?php
/** SEO defaults for template content, with a single metadata owner. */
require_once get_template_directory() . '/inc/site-data.php';

function dentiste_schmitt_has_seo_plugin() {
    return defined( 'AIOSEO_VERSION' ) || defined( 'WPSEO_VERSION' ) || defined( 'RANK_MATH_VERSION' )
        || defined( 'SEOPRESS_VERSION' ) || defined( 'THE_SEO_FRAMEWORK_VERSION' );
}

function dentiste_schmitt_seo_profile() {
    if ( ! is_front_page() && ! is_page() ) {
        return array();
    }
    $template = is_front_page() ? 'front-page.php' : get_page_template_slug( get_queried_object_id() );
    // WordPress also selects page-{slug}.php without an explicit template assignment.
    if ( ! $template || 'default' === $template ) {
        $slug = get_post_field( 'post_name', get_queried_object_id() );
        $aliases = array(
            'dentiste-nyon' => 'local-nyon', 'dentiste-bassins' => 'local-bassins',
            'cabinets' => 'page-cabinets.php', 'page-equipe' => 'page-equipe.php',
            'page-infos' => 'page-infos.php', 'page-soins' => 'page-soins.php',
            'soins' => 'page-soins.php', 'tarifs' => 'page-tarifs.php',
            'mentions-legales' => 'page-mentions-legales.php',
            'protection-des-donnees' => 'page-protection-des-donnees.php',
        );
        $template = isset( $aliases[ $slug ] ) ? $aliases[ $slug ] : '';
    }
    $english = function_exists( 'pll_current_language' ) ? 'en' === pll_current_language( 'slug' ) : 0 === strpos( get_locale(), 'en' );
    $profiles = $english ? array(
        'front-page.php' => array( 'Dentist in Nyon & Bassins | Schmitt Dental Practices', 'Schmitt dental practices in Nyon and Bassins, Vaud. Dental care for adults and children, dental hygiene and appointments online or by phone.' ),
        'page-cabinets.php' => array( 'Dental practices in Nyon & Bassins | Schmitt', 'Find our dental practices in Nyon and Bassins: addresses, access, parking and contact details. Book your appointment online or call the practice.' ),
        'page-soins.php' => array( 'Dental care in Nyon & Bassins | Schmitt', 'Explore our dental care in Nyon and Bassins: prevention, dental emergencies, orthodontics, oral surgery, aesthetic dentistry and gum care.' ),
        'page-equipe.php' => array( 'Our dentists and dental hygienists | Schmitt', 'Meet the dentists, dental hygienists and assistants at Schmitt dental practices in Nyon and Bassins, in the canton of Vaud.' ),
        'page-infos.php' => array( 'Contact, opening hours & access | Schmitt dentists', 'Contact Schmitt dental practices in Nyon and Bassins. Find phone numbers, opening hours, access information and answers to common questions.' ),
        'page-tarifs.php' => array( 'Dental fees in Nyon & Bassins | Schmitt', 'Information about dental fees, estimates and payment options at Schmitt dental practices in Nyon and Bassins.' ),
        'page-mentions-legales.php' => array( 'Legal notice | Schmitt Dental Practices', 'Publisher, contact and hosting details for the Schmitt dental practices website in Nyon and Bassins, Switzerland.' ),
        'page-protection-des-donnees.php' => array( 'Privacy policy | Schmitt Dental Practices', 'Information about the processing of personal data and privacy at Schmitt dental practices in Nyon and Bassins.' ),
    ) : array(
        'front-page.php' => array( 'Dentiste à Nyon et Bassins | Cabinets Schmitt', 'Cabinets dentaires Schmitt à Nyon et Bassins, dans le canton de Vaud. Soins adultes et enfants, hygiène dentaire. Rendez-vous en ligne ou par téléphone.' ),
        'page-cabinets.php' => array( 'Cabinets dentaires à Nyon et Bassins | Schmitt', 'Retrouvez nos cabinets dentaires à Nyon et Bassins : adresses, accès, parkings et contacts. Prenez rendez-vous en ligne ou appelez le cabinet.' ),
        'page-soins.php' => array( 'Soins dentaires à Nyon et Bassins | Schmitt', 'Découvrez nos soins dentaires à Nyon et Bassins : prévention, urgences, orthodontie, chirurgie orale, esthétique et soins des gencives.' ),
        'page-equipe.php' => array( 'Dentistes et hygiénistes à Nyon et Bassins | Schmitt', 'Découvrez les dentistes, hygiénistes et assistantes des cabinets dentaires Schmitt à Nyon et Bassins, dans le canton de Vaud.' ),
        'page-infos.php' => array( 'Contact, horaires et accès | Dentistes Schmitt', 'Contactez les cabinets dentaires Schmitt à Nyon et Bassins : téléphones, horaires, accès et réponses à vos questions. Rendez-vous en ligne ou par téléphone.' ),
        'page-tarifs.php' => array( 'Tarifs dentaires à Nyon et Bassins | Schmitt', 'Informations sur les tarifs dentaires, les devis et les possibilités de paiement aux cabinets Schmitt à Nyon et Bassins.' ),
        'page-mentions-legales.php' => array( 'Mentions légales | Cabinets dentaires Schmitt', 'Éditeur, coordonnées et hébergement du site des cabinets dentaires Schmitt à Nyon et Bassins, en Suisse.' ),
        'page-protection-des-donnees.php' => array( 'Protection des données | Cabinets dentaires Schmitt', 'Informations sur le traitement de vos données personnelles et la confidentialité aux cabinets dentaires Schmitt à Nyon et Bassins.' ),
    );
    $profiles['local-nyon'] = array( 'Dentiste à Nyon | Cabinet Dentaire Schmitt', 'Cabinet dentaire Schmitt à Nyon, avenue Reverdil 2, près de la gare et de La Combe. Soins adultes et enfants. Rendez-vous au 022 361 78 44 ou en ligne.' );
    $profiles['local-bassins'] = array( 'Dentiste à Bassins | Cabinet Dentaire Schmitt', 'Cabinet dentaire Schmitt à Bassins, ruelle de la Repentance 4. Accès de plain-pied et parking devant le cabinet. Rendez-vous au 022 365 26 26 ou en ligne.' );
    return apply_filters( 'dentiste_schmitt_seo_profile', isset( $profiles[ $template ] ) ? $profiles[ $template ] : array(), $template );
}

function dentiste_schmitt_seo_title( $title ) {
    $profile = dentiste_schmitt_seo_profile();
    return $profile ? $profile[0] : $title;
}
function dentiste_schmitt_seo_description( $description = '' ) {
    $profile = dentiste_schmitt_seo_profile();
    if ( $profile ) {
        return $profile[1];
    }
    if ( ! $description && is_singular() ) {
        $post = get_post( get_queried_object_id() );
        $description = $post ? ( $post->post_excerpt ?: $post->post_content ) : '';
    }
    return wp_trim_words( wp_strip_all_tags( strip_shortcodes( $description ) ), 30, '…' );
}
/** Keep per-page values explicitly entered in AIOSEO editable in WordPress. */
function dentiste_schmitt_aioseo_meta( $value, $field ) {
    if ( is_singular() && function_exists( 'aioseo' ) ) {
        $meta = aioseo()->meta->metaData->getMetaData( get_queried_object_id() );
        if ( $meta && ! empty( $meta->{$field} ) && '' !== trim( $value ) ) {
            return $value;
        }
    }
    return 'title' === $field ? dentiste_schmitt_seo_title( $value ) : dentiste_schmitt_seo_description( $value );
}
add_filter( 'aioseo_title', function( $title ) {
    return dentiste_schmitt_aioseo_meta( $title, 'title' );
} );
add_filter( 'aioseo_description', function( $description ) {
    return dentiste_schmitt_aioseo_meta( $description, 'description' );
} );

function dentiste_schmitt_fallback_title( $title ) {
    return dentiste_schmitt_has_seo_plugin() ? $title : dentiste_schmitt_seo_title( $title );
}
add_filter( 'pre_get_document_title', 'dentiste_schmitt_fallback_title', 20 );

function dentiste_schmitt_output_seo_meta() {
    if ( dentiste_schmitt_has_seo_plugin() || is_404() || is_search() || is_feed() || post_password_required() ) {
        return;
    }
    $description = dentiste_schmitt_seo_description();
    if ( $description ) {
        echo '<meta name="description" content="' . esc_attr( $description ) . '">' . "\n";
    }
    $url = is_singular() ? wp_get_canonical_url( get_queried_object_id() ) : ( is_front_page() ? home_url( '/' ) : '' );
    // WordPress core already emits the canonical for singular pages.
    if ( $url && ! is_singular() ) {
        echo '<link rel="canonical" href="' . esc_url( $url ) . '">' . "\n";
    }
    $meta = array(
        'og:locale' => get_locale(), 'og:type' => is_singular( 'post' ) ? 'article' : 'website',
        'og:title' => wp_get_document_title(), 'og:description' => $description,
        'og:site_name' => get_bloginfo( 'name' ),
    );
    if ( $url ) {
        $meta['og:url'] = $url;
    }
    $image = get_the_post_thumbnail_url( get_queried_object_id(), 'large' );
    if ( ! $image ) {
        $image = wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' );
    }
    if ( $image ) {
        $meta['og:image'] = $image;
    }
    foreach ( $meta as $property => $value ) {
        if ( $value ) {
            echo '<meta property="' . esc_attr( $property ) . '" content="' . esc_attr( $value ) . '">' . "\n";
        }
    }
    echo '<meta name="twitter:card" content="summary">' . "\n";
    // Polylang owns hreflang links; emitting another set causes duplicates.
}
add_action( 'wp_head', 'dentiste_schmitt_output_seo_meta', 5 );

function dentiste_schmitt_robots_directives( $robots ) {
    if ( is_search() || is_404() ) {
        $robots['noindex'] = true;
        unset( $robots['index'] );
    }
    return $robots;
}
add_filter( 'wp_robots', 'dentiste_schmitt_robots_directives' );

function dentiste_schmitt_business_graph() {
    if ( ! is_front_page() && ! is_page_template( 'page-cabinets.php' ) && ! is_page( array( 'cabinets', 'dentiste-nyon', 'dentiste-bassins' ) ) ) {
        return array();
    }
    $graph = array();
    foreach ( dentiste_schmitt_locations() as $slug => $location ) {
        if ( is_page( array( 'dentiste-nyon', 'dentiste-bassins' ) ) && ! is_page( 'dentiste-' . $slug ) ) {
            continue;
        }
        $node = array(
            '@type' => 'Dentist', '@id' => trailingslashit( get_option( 'home' ) ) . '#cabinet-' . $slug,
            'name' => 'Cabinet Dentaire Schmitt - ' . $location['city'],
            'url' => dentiste_schmitt_location_url( $slug ),
            'telephone' => $location['telephone'], 'email' => $location['email'],
            'address' => array(
                '@type' => 'PostalAddress', 'streetAddress' => $location['street'],
                'postalCode' => $location['postcode'], 'addressLocality' => $location['city'],
                'addressRegion' => 'Vaud', 'addressCountry' => 'CH',
            ),
            'openingHoursSpecification' => array( array(
                '@type' => 'OpeningHoursSpecification', 'dayOfWeek' => $location['days'],
                'opens' => $location['opens'], 'closes' => $location['closes'],
            ) ),
            'hasMap' => 'https://www.google.com/maps?q=' . rawurlencode( $location['street'] . ', ' . $location['postcode'] . ' ' . $location['city'] ),
        );
        $image = get_theme_mod( 'dentiste_schmitt_cabinet_' . $slug . '_1' );
        if ( $image ) {
            $node['image'] = $image;
        }
        $graph[] = $node;
    }
    return $graph;
}

// AIOSEO retains WebSite, Organization, WebPage and BreadcrumbList ownership.
function dentiste_schmitt_aioseo_schema( $graphs ) {
    return array_merge( $graphs, dentiste_schmitt_business_graph() );
}
add_filter( 'aioseo_schema_output', 'dentiste_schmitt_aioseo_schema' );

function dentiste_schmitt_output_business_schema() {
    if ( dentiste_schmitt_has_seo_plugin() ) {
        return;
    }
    $graph = dentiste_schmitt_business_graph();
    if ( $graph ) {
        echo '<script type="application/ld+json">' . wp_json_encode( array( '@context' => 'https://schema.org', '@graph' => $graph ), JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
    }
}
add_action( 'wp_head', 'dentiste_schmitt_output_business_schema', 20 );

function dentiste_schmitt_preload_hero( $resources ) {
    if ( is_front_page() ) {
        $image = dentiste_schmitt_hero_image();
        if ( $image ) {
            $resources[] = array( 'href' => $image, 'as' => 'image', 'fetchpriority' => 'high' );
        }
    }
    return $resources;
}
add_filter( 'wp_preload_resources', 'dentiste_schmitt_preload_hero' );

/** Recover the two old internal URLs instead of leaving bookmarks on a 404. */
function dentiste_schmitt_redirect_legacy_pages() {
    if ( ! is_404() || ! in_array( $_SERVER['REQUEST_METHOD'] ?? 'GET', array( 'GET', 'HEAD' ), true ) ) {
        return;
    }
    global $wp;
    $aliases = array( 'soins' => 'page-soins.php', 'mention-legales' => 'page-mentions-legales.php' );
    $path = trim( $wp->request, '/' );
    if ( isset( $aliases[ $path ] ) ) {
        $target = dentiste_schmitt_page_url( $aliases[ $path ], '/' );
        if ( $target !== home_url( '/' ) ) {
            wp_safe_redirect( $target, 301, 'Dentiste Schmitt' );
            exit;
        }
    }
}
add_action( 'template_redirect', 'dentiste_schmitt_redirect_legacy_pages', 1 );
