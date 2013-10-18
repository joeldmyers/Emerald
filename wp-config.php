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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'bf%vXs>PVv|67]?5: jhbN7x4*qPf4`0iZgOef2+F2+Q>?__G^VC.X]-)Hcu.$7B');
define('SECURE_AUTH_KEY',  'I^{{,g0v[Tem-oUBl4Z=vU-(#g=3F:3WYPevxL/uD=MJ=`iuc~~6/[H9Hu5}mo2w');
define('LOGGED_IN_KEY',    'cYGwO>nYy}SL,Ch0Xys^H-:wyYyLU4r[]/.BwCLu.qGUWBRoydGOG]ODm%YLIwSP');
define('NONCE_KEY',        ',!g0|Z8NKOA|Pz2ccz7!5;[|S7(pxx1ibIR0-8IA2#8bsY1p~tAB%7MQ<goD05&X');
define('AUTH_SALT',        'DA^;|$a=1RrpSEM+3HiZ&`E,O}fC^l^ -?l=DEnoT<1FKYW^5G>u[|0<- @y%``H');
define('SECURE_AUTH_SALT', '[H`^QR_]cU`dZ3oZ@uxPfy&yMYo*6-R:oH)-d-%2mc@M-ZyW<*BAVhdF?>~*2(k,');
define('LOGGED_IN_SALT',   '{tHCZ8si,QU}%q:FLdX}]u;yA 2 AyH%k)*Akh&|h+? FD870#Y_J)`D;Q*AMCj2');
define('NONCE_SALT',       '(Y]tmQ6uf-Qoa>%Iba-b4g_ti9%g/j?_Lv!,8RG0w54vh$A;]i9t^ha1yM$}GG2B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_32';

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
