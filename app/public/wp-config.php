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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'B10me8rv^|[HA.L5]qE:p6,ivVU|w,ko=UX75#4|>x4p!TKxj8%Cq}(?[%6esuCy' );
define( 'SECURE_AUTH_KEY',   ':XQW>?E~(hXaRTO_MkhkpSEEQh=WNa~wChU`P8nN9<*q(,o{R_OrKA/6%u9q y!@' );
define( 'LOGGED_IN_KEY',     '7x-NZHio`<eshU}I75QLccX[7_N]y{e09vT+.H+D4D/oA4tFy*-A8Q5Q#*!@9n0~' );
define( 'NONCE_KEY',         '0KI L RHB;nP+o-)mMYY&?#Gu>h2gRsZ=kp3|mC*^d?xF5N+7X.u/Wcy$.ZYdn[C' );
define( 'AUTH_SALT',         '>_hEYB1D/Sdc<Gg& [~_6R=#8):Qov0TRowoAJ[7>_5gRxv T}+zdl&J;2A)]-?}' );
define( 'SECURE_AUTH_SALT',  's2Gj%n$iY.q]H8P]!u$&~0S>Xix@U& 1m<p^l?r;c.FS_#=}}g&!C3c|^r%C$qJ1' );
define( 'LOGGED_IN_SALT',    '5Nb7bXG{0C<_yB?huttzYB^$Q C1/`dJ&d+m~)I4!d0v#JqKc-VBu&+@/Gz[Wc@B' );
define( 'NONCE_SALT',        'f6&-p@hUYQ-(a@53q4td8aO=BFf~_Wk3q,63f!d+n=-VOvQ2UUM{DDHy.8TE$ISc' );
define( 'WP_CACHE_KEY_SALT', '~Ea@5k|2KMUZ]h=$MEhQL?i)abN~~#X)DG_q{9[wr/6CsTKw]QQv/7$oG Bv1di~' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
