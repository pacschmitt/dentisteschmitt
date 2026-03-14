<?php
/**
 * Dentiste Schmitt Theme Customizer
 *
 * @package Dentiste_Schmitt
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function dentiste_schmitt_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

    // ==============================================
    // Section: Page d'accueil
    // ==============================================
    $wp_customize->add_section( 'dentiste_schmitt_front_page', array(
        'title'       => __( 'Page d\'accueil', 'dentiste-schmitt' ),
        'priority'    => 30,
        'description' => __( 'Configurer les images de la page d\'accueil', 'dentiste-schmitt' ),
    ) );

    // 0. Image: Main Hero Background
    $wp_customize->add_setting( 'dentiste_schmitt_hero_background', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'dentiste_schmitt_hero_background', array(
        'label'       => __( 'Image Grande Hero (Haut de page)', 'dentiste-schmitt' ),
        'description' => __( 'Image de fond pour la section "Bienvenue"', 'dentiste-schmitt' ),
        'section'     => 'dentiste_schmitt_front_page',
        'settings'    => 'dentiste_schmitt_hero_background',
    ) ) );

    // 1. Image: "Devenir un nouveau patient" (Patient Image)
    $wp_customize->add_setting( 'dentiste_schmitt_patient_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'dentiste_schmitt_patient_image', array(
        'label'       => __( 'Image "Nouveau Patient"', 'dentiste-schmitt' ),
        'description' => __( 'Section "Devenir un nouveau patient"', 'dentiste-schmitt' ),
        'section'     => 'dentiste_schmitt_front_page',
        'settings'    => 'dentiste_schmitt_patient_image',
    ) ) );

    // 2. Image: "Dr Schmitt" (Doctor Image)
    $wp_customize->add_setting( 'dentiste_schmitt_doctor_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'dentiste_schmitt_doctor_image', array(
        'label'       => __( 'Photo Dr Schmitt', 'dentiste-schmitt' ),
        'description' => __( 'Section "Dr. L. Schmitt"', 'dentiste-schmitt' ),
        'section'     => 'dentiste_schmitt_front_page',
        'settings'    => 'dentiste_schmitt_doctor_image',
    ) ) );

    // ==============================================
    // Section: Page Cabinets (Carousel)
    // ==============================================
    $wp_customize->add_section( 'dentiste_schmitt_cabinets', array(
        'title'       => __( 'Page Cabinets', 'dentiste-schmitt' ),
        'priority'    => 31,
        'description' => __( 'Configurer les photos des carrousels (Nyon & Bassins).', 'dentiste-schmitt' ),
    ) );

    // Loop for Cabinet Images (Nyon & Bassins, 3 photos each)
    $cabinets = array(
        'nyon'    => 'Cabinet Nyon',
        'bassins' => 'Cabinet Bassins',
    );

    foreach ( $cabinets as $slug => $label ) {
        for ( $i = 1; $i <= 3; $i++ ) {
            $setting_id = "dentiste_schmitt_cabinet_{$slug}_{$i}";

            $wp_customize->add_setting( $setting_id, array(
                'default'           => '',
                'sanitize_callback' => 'esc_url_raw',
                'transport'         => 'refresh',
            ) );

            $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $setting_id, array(
                'label'       => sprintf( __( '%s - Photo %d', 'dentiste-schmitt' ), $label, $i ),
                'section'     => 'dentiste_schmitt_cabinets',
                'settings'    => $setting_id,
            ) ) );
        }
    }

    // ==============================================
    // Section: Page Équipe
    // ==============================================
    $wp_customize->add_section( 'dentiste_schmitt_team', array(
        'title'       => __( 'Page Équipe', 'dentiste-schmitt' ),
        'priority'    => 32,
        'description' => __( 'Configurer les photos des membres de l\'équipe.', 'dentiste-schmitt' ),
    ) );

    // Team Members
    $team_members = array(
        'sacha'     => 'Dr Sacha-Léo Schmitt',
        'laurent'   => 'Dr Laurent Schmitt',
        'aline'     => 'Dr Aline Koring',
        'saskia'    => 'Saskia Naz Bjuhr',
        'neda'      => 'Neda Dolatshahi',
        'celine'    => 'Céline Larouble',
        'perrine'   => 'Perrine Vinsonneau',
        'fleuriane' => 'Fleuriane Laurent',
        'alexandra' => 'Alexandra Alves Poget',
    );

    foreach ( $team_members as $slug => $name ) {
        $setting_id = "dentiste_schmitt_team_{$slug}";

        $wp_customize->add_setting( $setting_id, array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        ) );

        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $setting_id, array(
            'label'       => $name,
            'section'     => 'dentiste_schmitt_team',
            'settings'    => $setting_id,
        ) ) );
    }
}
add_action( 'customize_register', 'dentiste_schmitt_customize_register' );
