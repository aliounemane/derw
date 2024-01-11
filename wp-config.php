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
define( 'DB_NAME', 'derw_db' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^AL^}(< f!zGi cCVfxJV8N|([?;j8<hf?_4{4qiow(TpWsw!2Mq HD%<.JZVFu&' );
define( 'SECURE_AUTH_KEY',  'z{kzy:n5YmhL-+aMi*3*gWkOz  izAh5ui 9aJv>C~I!CUOI#u+s:K4+ivHmj4M+' );
define( 'LOGGED_IN_KEY',    'Yr4vWSG#|Fm5c14v>o6o4m[kwXE[7P!!!e~[] L4cL^)(~.d&$s6<Y*B@Q(N;|,R' );
define( 'NONCE_KEY',        'FfQ=3iJ+ja:d9@boqrhJp5`diP3PKxz7yA^wo/zf&cKwd=q,iblUr=.a3pN/2,b]' );
define( 'AUTH_SALT',        '0{#3B3.wF[9][493>g#ew<}v&83I~Z#LF9]XG|c&FZ_>K^37w{-l$ZN[?`[m1_x>' );
define( 'SECURE_AUTH_SALT', 'u|Zt`osB_R^hj?B-|XmD#3/1~xC~MV=@s3,sTltc<&E:@LnXehYR*~`H_v%Q0AsK' );
define( 'LOGGED_IN_SALT',   '>AAl%cW;,+V#;P@F@&UC96d{m#7(N?tj&Bezbccb,Nh3|@c4ZSEA%p1X~- WdZ]8' );
define( 'NONCE_SALT',       '6P7%2P:lY8gJu&Mum|+yO4gJiZme282E@!@vgs y|SXH&aKo9bQkS_OeDIc*kG4D' );
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
