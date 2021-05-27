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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'baza_fazanerija' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'YPi+rD!Kqh$rj:zDT[H^-ppj#F2$u-1wLmP57?w g HztZTJdsI*V{rf`R}KX+D*' );
define( 'SECURE_AUTH_KEY',  'R5Y1!3iR@f(KfoJ!L.z$>L)Z0PWdxO%DwDH,Gj1CdDS~k/%>Vb9e,M[GX+ j@4~K' );
define( 'LOGGED_IN_KEY',    'OhHco<F5~/~L0@}Rv,(B#78{x. ZS&WMj<Ra(G&|&1PLa@:Py/_oo}w[CtC*]UmG' );
define( 'NONCE_KEY',        'YxrqP(8@kO|&K*8zt&TX0$pA[(KcesQAn[18|vVe@Y[)#I&vy(@E4mouT[)y;iP@' );
define( 'AUTH_SALT',        '>BaQHeNAw,z@FXnck||hDdST,r_a+jH*TgPh*s|NM>~<rLH|hSjm);!9o#)eCo<G' );
define( 'SECURE_AUTH_SALT', '0s(FnlEqU8+,IocM%4rh<jV0y%=T`|OjS4ArCzvc3g[e/SPy@[,EItR~_`^U`.aF' );
define( 'LOGGED_IN_SALT',   'ut@rNN`eg3~/5;y-s +S[|jsnQyhC&_r780?r1-DAU.)MPMz_dQ#79Ed)d_PK%a(' );
define( 'NONCE_SALT',       '%3w.#MExV#2.uFW-:-OojG!>=S,Js107=p69nze;P1B}1GI,7X@qMkZA8-=K:<9H' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
