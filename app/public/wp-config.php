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
define( 'AUTH_KEY',          'H;E(Z#Q0w!S9?0~cn{LyD{RCRO0*jtv{Iyq KD5J -fU=6lm`~W%B)WH9GwkC!b{' );
define( 'SECURE_AUTH_KEY',   '99t1Iu-MuEU3&0w,6,hWof|&fm9WZpQq=OrwqOD%]S/8LcwbW/Qp]kT!9ryTAL%j' );
define( 'LOGGED_IN_KEY',     '[F%?Dt.n8YB#dW/i;8UZdOdkr7(UC==v4/Ane|]3R@HzkE,S`ZXUUY/1y/E(U=B-' );
define( 'NONCE_KEY',         '=@opc{+FVDp`L(>vCcvSG(#9l:tz)@*%oq~BQ!6a 5{5uofkch,,t.O?;o.Ek<bI' );
define( 'AUTH_SALT',         'r!`q3fi}]jCm)l:Ci$CLm=)`SbvT;E0-m3Z;R6`gBmNY/8J,eE]<EnrcPfM|=D7]' );
define( 'SECURE_AUTH_SALT',  '$A:FZDW1qi7r*q-w(l4tIOi@v.9|NcXL+i[-Z o%A.$1jy5Mne4oV*qw;k?o F^4' );
define( 'LOGGED_IN_SALT',    '`_pebF~Ys4~k]uzXjSXTg9,p0SD@]<M tvf@s)8dZguH0(HP7V$|Y4B.2$|Jt#m|' );
define( 'NONCE_SALT',        '];%abl&f!}2fL|L8(b#E|imC4A2EJ%@fC]e,SBXJJ0ZeIccuFKd?Wo((UousWI|,' );
define( 'WP_CACHE_KEY_SALT', '5]82RRI5,jYB+CJwj~7.HaD&B]~S`A{OTmg,=s{n0kt5uTqH)tm%wTa-<5fi1dG#' );


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
