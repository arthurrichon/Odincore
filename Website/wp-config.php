<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'odc_wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'qO$2?Od*X;Xpq9w!iu3P/(71G5`W|fO0L*Hf6tC}EEciw*9hB{cAA$@59i[oNhPV');
define('SECURE_AUTH_KEY',  'LsP2QXZ{4k&w~ww2tVJKh#1XsW^(DID OL!K9nAP$QfPqK|(FFbE)z! t-U-+hIg');
define('LOGGED_IN_KEY',    'NB(=fNT`j<2l&E,+$>9WPS^H>iXA-=|H!iQ|[[+IHB4=OKfWDM+ebos0#wSt[x[v');
define('NONCE_KEY',        '!2&{WidS-&GbGj[fwjiH/T=`7]7@:-BoT(AsWL&H;1jY*ul7,yhd~!O5%CcaYN$i');
define('AUTH_SALT',        'Rh,o&|`N.BZ|c~ZSQ#m-`3?SHfu J2f@*fw^OC+FolmXidSx&H7@#q|~}oEB+w-~');
define('SECURE_AUTH_SALT', 'YR#3b9/id|Nhz/bz25|LDZDdC{qOWS+vpzt|~DK!3<>If_jMHpk%97v$mZ@pq]:k');
define('LOGGED_IN_SALT',   'WRK>^]J)$`GfJcX[LTWYm:!#y&wfK9%D{ fUTjXJ*J(rKFHY?!7]a>iW)H1..]D@');
define('NONCE_SALT',       '?O(V3RHi=sUMt>$F}Vr*nvq;r[b-f{OI$PF[oI~,H2W~l^-_c2Lw;E__r$Bo{KEE');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');