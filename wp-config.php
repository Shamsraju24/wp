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
define( 'DB_NAME', 'eye1' );

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
define( 'AUTH_KEY',         'fT;!N*w%f()UIW^!^hn;h06iWHJ|86NtKN,-T{v+0]P/A2a_->,(ItR|fuTk=H8z' );
define( 'SECURE_AUTH_KEY',  'yN!,lkrv:zHRR?USkAq&iu?.E<0e:mA:_I&*b^6LF~=YI_T=Bg(W=#.8QDdk]s>&' );
define( 'LOGGED_IN_KEY',    '2Q@{(4/yT$C}u%$`QAZtUeX|_#Y} /rBy+OynH+i7Hbye=S<Bo@7JPFF+J/m$*3W' );
define( 'NONCE_KEY',        'fcOgA5phsZi=3E ><hAuV*<.]!~.ZlyHhN!ARam&,wF$x=/Wz(zy_,MD&P<ZWyM!' );
define( 'AUTH_SALT',        'oE]KJ|fZ)sFh|wJMIu|=era7f{NG;kOgEL29II5jX2F%Q;)Ly&dLHc;xb*yEm.c3' );
define( 'SECURE_AUTH_SALT', '9&Izb*@U*^M,Pj@r_[Uz&UblQ0*Fa%![bx[]k@qrV5pY.qz]blRAY;nVp@Ur7Y,#' );
define( 'LOGGED_IN_SALT',   'i`LpdBnON0_V@`f}&|q1;Wk[UqTF]Re4z(y*;Ly7G@pfx<ZU9}ZhbEU*v?n9sHOA' );
define( 'NONCE_SALT',       '(co]>V9XZEQFKjp?:mqtCH%WjIy4[+Fu5y|tm)Z56mv40_dGj!DmKLJ;!mRQ#D[-' );

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
