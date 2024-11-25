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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'P3[-R-fuh/o*D%.P5KbS-?DLAH5meQY@cK%+y%<z:M:A0.-TVv7T1Dk E(3.GkrH' );
define( 'SECURE_AUTH_KEY',  'Nhhbvfr7mBw`5$BXbeR<SHnbhp]hSp!qtP:agDuK>ihZ:so,H*zZ/-Fczop8;B1]' );
define( 'LOGGED_IN_KEY',    '>%A(R5%^!g;Za9ueMWt/CTAdV8@ugG5A<k`B8AeGM;,74JL>@mO]<+Tl0i+&1cic' );
define( 'NONCE_KEY',        'CvZ<W]9)3knv6q0$(|QCy [.y&I+*BqBeQ;v@eWyuoyeKU?;5Se2? 3`1{(+LZ>Y' );
define( 'AUTH_SALT',        'Hr:dL_XgEXViDp=U-.&ti$(pt3$Z^L(KP},[>taedWdmq%Yy<xSxm&wIKgL&JD&O' );
define( 'SECURE_AUTH_SALT', '/`.F{lb#sQo6[K|;F/hz+]<;so`QWhjRadVb:T<ko`5#K$q|>YmdP8!kpv|-X/Mk' );
define( 'LOGGED_IN_SALT',   '?gea]w.|h?uD(JEo|iA4lhkztwW05jH%b~0:f.L|$A:.G>9nU{}UY)IXX|{p|_.y' );
define( 'NONCE_SALT',       'uh3E+SW+RFP6}[;:8 E^.F^63t?l@t^x*;?:aJx>16M &F.+^8a^mJsRc:|?%XLu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
