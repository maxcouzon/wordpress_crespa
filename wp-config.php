<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress_crespa' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Cfx4e$o_G}U{zC#zdv@2}Df bott4r[+;!EeX5Ad&E3KC)?dl[qu,vQ,Pp|L)K}x' );
define( 'SECURE_AUTH_KEY',  '|u[G*TpbG|<3k4q}<Mdw/Lvi0s1yedHyNQ;,5`C)1W@XZ0=]N8kJ8R<SM{U={)9J' );
define( 'LOGGED_IN_KEY',    'J(u_ {Wh;C(LIN%%lDgduN,qX8P8H_4)~Yl0fj0*0j#LvKH?:VXyX4Y5N2:K~PF6' );
define( 'NONCE_KEY',        'J_FEX#lSiboXg{qVLNq&<SPwa?>u$isRQ-`/lw*#-PO)EQwx;1!Fta nz?)1;*Jm' );
define( 'AUTH_SALT',        'SQEQGqSis37hiWflQbl:1=x:h1]V)7`>Q?HtA54k7L>^a]NHuNTW:w&)gFaJ@H}l' );
define( 'SECURE_AUTH_SALT', 'n8HP/ Z<%s|uUQj0&V5tJ&?1e>bFjy:c63sjU!ngL}S&|y CVM5vP*+,6S4iqH^P' );
define( 'LOGGED_IN_SALT',   'OE[2ugnhsaqqi}[?R?Y(B`iO0=z1]A1:S]1ky?!m}CY?eV4.^VU7BozX-liH*,F(' );
define( 'NONCE_SALT',       '2LbC`+`Y4d@LWcJuy#=u6l:I`0;Oje$@8P{5^5Lm]J[&}L#lUG<BzbC;J<5CG[1u' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'crespawp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
