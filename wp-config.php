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
define( 'DB_NAME', 'hadisetec' );

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
define( 'AUTH_KEY',         '&F&Ml{P(09$d&,w@A]`>4$nk^b9|gsO@M~?M FuKpo_0SK?0.)&D6626,6piKi1_' );
define( 'SECURE_AUTH_KEY',  'U`Nna.w2].osgkzKPj{$HF!#Z+nHV<vYD pQ[03D86 c/3U&u-vI`$QR9&aQst5E' );
define( 'LOGGED_IN_KEY',    'swk1QrhO6,&_$UY~U8C9ZJc(jQ]}Hmp(K_dJo[SM`,r`Z[QARIfR(.jOC]zi)d;;' );
define( 'NONCE_KEY',        'CA5Q m%6Lh~fmu/Di{%GjS_Fh24?d3,c<mR;-=/oJE;c#$Sv!wD*/QWz-~{+[ #6' );
define( 'AUTH_SALT',        'pOh33&O>XPsyEO<`V#&VB@-QU/oE.c_ cGr!Iq&LzB/];Q14)X/s@y!FvZ$K=- o' );
define( 'SECURE_AUTH_SALT', ',l-2be>+RXY?%wn_Ui3ODFTzYx%=<kkNzQWO5KDKl>Tte0J%IRmhqE=`#leib7?u' );
define( 'LOGGED_IN_SALT',   'h_J&6gdCYFOs6&<pK{K4{Kj#j0fN,U6hmc(#;cwOZEEf`o45m JQ)5Q% =5&`X)9' );
define( 'NONCE_SALT',       '4hE[!^W0S3J_oQt~P&dD0+Lt.2&0]@Y1yQa]WhMxrx Kg-d-Lh=rq?ytP0se%p%{' );

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
