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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         'p8i$Q{qazI M{>4nc>[q~ri>N}q7?=^rQvMrf^/k9wI%(m-*tTQkxc6HWc&p.|XB' );
define( 'SECURE_AUTH_KEY',  '},PmFr)GEc,7FIIpYWA,iDqM-idSZS69(Z <+x[HTv<ay*%rbKM6$GqR%E b3Ys/' );
define( 'LOGGED_IN_KEY',    'uFEUR/p(3b/[>B5S#BO2XpGDYl~d2OB?BH|Zy%2^>4+KZ&;6OMGcWi)3z*AZ|]St' );
define( 'NONCE_KEY',        ':dFYF<Li8-S{nW&.%P%M(6G~yR1o/{}Ww(6`Z5=R|j hH6Ip`I*Tx5c+([&IjEPa' );
define( 'AUTH_SALT',        'A,*BWL%{!9NcTakQ%E]1>y&Os-6|5i|^WRtbCl~WQ38`mM(XK.bwV&?x<|G<j_6v' );
define( 'SECURE_AUTH_SALT', '#L(WYO4*kP><CQ#}Xa_FmKc+J63KP=MXB*dmK-<c8{/D2~T,D[CG5x};O<`y@|av' );
define( 'LOGGED_IN_SALT',   '*&Z`a+iM_G_.W3BLi5!PXL$D2THdHX[BzPI@hX9rMpZZe5~Sr10Q$A?2e}_;1?}D' );
define( 'NONCE_SALT',       '183[([JJL7~xD$HJ8(qVW2A{aqrbF&11<GpKO/kwy[5`@f&AN,6`jyl%%e#7fvj{' );

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
