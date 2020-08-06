<?php
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']GV^8o73{ILw=JK7{*pkP.Sb@cy%2E[Vz0x $@>QLOf:)Qm/h/B+MBQUoBOp/Mv~' );
define( 'SECURE_AUTH_KEY',  ',d#pCr+$n_kj#_faoHWe @9PJEr0qT0>Q+0|oI)X=D{v]}*$r|qK4B43FZv}jmw+' );
define( 'LOGGED_IN_KEY',    '(S>jazv=]`?]~/:8H>[tTc(AuQ?^A/BJO?XN1<JHD6JLc~Ty=%5TkIcgaXe}!HN+' );
define( 'NONCE_KEY',        '37Tz(7#=II*B}GJ{y4^y1N#S`:2|.Eg&_doyze/pXp[=B|nB>+ 5r9iNc[6uY-@M' );
define( 'AUTH_SALT',        'C+j+fxx)ZExc;T(15hy0>vE;mS%Mg tXXSCC?Q k&l{lZrsH V/sI8g+kmh5(w-G' );
define( 'SECURE_AUTH_SALT', 'ok)m7B0$y8@Xglt=7DA4#U`l8iJc E:c>I$(qL$h?nOXPl1K+vJ=?K-c=/Ad$I%A' );
define( 'LOGGED_IN_SALT',   '$[AE19*+pufY1W)lRwsZ 8!nb):0{1KiVf0}<Ug/%oj04r39B9XHJ<w3h ^i3VaJ' );
define( 'NONCE_SALT',       'P$>.@]roIt$1w.h7;fY6mDSM3VZAz)m|~MVeHfIM|1t&|R|8r@Gb>%vv6Sl+Gnd6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
