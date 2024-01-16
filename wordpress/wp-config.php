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
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '^OX{bH/QtZNS3v0s~#7ut&Us+ nQSO2g_zhSUAo8?fL_/f5#D;6[#~B$5K*!+d5 ' );
define( 'SECURE_AUTH_KEY',  '+@Y)6T:HE{U#wEV>I[d+%WJhV>[75n/8f8*)UpED^C)f7e8l:#gEW(Qj9tiz%Xzh' );
define( 'LOGGED_IN_KEY',    'xO?*_.hv|1n}X-~H0yj8MFRX1*YTf.$oxO_-+][O&Nmz/[W+OhvtZo-uLWs4m]Aa' );
define( 'NONCE_KEY',        ',8B`}3ZShNN(zp%fR`8DFXl!cWiF$v,WJxvHKhf[?Z>@ZqCWEkMN9vEy-?w6Dai}' );
define( 'AUTH_SALT',        'qwR$yuV[,(3gqi92|GgS*?;[*Bh2[%~M7IIL*,8|,N%rC1-?V!O98D8+Q:c<C#Y9' );
define( 'SECURE_AUTH_SALT', 'mHtjixB}cNT 9^]38RzW`Y#T{Xc5<v5Z-LVtc4&5 }ZNj_r`s8*n0~epH1I9[3i#' );
define( 'LOGGED_IN_SALT',   'U-$uYmPml&D#|KL3H:G`sWg#/g)cshGZEs{9_]S<#?dOw,)/Btj2A`-F_Vc6D3<O' );
define( 'NONCE_SALT',       'FFD$#u%^Bi }lwC:;3A&O?&1c}/|.UwB1bGH+k]n5XJibf)32l[3 ?-7($J73;U^' );

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
