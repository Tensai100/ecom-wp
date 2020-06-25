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
define( 'DB_NAME', 'ecom_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'M@re4(Z<nNws`L5(HnRLIh.Xd5/[e86MKZVIp#l`43CKVeXOmb`tVN_^T8b>@&_?' );
define( 'SECURE_AUTH_KEY',  '3^}jLb@Kp w!2]f>(_$Y>08@Oz;4DD.R$xZ=p+/SdF_-7EQj*1_pv%uT]8agmnEw' );
define( 'LOGGED_IN_KEY',    'eybNse&Tmn;j)zUE#eWqI3!!-o}dJxDE+5l|R~Zm)61/ TTa&EOIrbg OrV8.]$/' );
define( 'NONCE_KEY',        'XQRko+69 5h5(e*wc%:,)tt59u4d0UC5aOKH9aCi~[&$`/g/bt]?.YeWf^`YpY-D' );
define( 'AUTH_SALT',        'YgvQ;kfzM}4ED|Y3HVl[tts9Hequ pqfOS/gXcMEm|HR=qqmY=ayuuInz>HoMAf<' );
define( 'SECURE_AUTH_SALT', 'o~M1)}Xgdf=OSlpLv_>W0$qZVxqMS6%#n|=>vhJRP[m~=E&}MKfG*C.Fij8bgYW>' );
define( 'LOGGED_IN_SALT',   '2j7DDV0.A}%7SFA=YYAgyZKMhV@ql+lWN<qP+g8=f=,w4:hmGk)g!]BtK@RO/d0i' );
define( 'NONCE_SALT',       'rG 6kg_va$2Y`fH!K29X};MOJ6WY)g^AgOaHuf]A=r>EJ-y6RLqZ^D;8wTM61URb' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
