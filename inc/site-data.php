<?php
/** Shared public information and links resolved from published WordPress pages. */

function dentiste_schmitt_page_url( $template, $fallback = '/' ) {
    static $urls = array();
    $language = function_exists( 'pll_current_language' ) ? pll_current_language() : '';
    $key = $template . ':' . $language . ':' . $fallback;
    if ( ! isset( $urls[ $key ] ) ) {
        $pages = get_posts( array(
            'post_type' => 'page', 'post_status' => 'publish', 'numberposts' => 1,
            'meta_key' => '_wp_page_template', 'meta_value' => $template,
            'fields' => 'ids', 'suppress_filters' => false, 'lang' => $language,
        ) );
        $id = $pages ? $pages[0] : 0;
        if ( $id && function_exists( 'pll_get_post' ) ) {
            $id = pll_get_post( $id, $language ) ?: $id;
        }
        $urls[ $key ] = $id ? get_permalink( $id ) : home_url( $fallback );
    }
    return $urls[ $key ];
}

function dentiste_schmitt_locations() {
    return array(
        'nyon' => array(
            'city' => 'Nyon', 'street' => 'Avenue Reverdil 2', 'postcode' => '1260',
            'telephone' => '+41223617844', 'email' => 'drschmitt.nyon@bluewin.ch',
            'days' => array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday' ),
            'opens' => '08:00', 'closes' => '18:00',
        ),
        'bassins' => array(
            'city' => 'Bassins', 'street' => 'Ruelle de la Repentance 4', 'postcode' => '1269',
            'telephone' => '+41223652626', 'email' => 'cabinetdentairebassins@gmail.com',
            'days' => array( 'Tuesday', 'Wednesday', 'Thursday' ),
            'opens' => '08:30', 'closes' => '18:00',
        ),
    );
}

/** New interface strings have an English fallback even before catalogue updates. */
function dentiste_schmitt_text( $french, $english ) {
    $language = function_exists( 'pll_current_language' ) ? pll_current_language( 'slug' ) : substr( get_locale(), 0, 2 );
    return 'en' === $language ? $english : $french;
}

/** Use WordPress image sizes and srcset when a Customizer image is in the media library. */
function dentiste_schmitt_image( $url, $alt, $attributes = array() ) {
    $attributes = array_merge( array( 'alt' => $alt, 'loading' => 'lazy', 'decoding' => 'async' ), $attributes );
    $id = attachment_url_to_postid( $url );
    if ( $id ) {
        return wp_get_attachment_image( $id, 'large', false, $attributes );
    }
    $html = '<img src="' . esc_url( $url ) . '"';
    foreach ( $attributes as $name => $value ) {
        $html .= ' ' . esc_attr( $name ) . '="' . esc_attr( $value ) . '"';
    }
    return $html . '>';
}

/** Keep the existing photograph while serving an optimized copy of the current hero. */
function dentiste_schmitt_hero_image() {
    $url = get_theme_mod( 'dentiste_schmitt_hero_background' );
    if ( $url && 'Nyon-chateau-scaled-e1777407881456.png' === basename( wp_parse_url( $url, PHP_URL_PATH ) ) ) {
        return get_template_directory_uri() . '/images/nyon-chateau.webp';
    }
    return $url;
}
