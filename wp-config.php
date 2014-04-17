<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'pimpmylens');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j}N3 LdwIpu@Q0`/d$xaCI(uA gEIVR=4>DBfK^Xk1~IzrV)my!+/); NBW)]sKU');
define('SECURE_AUTH_KEY',  '=-81Rn(M^0YMj-If97KpXt:1pMgYx|o%vv+_&+OR|A2,b%4|Non ><8$5|h]`^7d');
define('LOGGED_IN_KEY',    'yUc)`YEt+Zd@;1U-S3{PQq|XR9q>[~G!_`|}T.m1+pcbzcQjn%:Ce68L,+%=OS`)');
define('NONCE_KEY',        '|hvcG`VPO-YcTv|FE{1x{nJsvG1pJR8E-,Gypt&OL!*mZpGh}lQx>W2@L.S-`RvK');
define('AUTH_SALT',        '$3id]:;@Q1Hf-~%DUeIaCRA9;F_xnmrlM+FBKLk~mIC)V`;G-{uUTYWXZYVoCqt?');
define('SECURE_AUTH_SALT', 'xz@.R|h`;|h1 j8+x}tL4p>-,tgOR6g%M[3?)aAf`[OXN73IYpa#tL[Sc<:D@**v');
define('LOGGED_IN_SALT',   'rQgM7M?bZDSO3<Tol%>Z=Fnl{+$P<>-SZTPv`;^dh@OsrM*+U1~WtU:Hi!DapxWq');
define('NONCE_SALT',       'd}LLGA4CO!%n{4x`/!7>d[I3KENYJmi89r+#%;*6H2l`?;B=oG`3&A1]aJkH-[TA');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'gmf_wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');