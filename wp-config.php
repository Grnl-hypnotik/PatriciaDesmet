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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\wamp64\www\sitePat\PatriciaDesmet\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'patdesmet' );

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
define( 'AUTH_KEY',         'RMS}ZVf$_J>7Soirh%34W{|fPp4V{<SKReku df#(pRxLOW.G]K`CIW`kdX&+u*B' );
define( 'SECURE_AUTH_KEY',  ' J~G0xR/7~[{p=i/2[r>a!]f$#rC{;hAFX.VJEut$kxYt~Dw4P;j-Svt(e}NbH8e' );
define( 'LOGGED_IN_KEY',    't{J>05P{Us_0ijzV-7<A=3724,`Ls{6^JXtJ[n}Nmb:Ksh*89r5fY*Nc2Eqp?rxd' );
define( 'NONCE_KEY',        '`+qK!i95 a@$BJ2/Y7raV(-<zged/!|xI;)>6bCl.WoPG/<?U|0;4QA^.tp$sa%J' );
define( 'AUTH_SALT',        '+|} u]~23WS)6?%X~5BDEWQp&|=M/}ua6b<k+8-L@L}dy+.DEr`s::lV*$EHKAA%' );
define( 'SECURE_AUTH_SALT', 'vTm*hs_Uw]pzD2.ltK#I/Z`~ho`V-t&Jc$e)fv?WM)u,TMf%aO%|kAw1b.$haX!e' );
define( 'LOGGED_IN_SALT',   'ODzq3f*rT(se)(pS$^<cPH4X(1UHg#l9[^g.RQ n^CkS>rHnMtB(_uCsF^Bx=-Jf' );
define( 'NONCE_SALT',       'ezNd>h5]KkCc(G8Oy<eu_]}rv 9^&R000(x#N1~FZ#c*i!$J)?=TU5jONB;ss~Hk' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'pd_';

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
