<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'petfinder');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'dba');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(x_6*eR[azlD()%O-*==]Nk(Xe37ae,,Zk^LJ*dPwspADPh)S=XwX4%l{K3n>|Y)');
define('SECURE_AUTH_KEY',  ':q$T0~~*!a<BZFbH5r.JGOGWEcx)?2$TF|Y&G!Qcsn,z~=J)aVJ^uK0-4~_D`;_z');
define('LOGGED_IN_KEY',    'm34~xa[P?Gb9$- ++m)@p|8p98IDEpm/#:9lpb+62G9qsa|9+A[W,1|h):#O]K@V');
define('NONCE_KEY',        '}y?ejzsGtHANEoL+ZstV*vG36yOH<Y7(/-9Gkkd0PCA13m*862cWjU^9IIOcN,+,');
define('AUTH_SALT',        '1^NYPnoU?#hT-oLk5Uebr~D`9X{qTWT#}+t4CR&|Vy`QSM96QS06D7oNuFR[fj=>');
define('SECURE_AUTH_SALT', '-B}3-)~&b JO3IXnk3>~Ti%.5RD55yOv![r_8YkO[P)ocYaRX|k9L|hj5uiO5zo1');
define('LOGGED_IN_SALT',   '<CY*54xx2-EkJ#SM,:CQ;Wn)Qyo9{=kJT#q*o_LtMI),-3;17QKKhW>;LC!>ACz1');
define('NONCE_SALT',       'P5nKH{N7k:b!XEBV*Qh@evpp8LrJ+`FebhzGi$<A&,4RB?8H1 bb.4%f_`B@!&5L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
