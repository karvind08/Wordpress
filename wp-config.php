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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo1' );

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
define( 'AUTH_KEY',         '11ob&5,eZB.%[%L~HfOiLt&=%kLumf3OKWS80aVoz8LvG!{nj<]?vThSY&&]t RY' );
define( 'SECURE_AUTH_KEY',  '># VP!RmC3|(NiMy%U$GMSkOYQ_+Yt21_$$, AHSPoc+f@m`e+kd>A<_+ TZdCun' );
define( 'LOGGED_IN_KEY',    'a],mByr:>~TBRXB&8_ ]^$Hba>T9*j?.%Vdg<(TN@:w0=d?eh/(+m7k>*U;9?2L8' );
define( 'NONCE_KEY',        '93m#d${Cfu=*g/58z3Wqi9hj~O?>.TdFQWPz4@hR>8)R;JUSMRtNC:rJ.]dLXwnC' );
define( 'AUTH_SALT',        'V)$,&ho{)amc:w9A0^?EKYxyY38c/eXeeZ4ekUW0)fYs+#XTO>%FH[?$M(1kdufc' );
define( 'SECURE_AUTH_SALT', '+qISQs4kLGw;B.*:Q:t1+ZRO9/Bma>_I<sP_k]t[Qtluax58JsZB $w-3rB<yUEf' );
define( 'LOGGED_IN_SALT',   '~Xt|YsZk,nT8%7hMQ?cxfGDJ{Zli7g<iRm`-G<t^,f>24:1e%GOK.c#[7hW^PuB2' );
define( 'NONCE_SALT',       'WM-i>:*HRA[$3}]w#bJ3uKG~lMkTLtY[9KFQNf7%{7:tt%9XJks@^tp_3%[XhT?{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'SRM_';

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
