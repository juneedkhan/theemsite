<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'theemsite');

/** MySQL database username */
define('DB_USER', 'edge');

/** MySQL database password */
define('DB_PASSWORD', 'edge@1214');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'w8]{L[dFV(R4bwptf+%_H0].iI8Yg^C;qx`_oz;]ODUWRSLI+z8OW)6X4)aaRglI');
define('SECURE_AUTH_KEY',  'A(-xXt`pX#$+YO@Qh1I!|l@#s5IgQ.$.1dJw2UKHt9jT?-n;W^d/;!r*dA+/4f,I');
define('LOGGED_IN_KEY',    'lIGM^5@TSNc+4|mFh9 wj`}semP;.vuW)%Bf?]?$^!&gHE4C_XmR|F|`%URdPlVw');
define('NONCE_KEY',        'e{@z/%0V+))82dH&72x*i{6Uo^;KQ}Z*EK#aA9|O>.Arv-.L8i4G_cP_Fh3c:az@');
define('AUTH_SALT',        '3Ba,f,n*CBUA8pwP!*c8r3=%5d$]VTD5fxx?(4D>I^A@iOeLuMU1I:Dry+CxPq#[');
define('SECURE_AUTH_SALT', 'c#&<s<G@w$B8$>Vzg>y2/Cp 9PTa-sr%(MT2&Opr#ku]8*g^o@9ee>_am7QQUdW_');
define('LOGGED_IN_SALT',   '?xPoe|fhiWi#m7%,!BomL/l%hON(5Yb`tgpg!QqpDa$pYU16VhXwDMYE~G*I!4>2');
define('NONCE_SALT',       '08qQ e.z[3V6R&+eE<Me,}+@y$S6#QD/u@:a?,Ey`X.#A]]O#ha 9H& ybrl-48#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
