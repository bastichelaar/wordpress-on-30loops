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
define('DB_NAME', getenv('MYSQL_NAME'));

/** MySQL database username */
define('DB_USER', getenv('MYSQL_USERNAME'));

/** MySQL database password */
define('DB_PASSWORD', getenv('MYSQL_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('MYSQL_HOST'));

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
define('AUTH_KEY',         'M@?~&ZKm^N=6y<7[Z03tU,6*oj~6(m&%LJ|?|],_yL$0x`EZuDD]%YM9Gc[oRM~U');
define('SECURE_AUTH_KEY',  'S}.CmUdltwY0Iy^>j7>Y:!Z*(8)i[RwN}^8nAJ(5q[+a_-w0,R%zJ;+y HZYu0{b');
define('LOGGED_IN_KEY',    ',CbhtAvX[.xw0&UhGK&jD$$}+9<8Y=w-iI x/L.)yM5BjPO}9{70JP-5hpL11I7e');
define('NONCE_KEY',        'o9b{~etY7ycx-~h9|LNi8/nu-`@kgigk5-<N-EaDw9XA|tI<R,$km}$.I-1.Ot#|');
define('AUTH_SALT',        'R<Vj7AO(fo5?b-LpK+@Jm)OfOV!%6.:xy60GJG|8pie.JPR^oZ6|.f~f@7`W>_MX');
define('SECURE_AUTH_SALT', 'OYSMlh1^4R:rf%%QdnuGPSL.1LuNftk~rXRLz<Rrdi*ahvy.cX_~N[2Z^]EVk-_|');
define('LOGGED_IN_SALT',   '@lL<+G41nfO$D`H@I?PjUC+lA5C*( r]_%4[r]ejCwhx4=B);Di(<#Abv+-sxC0&');
define('NONCE_SALT',       '|4amI?NfMYZ6?Z{Q3BC+()?jS4k$EHK72?xc2Fx@wb[k,SZj;]}X&3x}&Kxnk~P9');

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
