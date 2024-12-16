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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'MASyONZUkB0EYMbpVweWA2511uhGL1LeJaOhvhPo9NgBuesunpiQdgbP6irr6fcy' );
define( 'SECURE_AUTH_KEY',  'Pb2zVfJIQDYqLPS2XJGVPz8H6U42RR4GjA3slZWL51hXvVUvpzkglvBTjklSGRAO' );
define( 'LOGGED_IN_KEY',    '3nWGhfJQUWc8LYgMPWcV9wgiFEJJHekzKTLGvkRSWzeTgYHh0OQRQXrnVGwZJXx7' );
define( 'NONCE_KEY',        '06QAqiblPif2rrWFlV4PZQEjJY5Hc1AgVKRntRbCO4C8MISH5uq2BjcOOKPIJTkw' );
define( 'AUTH_SALT',        'DKQkm8Lmov16myr4hNx0BF7BOWND8dRF5qqgcEPPIPgcjEyzenNTj2euC1AVXuKt' );
define( 'SECURE_AUTH_SALT', 'y2D4SZ9kHVgt5JcawnMEhINSdPqEofueZTPmrBbIDBbhEhv7w0epMOT9Sj1cOdAd' );
define( 'LOGGED_IN_SALT',   'PpayMYNCAxQqfiw0Hp7eynXztcE4EwrLsIu04TEVBjQEAk6X9gNahB9FQneacTFS' );
define( 'NONCE_SALT',       'Vj2Hs1gAyJrD0KR9PRkSj8dgZY8Kg3hE2u6NIvgkUyHEXgNrvf50Oa9k1IsT6xqW' );

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
