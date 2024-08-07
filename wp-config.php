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
define( 'DB_NAME', 'wp_db' );

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
define( 'AUTH_KEY',         '_{(Q]k 6XJnWhOll0YU`RjjRy^&fw^w_]e2U|@m+}VOp?aD,W3vtjePn1uiJN;;F' );
define( 'SECURE_AUTH_KEY',  '2xE5K;P.w-hEO5HmP?4MZ6~}<`P~b}n,i}rzys,}bx[W3m4F3R>fAOVB Xv]ETo+' );
define( 'LOGGED_IN_KEY',    'Zv_3.u~S4#^7ZB%5!&M;(Kl_pyboT-W-ZfDOTDyUVhmY:,}5hBJ$7O{B M_roaRa' );
define( 'NONCE_KEY',        '[szO-+MkW~0UOR7_&>bg;gXQ>7.tBzDP^_F&Gh5,8aN5bcvbal2-+QCsdi:.Qw-*' );
define( 'AUTH_SALT',        '*MDQE>)ibZ&Pjt_/~d_S*HBf_q03gYaf]9/(t.?Q{J(|o_hs1`U17z[)>xd61u:t' );
define( 'SECURE_AUTH_SALT', ':[L h8AE_u{K/?V=hn1B0t[H0cnD[bZWF-2?I9U023={1j%1.ZO6}l(nLt{u8:,*' );
define( 'LOGGED_IN_SALT',   'tg3nxaKk+%lqf%EQBcS<5l.p9~c!YKOw:ntpC&bx~B8v<~^Tqb0*3PS2[mCUE$x)' );
define( 'NONCE_SALT',       'cXFWeM}N$|/,t_S|Rv/H:X%*9Y]QM QAYW~h+OtgE-;cY)F|#}pxdS`pQqR&@bXe' );

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

@ini_set('upload_max_filesize', '128M');
@ini_set('post_max_size', '128M');
@ini_set('memory_limit', '256M');
@ini_set('max_execution_time', '300');
@ini_set('max_input_time', '300');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
