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
define( 'DB_NAME', 'sharktank' );

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
define( 'AUTH_KEY',         'bgm^rgb(7RHVlXUUuxoYd/9a1ASj=XOF&_vCbg%QSuFy}Bh@P}@5Zj[M!kk~`JAY' );
define( 'SECURE_AUTH_KEY',  'x*xM:2%2$z,zjR(*aqQQFc`+P^D04FIh.NxL`6VNX.<%YaecVgDKMV8Vl(9~$l`k' );
define( 'LOGGED_IN_KEY',    '4 RHfAzHBo+kzLMpcOvB(,c>M=6VCCH?M8] #kKN0W47.TL?+]Q/poaF>K``V<Tk' );
define( 'NONCE_KEY',        'c)JAf~}/E7a<i<-]H!3v*j5|$AFu3T<)~CUwFNRS%88?FH>@l!c:Pv,NuMQep<zD' );
define( 'AUTH_SALT',        'b+]P~Wwc6u.KPuHVuZ`21-#..u!I1>D*Wr}Ke$g2/v#MdT7EW&w7r`_MfD}wdB=J' );
define( 'SECURE_AUTH_SALT', ',vW)V_N3z1k:Y 1nqy,kV0pT)?u;#J|v5X< ;OByMFnYO$JVi+*YXJ$y{G6I[6gP' );
define( 'LOGGED_IN_SALT',   'S*CR(Sm #=Km@d=1 4+-_6l=ueVR$w}bL1zo6b}q:kYH5s%9m=QF>7PG_(`DY#@~' );
define( 'NONCE_SALT',       'P>B VZ!KPppMn:M<49JYCva`Sm|5qT4CfA4{l2Iq_J9=#l^vYd!r . <J7z1N6u4' );

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
