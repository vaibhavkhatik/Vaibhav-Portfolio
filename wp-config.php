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
define( 'DB_NAME', 'porto' );

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
define( 'AUTH_KEY',         'gL(]}l`,_sdor |yob]=B:t&L.88es`4oa4RtBCdHVoMX^%6`;_bQPi}=mZVF$u.' );
define( 'SECURE_AUTH_KEY',  '%$PrQ96h.h),TY%1dZv{+yzYi.Q3[r%XUrB/*FV2xShX{0p?r<*5DQ5^#1!7cW,C' );
define( 'LOGGED_IN_KEY',    'Mvh&e&7tF5DA1sES~1?e5fP rx20Y4OLJ(82(!w) PAL^(vm4,V+-^CZtt4Umsg]' );
define( 'NONCE_KEY',        'NkD1&#?mZRcQ_ihh0Q/IZ!7O xDR:F?z,Nk%F$D#};pRW{Mvf6kED6P}[n8BjI{}' );
define( 'AUTH_SALT',        '{Fv|f7%z )tV*lt;|ni7a[B|pp?rkH%l=Wcu|KXMeHMa.ZEpR^5T@XQsd}IuNU25' );
define( 'SECURE_AUTH_SALT', 'xW}vJ-aR[P>(_Fn|53Jnr2qZF$F#QbF@k|*rvgfyr(GA/D+hN.Osj yttJ&NrPX^' );
define( 'LOGGED_IN_SALT',   'BY &<mSI,VY_K*3-&55[nec:iLZR^CX<;j[x;9,Bi2t:o=XtJ-OD2Ka?YUv~&0mO' );
define( 'NONCE_SALT',       'EV=@-t&[fS9LQB;2#yZ{.It-a6KE@e?^Z069a$ m[Cu7+6Ay:d+bT])CHFrMx:K+' );

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
