<?php
/**
 * Configuration WordPress Sample
 * 
 * Ce fichier est généré automatiquement par WordPress lors de l'installation.
 * Les informations ci-dessous correspondent à la configuration Docker.
 * 
 * NOTE: Ce fichier est fourni à titre de référence uniquement.
 * WordPress générera automatiquement le vrai wp-config.php lors de l'installation.
 */

// ** Réglages MySQL - Informations de connexion à la base de données ** //
/** Le nom de la base de données */
define('DB_NAME', 'dentisteschmitt');

/** Utilisateur de la base de données */
define('DB_USER', 'wordpress');

/** Mot de passe de la base de données */
define('DB_PASSWORD', 'wordpress');

/** Adresse de l'hébergement MySQL */
define('DB_HOST', 'db:3306');

/** Jeu de caractères à utiliser par la base de données */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données */
define('DB_COLLATE', '');

/**
 * Clés uniques d'authentification et salage.
 * 
 * Rendez-vous sur https://api.wordpress.org/secret-key/1.1/salt/
 * pour générer de nouvelles clés uniques.
 */
define('AUTH_KEY',         'mettez ici une phrase unique');
define('SECURE_AUTH_KEY',  'mettez ici une phrase unique');
define('LOGGED_IN_KEY',    'mettez ici une phrase unique');
define('NONCE_KEY',        'mettez ici une phrase unique');
define('AUTH_SALT',        'mettez ici une phrase unique');
define('SECURE_AUTH_SALT', 'mettez ici une phrase unique');
define('LOGGED_IN_SALT',   'mettez ici une phrase unique');
define('NONCE_SALT',       'mettez ici une phrase unique');

/**
 * Préfixe de base de données pour les tables de WordPress.
 */
$table_prefix = 'wp_';

/**
 * Pour développeurs : le mode débogage de WordPress.
 * 
 * En passant la valeur à "true", on active l'affichage des erreurs.
 * Fortement recommandé pour le développement, à désactiver en production.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
