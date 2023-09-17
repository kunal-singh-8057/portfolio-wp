<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'KZ&&tfDyT3kJ WJuih*l[KFu~{GZ(tGYX1Om-4wR{Han}dk[D8pHd72~:D4bn;k4' );
define( 'SECURE_AUTH_KEY',  'z[92V<q(77u5XFoQo1HQz;YN$0!gph-x|_E/Ig]5KKHs_xlOU$JIT$bXPxcdrzt ' );
define( 'LOGGED_IN_KEY',    'wAgPga<:+|qs4`D$;-so2$6FQp/E}p]|tZ8-ogg&|L6z6Nn%^bVDb^i&# %lLa/p' );
define( 'NONCE_KEY',        'O-Zi>utXdL~^*h-eRpPHydx8ba9iw@ESYa+2GPTf3:7?Hkb.N}AM{DP21P)P_G/i' );
define( 'AUTH_SALT',        's0Pt>#5e-K[4O(33dx;_Z<iaO{j?xW`?s391}HQooj~FN Tg~S $Y7:d-23n>*r#' );
define( 'SECURE_AUTH_SALT', 'g6=B[iR|oES]ALu_);/vYU7$v(ZgbB%4RFgEZt[yNv|`.2Pl3r{KT5VE-+q6Y7uy' );
define( 'LOGGED_IN_SALT',   'Tz8$|x:0Zp=$[<sc*D<%`LiTYj2?gg/~>_GD}yI^d5nWP{wQ`3<Wv|Fa|Dq=dD9;' );
define( 'NONCE_SALT',       'Mgqu}NL+q;a36}*4z|p@n%Nq*XRi+;.q[U!/M|?E&abCQLwv*=@hz:F `s^vwSG[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
