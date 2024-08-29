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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WP-ROM' );

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
define( 'AUTH_KEY',         'S;_ =`uv~sg}xA+K)W.JJ.j?&+}Mb1?YyNn+OD^TX%90o|Yi&}Ry#?8(XpCX9n4L' );
define( 'SECURE_AUTH_KEY',  'Jozc3fx|8$^sf`]&M>fie_yx8@:c;fWC 3AH&7t+&8vKh[)YR-1]<3X?1AoX^))g' );
define( 'LOGGED_IN_KEY',    'b*,.Cr:gO;,@JH>$bU{I7k  9(s$:2, <jw;ycf@B@B|&NIahKzAu~Z{_8bHkUPk' );
define( 'NONCE_KEY',        'aV+!&au>D}bk./h$W};kuC4deu:Nv9F<|/!Z<UTErGNHbOj&Ei4AtiL$Ql0Q}n?,' );
define( 'AUTH_SALT',        '$!qF}It%166hLYK6=$P8K!%eVrvF|;b<E9!VHmv<mc<rT;/z~UExN(EXz+Vt-51x' );
define( 'SECURE_AUTH_SALT', 'nKkCc&DjLMO(N7Jh_i@|,&B,9(Y{l6olX&tBPdWUgEP4>AqohOY@:f_uRx>J8YV$' );
define( 'LOGGED_IN_SALT',   '9YoIuk632d.Nn<YnAC5Kl#@`MXzWlO$W;AqaKGri]X0rK]cem1L9ZWhz@u(IDLI.' );
define( 'NONCE_SALT',       '#YFwt,?<Ri+,*pJM/D%VL<htve0:b/Xb27VC(<WWn|@FMJ}jFEM}2?(dx0iBS}X?' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
