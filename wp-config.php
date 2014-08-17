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
define('DB_NAME', 'rrxwordpress');

/** MySQL database username */
define('DB_USER', 'adminuVFlNU2');

/** MySQL database password */
define('DB_PASSWORD', 'HgUhi2rH7ETD');

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
define('AUTH_KEY',         '-@pM0Q0N<G+`>i2~uUj:D|s6o1o&..YbX~eEr-v$c`N|BEW_aXyyGj*cAO1M+$qe');
define('SECURE_AUTH_KEY',  '1z])`s$CR<e_EA}H-{!sku5u`WYrAFr!GQG5 A6+*G-0x/;w!cvKy|x<$z-c&cIp');
define('LOGGED_IN_KEY',    'Q>b=|>|&y<M3!@E~Vt3s.s8PElJgw|-CmWtW1lMkN/A) T}inJeLi]?=eDt2sz~,');
define('NONCE_KEY',        'GhvQQ<Z8ldlB/Z&JJYKevCMVcY/lPxqal9Bc:3&_svB[cLzU9;RA`tSOJE6d-E2]');
define('AUTH_SALT',        '9QSj3ctBc*M.%qzB&R/+dY!o~quPZv6sbxjRL]D`_rmMq+h|b+^GZgDwySTe8=9-');
define('SECURE_AUTH_SALT', 'N$B^.q?`xrY0Z@8EGQ?Xjw{&JSBzJ{Rajm+U(O,l4Y[fDMi]&Zmw2p*]-w5YfuhU');
define('LOGGED_IN_SALT',   '!.]w}z+4Nn20TPzgd=+.?^/n%EigQGC#g{>b2.jAR:XdP4tG&^!G1$S>F=~4M8ay');
define('NONCE_SALT',       '<z17]p56wdujfhBrL=..{, b6{DLu%!fxb<3GQ3)>s/_|Y&:e8<.eDn!`U02B?LK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
