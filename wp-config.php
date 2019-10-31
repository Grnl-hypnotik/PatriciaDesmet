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
define( 'DB_NAME', 'PatDesmet' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'RWT0LI#K69b7L$!|(JjzNw:o;49B`7:Rm*mJn)>e<@ljeCfaNBn:{jR}pgr/cD)t' );
define( 'SECURE_AUTH_KEY',  'tL)PeRT{0I>>-1n4qxq4M}6t+;Q~cAA~Zep#5JF&+-*&^qIM[e50(m{1n:=xZINd' );
define( 'LOGGED_IN_KEY',    '7CYR:?Yi2s90Sg  $+~QFgZtO]KN6It]?;Od[M .%!!7pPUaj~fDNG {Bi XdBMW' );
define( 'NONCE_KEY',        '1D:gJ_vB?(q&iQE4SI1(afUqGkDNbF,Dyx^o#J6H9v]@%d5[uKIrB5<ze.6P+Y@z' );
define( 'AUTH_SALT',        'XkWezvnM@-y{U_[TE04C]utpkIz~qu8:bzGeJT|GZcRG4#f9G+DyQ>QNo;E)FfG_' );
define( 'SECURE_AUTH_SALT', 'tS+Uzq(fA%g49KkXdH~EShUf-1lDGIF(eC)#8S!obl?@9xE;1Fre(E}lEo}crYs+' );
define( 'LOGGED_IN_SALT',   '^2oN+&EHF=mZ`I&dZ2K#TMMW6o$Jg.[VKB$#MCXaU#uhXE@azp9aczbgVqh-><o(' );
define( 'NONCE_SALT',       '9%=t_Ovj>(P%6o#%2)M=X:s*l!:$HV[;Z{Pm345(A>([ .h>QA/XgDXfHCu3;{a#' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'Pat_';

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
