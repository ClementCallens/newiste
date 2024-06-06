<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u923706777_kanji' ); 

/** Database username */
define( 'DB_USER', 'u923706777_darky' );

/** Database password */
define( 'DB_PASSWORD', 'Darky!83470@' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'z:{v>hi`h-[z!#kvR^kBc.:NVb2Kw{&1I8%0mF$J%{dK9~@,@JUaZIB2{!5tBbi ' );
define( 'SECURE_AUTH_KEY',   'Mwp-iv/(hBjnOR5}H{cB$N-nngeN5l2+xtislppyG/3o[Y`SPkkq(>uB2Jy#dwtB' );
define( 'LOGGED_IN_KEY',     'S~*4Uxz9/tXmwi6T+_U=]#Z>S*k>u8wH:5$nbkchTC#NRQ3e3EsNTcDG0{a*90cp' );
define( 'NONCE_KEY',         'oPYO2`nl{%cuFyv>FHB|v-Mp],=B93]#Y^;+OVFq[(O| 08RyDwZNaV9/!ph>3/&' );
define( 'AUTH_SALT',         'a?:z5rp[A<V=7u*)Q]Y5-<sDJ>i5j,IOf2Aksbv^I]*!0;u]?nQ@oz_sHr >6gkU' );
define( 'SECURE_AUTH_SALT',  '[9r1D+(;l=/E2vpzP^E0@z.6Hm[/erX1`-os3~pf7n~<P*teo+|k<Nt>(h!4+evX' );
define( 'LOGGED_IN_SALT',    'N2gY!IC`Rzhncg.q_HdD8hq/m(pNlY?132)pRjT-%o[}u_{>t5O#Rn+xiIwJHS]y' );
define( 'NONCE_SALT',        '/,jb)vh@QG2S40Fx|C[tEA&J{d0C`{a<|ma<2d?3p,KnE+*L9Bw5mjGeVdX&sb<V' );
define( 'WP_CACHE_KEY_SALT', 'g/rwAQNw]wv?X44Y8ynRzn[.bY$|YaEPaW?.l^2m|0Cm5~Yf^Zu*;Un~b7Ky$tz%' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
