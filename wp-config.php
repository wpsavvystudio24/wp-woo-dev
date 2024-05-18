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
define( 'DB_NAME', 'woo-exam' );

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
define( 'AUTH_KEY',         'TK:3r|:=Xk0 (]nMoV5{jkbJOQbE{Z@+UC(I_w{C,`-W}2)n]JygIT..j7|9ORri' );
define( 'SECURE_AUTH_KEY',  '1#Oxzjw@NE*$+c7{7Uz>oMu1KR<b.]s7Pc![_01?Mh|>PvZ;8hs.rx^*4wUy@7|9' );
define( 'LOGGED_IN_KEY',    '3#6+v1VV 6x4{PsV|IV!}T!~nGK^6qC5*yMKC 6oW0f$9(H6~!u8J4rV|R_O{[; ' );
define( 'NONCE_KEY',        '0px*lY00dWpx[l9IgCla4)U>T2s}*GHQ];YN.SL:C?(Jm7{~AW^=@5Q@)^r4Md=T' );
define( 'AUTH_SALT',        'IMe]qV-parQt3h%BtYyDuFpIJ-R2p*yB6K3H7lw(zBgln47eeJ{v0/~YXm8ASuRH' );
define( 'SECURE_AUTH_SALT', 'jnovK38MbI=1Q/kbV~Jojv|5Kj5X6#Y,38x2aK2He3HKr_^e!ctlw{1&NH MqEgI' );
define( 'LOGGED_IN_SALT',   '5=owA&}-R.Dlt@lJY/U|Z/O/}(RSv,N<{d~/Zu0*b1wC)XO.b;~N<3pv}VF)pT01' );
define( 'NONCE_SALT',       ',=+(xd-D~WZ9F!<{h(Mswt.kUY afM_417].?UR9JV5Lha2FD_ j0;1.j-9R!(4L' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'woo_';

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
