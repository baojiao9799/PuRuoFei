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
define( 'DB_NAME', 'puruofei' );

/** MySQL database username */
define( 'DB_USER', 'baojiao9799' );

/** MySQL database password */
define( 'DB_PASSWORD', '!Ohio0429' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         'k8GrJM>pE@rO.:ZYg((YcW&}PAegJM9ZNc&]V-A])!L:L}{;Ak-RP ld|SmRM@>r' );
define( 'SECURE_AUTH_KEY',  'nhLqBG1mpH&%S}t?vWhT 7&O_i?hW+(EBX%tWZR4T?/o.Vi`>bCc+z7j(NJTuFvI' );
define( 'LOGGED_IN_KEY',    'lEl!Z:0A#R9G{ -L{-FJH)|y6|R{Kk~uFh7YfO(#cLu`kb(VHU>CJXl-aa+>j09O' );
define( 'NONCE_KEY',        'cF|)w6L+~4$]B-|x|e%.xwLJi,,{91#}=(AH,)y$*|?E4?uq^{6ab/o9B^K6A[[Y' );
define( 'AUTH_SALT',        'UC;:$F)+,=^Bl-*L$xt$>|F.PERWy4?c;x#8Ai`+^Y|=]}61Cr-7pe@q]{]4;d,l' );
define( 'SECURE_AUTH_SALT', 'm@.qRhuxX(j0FJJsH@I=jS#aQ6HY0)!T;Te|&*o)5wj6Z@D<$0d}T#f.Ud0Y_}02' );
define( 'LOGGED_IN_SALT',   ' xvDat=^vnx?tTZL6E)Y?hzs[GMX+I1*pux},!9xOuUibdfLJ[|Trd@CX}1J:lyw' );
define( 'NONCE_SALT',       'Ng!T(YUF!|a9dwaCy;tqV,)0O($i%T.T(l>`E=>9%6]+cEo{?#];R?1;ImS)83 <' );

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
