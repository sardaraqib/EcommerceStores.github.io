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
define( 'DB_NAME', 'ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Q.3R!BQBGGAhY[MJ<&]Gm,}EZ9C zNDCnr1H_2VO~9->j<kWVC 7-:tA3y{x4CA}' );
define( 'SECURE_AUTH_KEY',  '4W6|*ZOH3Gwn2|3|lM7jyExh`o8{4$YUm1TZI3Dfz_9?|vU0ZD~EjZ9EbP-wJ6Fa' );
define( 'LOGGED_IN_KEY',    'ajx{u(,UW(kSz,@ya;C~MsZ@KNugs9]oLW[dymmrN`_WagRBOCN=} >Iq*~>>4U-' );
define( 'NONCE_KEY',        'zw7A1pGF/83r<(4gJqhC]coaEV<#CIv]z-jon$o%LB}17$_0XMv<)Mf9WNHH;;b,' );
define( 'AUTH_SALT',        'X@ A/YD6$sL`^/gJZoUAYN^H}[%jW(S}B}9D*advnToxxZg[5JIyE!M]<ve!@0CX' );
define( 'SECURE_AUTH_SALT', '?qIzjv;~&`W4=[#`j1SP1A$leDKwz$M1&Rk(qluX4@lvTTq?O=dZ#XvnoS*3Byg>' );
define( 'LOGGED_IN_SALT',   '@; O:Y=G/ }@MZH/[w^?Yp6-M5EH~Yc#u Lt:NC=eL!zmW,iX)tb!FQKCPv8FZ!w' );
define( 'NONCE_SALT',       'W8F,qa+Q{t7q[l]#5@Ip+TIr*;>Ro>V,xf9N4dLl^l!#d?/^2kq,pS}HP:B/iKo|' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
