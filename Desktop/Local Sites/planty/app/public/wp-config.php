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

define('AUTH_KEY',         '$jGTs4M(7@H9Njwn=ghRS!!sKp&Rko+8NwnT&Bb.h|b1@g@t#hzH}o$@Q%3x.&~i');
define('SECURE_AUTH_KEY',  'Y6s]XVe~IxWhRzJVe][51npq_P+V4hT48y9z9VEJoHH1uM !g2Wyd,LRl721<?*');
define('LOGGED_IN_KEY',    '1OrRF<n4F)p a;9|3:|&+Z.Qb,F_gSKX]p[nOghn0a<.YTozlz<*mZSjnhqf9@sC');
define('NONCE_KEY',        'ci)S~}o[90,Ei2|Go9Sf0m?4A(W<e)IuS=RZO]PzeLKFt(Thbj|!c3-HWc1>0bw');
define('AUTH_SALT',        '@?P1gv07$1:$bNAsu6aVu=~HKN<6QT FaO:PL>+){jiXZ(d/LR-zQ^g%%4?3C1%');
define('SECURE_AUTH_SALT', '^3 e:u1lPF0Z}<nDFt?EWCB2+V| g0~=~<T]]9oc-=?i<3<753Yc+hUlh$=I^$_8');
define('LOGGED_IN_SALT',   '0l7X:R*+3_{NjX:v.mFUeb2k+m]Quds(6u;x-q+8|}[1 #>BxoKo!]Ho(N#+q C');
define('NONCE_SALT',       '_OLqA|WnPQ>OWN4S@Y]_Qjq4R7k8}U.8~e:-8>o|F:.#N3-lC^;YtBuW`=1^,e');
