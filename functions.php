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
