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
define( 'DB_NAME', 'task3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Y9@_29^K]}G9i_NaQqv}W*hHv7N&zHK9c-^ci`H|]iIH::3*?QN,uO:Y2pOH9pE,' );
define( 'SECURE_AUTH_KEY',  'it_k2mjHrBy{Jrk#|lBhBt^MRl:+JtIp_9+z*cKHQ<xkblykzb!dxz2&hC{^+9Vs' );
define( 'LOGGED_IN_KEY',    'y#~{=6)+>lhC[,7wrw]hvaY A{|c.Tg:q(:t9v=Ee-X_jt!P16U| k4LVIcuZKF4' );
define( 'NONCE_KEY',        '<gKdydEo6QF<~EZws/U2Tpb@T//n#;Lj?[Oq18[3Q-<4=<,Ckl}}Ikm_VXoa3^G=' );
define( 'AUTH_SALT',        '#=Rey#x,N/_V5dtL8VR*/|/3i69Dn&@KZ^R}Qz_VE9n`IW,=S!}[ax4LI5o.~8P1' );
define( 'SECURE_AUTH_SALT', 'qAArXAeK)y2G-d}*/z;Z7dh y2<S!}.4v9;qQ:d@TMtKE;$.pf&[h0ZneC>v}}{~' );
define( 'LOGGED_IN_SALT',   '=xAcjVt8N=z8p Q?xY$#f7Ao:n>)q?lWtGwE=]WS=2<=92MF[uq6off3{4H/op[C' );
define( 'NONCE_SALT',       'OYqhfHzW=hlF~&V_~<3QWw<cZNsui+0VI)WUfxJ_+?XttX^YdBC)/_kzjpg+gi*G' );

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
