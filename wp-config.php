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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'obed');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'q^s7d:r;Q[lT}RDOf:NL(<VQEVlA<-b9z#Yn=3f(b)62cSH4V)I^7/gmbc4~pf_h');
define('SECURE_AUTH_KEY',  'l<zp(]}JC^/=V&Vl*eyLoTQ7]8(C=1D1y/JhAlN|gcCWc+;LL^y[-#v@}Y{dMy%x');
define('LOGGED_IN_KEY',    '2?ukK0.HDLXkD~nGEdu2A|_6cv?YF9xw~ mnG|v?&h9i79cTj_B<dU58P#d@X<)F');
define('NONCE_KEY',        '!!OAoNw2#6K$!}9DaoM&JLLx`LN;8LF]Ohd+MvON|v4bsM2dr&vEhRNz+XY|5bL.');
define('AUTH_SALT',        '|z*>_GtK7%rm(C72]&VWH;+F-!lZpAHwfSeGXl;C*`hi.G1>h+#:VS%w(N@k3p~4');
define('SECURE_AUTH_SALT', '_+3lOqEs{N-p/TSIBvryA=El*~rh|MDe0b3lBjQb+6-}M_M~R+hl@sFZ +yZXR+g');
define('LOGGED_IN_SALT',   '=N<L3jf|N>POwh&L0.46,8Wmj<],Z{37K^xJg>jR5C?*d.rxY-FXwe;B_CJRO<KO');
define('NONCE_SALT',       'wW-1o+|{EMf@e=m2%<cb^;7/C)z^G~6|CO<KDGcB1A%,/gEb!Y`[XZQxE,$)|^<[');

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
