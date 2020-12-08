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
define( 'DB_NAME', 'evaluation' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
 define('AUTH_KEY',         'rAtjtfB6PSW&:S)~tv|d 6hQb>k| ksa9=V/c9]Oj|W%fj$+I%lP[&XPb:kUISC?');
 define('SECURE_AUTH_KEY',  'f`=>U_In0Uo2,(xgg|:sHPKG5Mct(!USM.X(:x5xy[//.,+e+W8X~@r@k@]hSbjI');
 define('LOGGED_IN_KEY',    '%kCpcoK->aH@gL!sz P<GpJ>L.8yvD1@50:pf{ex|!Rqt%1CFACnPq/{+W^d+u|f');
 define('NONCE_KEY',        'oe7Y)iWX5qN?q=<LNf; +l724MP)qH#Ma2iS0Fb:t(Uh8XM6S-SJx8D*n-&Db]QR');
 define('AUTH_SALT',        'iJ<de9_AV-T^GRiAp|V&iSEFj.P[IeKMXX,e6je4-IuNb2M-1CcsOlF8q:rx_4!m');
 define('SECURE_AUTH_SALT', ':g`VlohXP+0=l]VEaY-[ IQn?vfH)e|QFV<X`;JGIPkv)f*Buc2@1l(%-%kyZm6x');
 define('LOGGED_IN_SALT',   '+XA-k#Cd<4iVt.YNlu(Tk:zBZf-/nHYeu|kgRIW/Kp{ev0G<p: v,T-0>mA=4Y}Q');
 define('NONCE_SALT',       'aFY]<RNM(iyc~tvG2=9b-gl2,|^=HQ]dY~D.g>xE/?hNyouDW {RHV.wskhP=1A ');

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
