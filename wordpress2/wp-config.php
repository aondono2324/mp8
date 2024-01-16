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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'r|T~]R2_C}6jA]6&1DP>oeAH%hFQR}<;}4IQ?VY5w#v9M09U^zJ_`&+C4M7[OCfD' );
define( 'SECURE_AUTH_KEY',  'UG*g7s=Oj{}`ms2wFgy++j 4,Ej8QeP0KzL$jXC)5pDRh_b;uVLYRnG`d{HZ@pEw' );
define( 'LOGGED_IN_KEY',    '^Z3TNIG%epHg05zJ;B5`1aBtxyA;XAQo^MG=Ue%CJ.L[vl^ n)hCpTXyl8I.P{75' );
define( 'NONCE_KEY',        '(%Kh0$zA[`^;qK^5~h?==!^uTtNQ^=!^3%8;>(h~l=$W<Q{.r,3*$vkw<IOf-[C<' );
define( 'AUTH_SALT',        'OKrey|&|11-)r>1xzqAnf)Ra?{:jWu$=P75$NUi%iQV[T 5X,b&K]:oN?XF?lx!F' );
define( 'SECURE_AUTH_SALT', '}9jwr`dcs]h40]E}mZIAcc0NA+0},zQmC;QRR9Lu}H,_%6Woj.&OFG4.ei;>.46a' );
define( 'LOGGED_IN_SALT',   'DNWbG!,34n-Ffm~BORsMCUId $PWZx8!*_K#JwfnVz~cOv.sEX@8eepc*5UNI1&%' );
define( 'NONCE_SALT',       'V?s23Ka35N.3[*E2bfjAA_ONiC{u[{NKj&=GQ.&@),U]|YCF(L9wF[vJ.8}(=Soh' );

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
