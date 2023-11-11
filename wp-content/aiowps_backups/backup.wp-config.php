<?php
// Begin AIOWPSEC Firewall
if (file_exists('C:/wamp64/www/invocall/aios-bootstrap.php')) {
	include_once('C:/wamp64/www/invocall/aios-bootstrap.php');
}
// End AIOWPSEC Firewall
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'invocall' );

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
define( 'AUTH_KEY',         'O1q_7ErkpHX)K^lg@]:)k/fko|rcj!WItwl;<.@K:uU{ 62&qfI~Ri2h4*2XT*d}' );
define( 'SECURE_AUTH_KEY',  'WDMgn,Y)Nt*b(OxcUK1]K|~tSGs8*Z:D=(C:kV_aCRz5_1KcJeTgkqZ(]a`x4afw' );
define( 'LOGGED_IN_KEY',    'EM%SVcB(c)VPNJuiFJ*I>cYUyKQ;uR^<ut0>DBC^&6VWJXHc,&94*rO(fq(9hW9J' );
define( 'NONCE_KEY',        '8_Uf3)C#p}+8^nS.ANDxO@(QQTQH<vk3O]#R{rZ0TY:GCmKa W;1 ~v,q;q;%J6n' );
define( 'AUTH_SALT',        '/{U1p@QwABancPMsh5J_+B[oc9my!qlR@@DKh-7O<V2.Vfdap(%`pK@UX[+yBpTo' );
define( 'SECURE_AUTH_SALT', 'MnmbIO.h|(I?<bb<Q;*+Q5K;#3sHw DuG^2MODWWA||nIQ<}0PjUf~zA+ELo=U/c' );
define( 'LOGGED_IN_SALT',   'ikP3:=BE rr*E-G|YT%rLdTFA}HvKM6YeFt[yY[Vbv85o>TBpijYvh/{!Cw[XEEy' );
define( 'NONCE_SALT',       '1b] &NEDC[B?,(x:ssWK-mo@iLnDMWDI,n,KdKRD2BnENSF;@XD/dnq%R#$WF|K0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'uMvb2CUaXS';

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
@ini_set( 'display_errors', 0 );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';