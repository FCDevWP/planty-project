<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C;A3AT5dkj{!p6`xE}jmBO1u4o0q&fF1F0~5a1VWTQ*@nlnh4iL^ZjKOlvz_@%5!' );
define( 'SECURE_AUTH_KEY',  'N-D*;u/B|1St&h0fns8$D ?W,tg#UPfhsNlL(0i9etSPedg|!_~W2!+[V#qV1(1y' );
define( 'LOGGED_IN_KEY',    '2JUy3D(}[1uVXKN`);Gd2;v_YZ`OQgwCduE3:wmgD&(@qFWOA6Y=~dd/65.qXaMe' );
define( 'NONCE_KEY',        'aW`]`;66fL<pB{0`Y>r$/Vc2E2ctH->oYGM4NL?]6KXGaFp2BW0sj8H4,zztA7WZ' );
define( 'AUTH_SALT',        '~q!,?cW)R*B]a6Ver{)D[jjJPj.(yjqa,VW}?,_+(ljQkpS -Dt).|vu9>F}3JZ]' );
define( 'SECURE_AUTH_SALT', '@_) GFkhciM$@#D*ItX]-j?MwL`QX8{x[$5iPJ*6U-9s:&k/BT b#&<udP5]]Hp#' );
define( 'LOGGED_IN_SALT',   'jmEQ}i`R%-mj<%G#HI8Uyp6,MQwr5z$*$Sx5{FWAM=DIx-{A[1%Q4(]/ q%EjV+w' );
define( 'NONCE_SALT',       'Q] f@bX:iqy ,Y*y1Do,hJ~jlY@n>R^=UG5#v[J}D2w7j*~SmtA/N,? jBnyk2}I' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
