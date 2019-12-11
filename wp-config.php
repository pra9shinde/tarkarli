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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'inc_tarkarli' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'uB@c()DNxYB2Ln{wC OI:!BeFO0O 0E*k@&1 J2^kCM`59*tYXd5nZZ+dr8A`@nY' );
define( 'SECURE_AUTH_KEY',  'knGFMfV+wq%Jd?WmNX[`IZz^tC{ZD2&nhT1`,xZ^kAqNREx#{f=Rljw Ux`q,P_L' );
define( 'LOGGED_IN_KEY',    'E$t#D=nzXl>p5VWS8B$<^JK/!_#:r~phy9OPd=%xMWIhDC z>>Du}K:5Pf{k4P5>' );
define( 'NONCE_KEY',        '!L3E<Df7;! }EcqPw|gV@_n/m{=o3n=Ry3./a/r.O9bHvaYU@@`Qe?.FJW19V.yN' );
define( 'AUTH_SALT',        'v?I3wx,h.&jRZwmR<J>C`1R!0@W4E~c8b>BYQSdA{G+!TpNIdWvS=_=L{xWj!T?u' );
define( 'SECURE_AUTH_SALT', 'ye92^+5ScRWefX?_HTnSk[0-R&79~YombPa`-`2~W@qPt`<T+iUm*bt$T4+EwczU' );
define( 'LOGGED_IN_SALT',   '44O<+N>u7X<;J0$nut;+o=7nyKJBU{77QKl@:vxX}$l7qdTI/[Ga DXyEHnX-j5Z' );
define( 'NONCE_SALT',       'fI>ARo25qamC4!Y:zX8r_p]c6+b:|bbEe{zQ%IOHTH%o}kW}>:7x*)Spc%5~d.Ha' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

define( 'FS_METHOD', 'direct' );

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
