<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cursoemvideowp' );

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
define( 'AUTH_KEY',         'on<j(&(Y!-2&#(X8<1|h{}a7T?>E+[=XP-KL(Po5k68AG;x0v<R)B>IG182E4cJC' );
define( 'SECURE_AUTH_KEY',  'KS,hhN@JZC7h4VGBmI{Y98![O w]V_P>5igknx>y>`sFN;u9[knQc?:hLQ+#/laD' );
define( 'LOGGED_IN_KEY',    'sisM70>ws&Vja?uh5m^g;,E/y+N[9Z]s*:jx%2)Kj[?smyo[%}>4wC)^-h w%{ya' );
define( 'NONCE_KEY',        'iwwMK*$`9x7ME/zlcb//-y&{i_XP4R3N``)LwC9itqyouHul8*/mlv1, cO_v.BI' );
define( 'AUTH_SALT',        'n ajE=T>Hz!x2C1ZFB2Fi0%&U@4}8kaY0;EW^)jmTwriwNNhr}kKe}ls5rVNUsZB' );
define( 'SECURE_AUTH_SALT', 'R^G71wu%q{u1/iCpHe&i,?[r:7Cn|)=heq=koU.XLYxoqvb7l0@@GlQ6K<~.w8l+' );
define( 'LOGGED_IN_SALT',   '~:{P=h&12T_?o-l1]Cqoxtn~R X7bZGCAv1G&Y0K>i&/aa|Yhb;_h. 9h4!t+%Rp' );
define( 'NONCE_SALT',       't;t`}bl/DV2;%mrr<x}[4GQcNbw_h-|jpTAKbCbQTQ}7xr!1F>WY7L&BoH;pjWst' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'cev_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
