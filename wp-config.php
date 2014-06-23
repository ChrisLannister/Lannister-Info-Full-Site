<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define('DB_NAME', 'lanniste_wordpress');

/** MySQL database username */
define('DB_USER', 'lanniste_chris');

/** MySQL database password */
define('DB_PASSWORD', 'nofear');

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
define('AUTH_KEY',         'j7:nR M.c}U|oR+VMsD:xWDz|&OWqqxTk]CG&#w_`=EgU-_7N|xR|&A_J,nsl<=A');
define('SECURE_AUTH_KEY',  'Pgkz8%/$NH1h7qKY_&A8+.=R+UV j&)lJNMq_t&otrK(23vWS-_9s+_&DYB-N46^');
define('LOGGED_IN_KEY',    '(v#<5%LDkod)LHGwu+/av-=lv11mrL?MX>9}Y^xzxoIi@wlj-r0d5Lebj-wF+^B=');
define('NONCE_KEY',        'c.=t3bF e1[Nn<w<doAY7T,|TfcRqO,xlLr+2[m</uf#-p>C af]l<X[0}M|zJM<');
define('AUTH_SALT',        '^Yn9[y.  E3Rne*c+wc89qs13GWOYaX2sx;7[#3&NJ:ub+07s3[COPA{S~]jRrn^');
define('SECURE_AUTH_SALT', '+^$MK:uPy++>wz}N=<|C:(7^H#-jq:@RC3U[eedRW+v{+Cw1YVtZ;X|c8;dlh3SH');
define('LOGGED_IN_SALT',   ') .s4}Xi9!rVzZ0Z7H2EKo |gcul/4)~>uB!w}Qk$##IUKj|xKWX)P9B1uBGn9i?');
define('NONCE_SALT',       'p~I-OdJX$?2,JZ|z%vc7MPmQbH-6heV-A}U,33XI7lJ7z(-]A#MIBhz[jze>[SJm');

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
