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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'fanflix_wp' );

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
define( 'AUTH_KEY',         ')[AYTz25Q;}}dVN?nYLRMXc:)5;]Ft7S^YlSY.K^XgGHu~j3FL(q)Qtb6~k2^B#!' );
define( 'SECURE_AUTH_KEY',  '><7r)_CbpXyv743[E$p`@IJ]c4Bv<)_Kwj63ZOuq]=vv}~DR+/DHsgm<][RA^jA1' );
define( 'LOGGED_IN_KEY',    'OZUUr !<]10=W$D/$ceooEuT,l{/C<v;m.HUpn`rT>}IV65QYo[`iJ{dKZ o+l:q' );
define( 'NONCE_KEY',        'C<HzJp64BWt1W_^1DA26fbdNM}y}:==pj8wV1Jbw}WORykxWFq2lL+vl-:+CTa^W' );
define( 'AUTH_SALT',        'We?XQNfgTO-j)<_E8N&N*%|0zKuF[8rGZ{h2J#W{x{0}HAENxC#RjR>1,C$_n-6[' );
define( 'SECURE_AUTH_SALT', '1nW8EuD:AA4i;Ga5<ckbY7j|d/}uUG*PabiuheV:XLH7|kAW?&Q^0h#fae,2#=dG' );
define( 'LOGGED_IN_SALT',   'sL9CV[]j)T7+nvOmXqo:t?Gw(g^_>8Ci2Djic5@B[>p)Fc?i :b#|}U+g]0r_[n]' );
define( 'NONCE_SALT',       'VX0T2is$2^!/ys+_FFWn<NgVqA.^sc1:9O,4Z{OE~&r#U!fskQ2Tq/gHz`}>1tS#' );

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
