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
define( 'DB_NAME', 'db_ikbalalbouri' );

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
define( 'AUTH_KEY',         's?e;?@|Xqb8t|&1UzpWU5HodZN h27z4P^dyWA1BhQ*)Z<&p:5eY5[^(2k[u++-p' );
define( 'SECURE_AUTH_KEY',  '!MOr73L4f7C1#pKG`n`6&DJ,MgBVsJirhKTe$vP3VJz@g) eG&!O]NsKd(#*z9H;' );
define( 'LOGGED_IN_KEY',    ',(!FXW$3F53qg;E=SRU`lt$yDtYPaLug3UxD~x <o:bWz/e4Wa>lOHT$(q|r=CQy' );
define( 'NONCE_KEY',        ',Rr-|4[:WOf,Cu@Cr6VCo`r*9<>T1<.f+htAbPteRRgu$1#!@I8}9^*xpiPWg:Yh' );
define( 'AUTH_SALT',        'xw2Z& E4X`aE~k^TJ>&R%s; T#CSn ]-R2^AQ1;1%)u)nDi1[OtLoRx;OGP#OVz^' );
define( 'SECURE_AUTH_SALT', '8Ws>B37lizrVKt<IC#G2D#l8R#5irh.jF-nOM1~ }@[:0m#Trv;):fKq#Kn[|Dc.' );
define( 'LOGGED_IN_SALT',   '? 9(?61f,h7#NKt[jkFqfvyTr}Wm^Hb#i<.3+qyiUK|JMKDeKo/T[r}bklj-]:t7' );
define( 'NONCE_SALT',       'Q|usBg5(WIKuDR!K8eThXXD?SDx_hu8Ow5@Dv(4Q/>a0.z$N6 /%Zs0 daBl,?!r' );

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
