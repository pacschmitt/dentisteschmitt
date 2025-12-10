<?php
/**
 * Theme Functions
 * 
 * @package Dentiste_Schmitt
 */

// Theme setup
function dentiste_schmitt_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-logo');
    add_theme_support('responsive-embeds');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'dentiste-schmitt'),
        'footer' => __('Menu Footer', 'dentiste-schmitt'),
    ));
    
    // Add image sizes
    add_image_size('service-thumbnail', 400, 300, true);
    add_image_size('hero-image', 1920, 600, true);
}
add_action('after_setup_theme', 'dentiste_schmitt_setup');

// Enqueue styles and scripts
function dentiste_schmitt_scripts() {
    // Main stylesheet
    wp_enqueue_style('dentiste-schmitt-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Responsive styles
    wp_enqueue_style('dentiste-schmitt-responsive', get_template_directory_uri() . '/responsive.css', array('dentiste-schmitt-style'), '1.0.0');
    
    // Add Font Awesome for icons (loaded in header for immediate availability)
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    
    // Main JavaScript (loaded in footer)
    wp_enqueue_script('dentiste-schmitt-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'dentiste_schmitt_scripts');

// Register widget areas
function dentiste_schmitt_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer 1', 'dentiste-schmitt'),
        'id'            => 'footer-1',
        'description'   => __('Première zone de widgets du footer', 'dentiste-schmitt'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer 2', 'dentiste-schmitt'),
        'id'            => 'footer-2',
        'description'   => __('Deuxième zone de widgets du footer', 'dentiste-schmitt'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer 3', 'dentiste-schmitt'),
        'id'            => 'footer-3',
        'description'   => __('Troisième zone de widgets du footer', 'dentiste-schmitt'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'dentiste_schmitt_widgets_init');

// Custom excerpt length
function dentiste_schmitt_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'dentiste_schmitt_excerpt_length');

// Custom excerpt more
function dentiste_schmitt_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'dentiste_schmitt_excerpt_more');

// Add custom post type for services
function dentiste_schmitt_register_services_post_type() {
    $labels = array(
        'name'               => __('Services', 'dentiste-schmitt'),
        'singular_name'      => __('Service', 'dentiste-schmitt'),
        'add_new'            => __('Ajouter un service', 'dentiste-schmitt'),
        'add_new_item'       => __('Ajouter un nouveau service', 'dentiste-schmitt'),
        'edit_item'          => __('Modifier le service', 'dentiste-schmitt'),
        'new_item'           => __('Nouveau service', 'dentiste-schmitt'),
        'view_item'          => __('Voir le service', 'dentiste-schmitt'),
        'search_items'       => __('Rechercher des services', 'dentiste-schmitt'),
        'not_found'          => __('Aucun service trouvé', 'dentiste-schmitt'),
        'not_found_in_trash' => __('Aucun service dans la corbeille', 'dentiste-schmitt'),
    );
    
    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array('slug' => 'services'),
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'           => 'dashicons-medical',
        'show_in_rest'        => true,
    );
    
    register_post_type('service', $args);
}
add_action('init', 'dentiste_schmitt_register_services_post_type');

// Add custom post type for team members
function dentiste_schmitt_register_team_post_type() {
    $labels = array(
        'name'               => __('Équipe', 'dentiste-schmitt'),
        'singular_name'      => __('Membre', 'dentiste-schmitt'),
        'add_new'            => __('Ajouter un membre', 'dentiste-schmitt'),
        'add_new_item'       => __('Ajouter un nouveau membre', 'dentiste-schmitt'),
        'edit_item'          => __('Modifier le membre', 'dentiste-schmitt'),
        'new_item'           => __('Nouveau membre', 'dentiste-schmitt'),
        'view_item'          => __('Voir le membre', 'dentiste-schmitt'),
        'search_items'       => __('Rechercher des membres', 'dentiste-schmitt'),
        'not_found'          => __('Aucun membre trouvé', 'dentiste-schmitt'),
        'not_found_in_trash' => __('Aucun membre dans la corbeille', 'dentiste-schmitt'),
    );
    
    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array('slug' => 'equipe'),
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array('title', 'editor', 'thumbnail'),
        'menu_icon'           => 'dashicons-groups',
        'show_in_rest'        => true,
    );
    
    register_post_type('team_member', $args);
}
add_action('init', 'dentiste_schmitt_register_team_post_type');
