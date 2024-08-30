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
define( 'DB_NAME', 'eoroewebsite' );

/** Database username */
define( 'DB_USER', 'pma' );

/** Database password */
define( 'DB_PASSWORD', 'your_password' );

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
define( 'AUTH_KEY',         'EI0&==aI<AL@mlzT`0H[z&YkRV&GYx{zpFL=(qh`HHhgu]q_jT#$lo.f!.kNR5~]' );
define( 'SECURE_AUTH_KEY',  'bQ:<9jOjMouEF9p8ol!|-t1sf/*!qIx|^}Q<n@,`n3!n`0Vm.vbC8LD_i}Zf&Cj)' );
define( 'LOGGED_IN_KEY',    'Tnf|P*%=-lCy[`J2Df{$huW!Y<>?$}3I:cdVl4Myge,J@_xr%c-{}D&Bzx@Wp`xD' );
define( 'NONCE_KEY',        ';r59E1!x3]PgkXJbe(QmjGu?<;H;o5o2*NCC|=W/uhckaFICR_=f/bW=7_`ZVa/`' );
define( 'AUTH_SALT',        'o|!xp!<K&7##eu,`88$mD*~4*xk4hb]Fs2_eMO]Z]T:8?$<WxvBK`:;&YoA~>M/&' );
define( 'SECURE_AUTH_SALT', '> r%wiSI,JYdN-,Q4d$aF/7}9>9SK4gt<J6|suQj]!1Zvn^UH~]zLtl1ib.o{@W0' );
define( 'LOGGED_IN_SALT',   'v}/N6@lZ]bvn*}9e?C)MwUedP7<C <.z#s&05UNZyq#N0BA|<d_GOK7vH]]e&SAP' );
define( 'NONCE_SALT',       'G93H;Mf3Aj5jIw|SsH#[gYB*:Z4Y4)sW-8}kU#T^hT4brZb3vE=8ne? xU}!5{kn' );

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
