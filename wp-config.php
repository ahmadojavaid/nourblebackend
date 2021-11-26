<?php
define('WP_AUTO_UPDATE_CORE', 'minor');
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
define( 'DB_NAME', 'nourjobesk_wp586' );

/** MySQL database username */
define( 'DB_USER', 'nourjobesk_wp586' );

/** MySQL database password */
define( 'DB_PASSWORD', ')15SGw)p6R' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '7akw6kwxl2cmmvxzual736z8wrp7ia5lgxnlzusoc1ada0x9fysmfzany8zglob6' );
define( 'SECURE_AUTH_KEY',  'nsxvjzmvthy6fgtexxst2ayjalyfbsjxakarngsbcs9zfdpsmvxaszmcttnzm8u2' );
define( 'LOGGED_IN_KEY',    'paxouup49ifa7zemqwncpnzon8gmcket8jswmuxk1agdv8o3zavyjuh3sjashzlw' );
define( 'NONCE_KEY',        '1fctxv1oyinq0o30ynpfa4ybvuhli43lxkpytogxvpygyllczdp4m4hs2hemwvd5' );
define( 'AUTH_SALT',        'lrocipk7zvkh2cx46zt6le3rxzkeiwwxcj5sz2dfuev86jjevbgasxbshyt33pyj' );
define( 'SECURE_AUTH_SALT', 'u103krxkkkqlvsnqsim1nfsd79gsfon1sw3exhz836tt3ftzi72b8g6kwjsie2ku' );
define( 'LOGGED_IN_SALT',   'ivu6pudvptdbbaqbb1duqw2hrauam00nsisjlyofefwfejxzbxnnijtfgl39kgwm' );
define( 'NONCE_SALT',       'ignuurffukjz1mvxwfr1xyt5hvnxkmzh9c6lyct5e4u3hmlvpnmgbyk0rf65zobt' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvc_';

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
