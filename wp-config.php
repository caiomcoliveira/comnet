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
define('DB_NAME', 'comnet');

/** MySQL database username */
define('DB_USER', 'comnet');

/** MySQL database password */
define('DB_PASSWORD', 'comnetcaetano');

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
define('AUTH_KEY',         '9+lBh3pePwlf-&:[7~E;oe}]z}z!v{#;LL9*ka5S}??4[axE<2FRl4nEDi39 Te}');
define('SECURE_AUTH_KEY',  ';{;+S2v|IgOWCPya;.tY(vHeyjBRA?(~6bZ=Z?G%/t)QvH6$lsM;,;&NM/,diTW}');
define('LOGGED_IN_KEY',    '~J9.ByZ2_({]9FSesT#/IzN}:@sy>3F;`&ANw&6 oeS(;RPz9fXDW|~f<I1smJcs');
define('NONCE_KEY',        ',<14ja6*q`gI.MMCCI,t<u3b0H{m:u/Iubc7)At.J]se1qG)KP8&u]o4,d$o|RHr');
define('AUTH_SALT',        'PxCvHK^3:iVu$R0yQ}9S^dpDy:M j1(3Iokzmi-`~?d=sD6ya6I6;X3.%8ms$cK ');
define('SECURE_AUTH_SALT', 'pbe7[B}t05M4+65lsnC?|P}Ydx;X8`MMn!k<XISXGKz;0b$70DVF.>[v(p.CP~/0');
define('LOGGED_IN_SALT',   'Q5hS$K $8Rw0.h@XDHTH+Wv>C;pyP/xBk:|(ZYm:DC8LQ&AU=Ne`m9g}p:>,3K(]');
define('NONCE_SALT',       '%(1cIQ;J[A}[DZ[ZS?Pgddy/mlB4GnXM$Eypx>#+1](]HkBzH[Po]>s(@Xf7M}?x');

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
