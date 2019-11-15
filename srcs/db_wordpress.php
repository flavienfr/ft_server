<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'pma' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'password' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(v*l%U]6:2&Eno`E@Q*U+AMAB>Q6N7J,u*B|&_j&^kh9z.!??rmk}aHRr&jI4*)@' );
define( 'SECURE_AUTH_KEY',  'ZaC8|&~(4%ArGg&SX3>3wz1KnTX]vxHvZl#PdJ%hOhNw>^N1hCB>QT Gm!E7>%6&' );
define( 'LOGGED_IN_KEY',    'u?Z,!)<{VK{vIF7~6*Fak[Rm9eGT5,]}ofkvB7r-aR~vHCuG~HJaVEjW9bu~?~(7' );
define( 'NONCE_KEY',        '#CcLvy1r],*9_m:o,aLth|~+t/y#^LrO^gz97$9K$y,@popV`nvBSKgK#g8a8HO)' );
define( 'AUTH_SALT',        'bKDFm%UCZCg$Qm!C^BE+.t~U;DRw3+m4!z-G$?4(uij T8/p?oI5hlS<G-}*1U>2' );
define( 'SECURE_AUTH_SALT', '7igHP7CEc7K>0}8q?Y*G5*r.pX5@[q)DZ4+|HFFqIiu+n9v2pWtHd[4tV}G~IIb,' );
define( 'LOGGED_IN_SALT',   '(<uU!p+nk_nyH0X~d)]<*8Z.%I,N|fbBvI<~zg<o$+rG3V*_$K(gvo+Ox3ZIrC4o' );
define( 'NONCE_SALT',       'hfA)OY5eN..==Mvh0%I/rZ#rYjb(3@Ta)J?3?^#sxA:$IZ;{;4]Tp(>)a;lLQLT9' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

