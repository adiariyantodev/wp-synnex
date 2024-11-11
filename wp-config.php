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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'synnex' );

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
define( 'AUTH_KEY',         'u3f}X6S&dw_L;rs),ss`)+5z1uD&8,B*6B<M_~lA1h%- <)|n*W3Hn_};bRk,;<q' );
define( 'SECURE_AUTH_KEY',  '/0@p(860rQriyOvX6dP9?c|B-K/Y?/=CLALtRb6#2{tX^Fmw&8nU@Pn3m0l~K~_h' );
define( 'LOGGED_IN_KEY',    ',Ov93`,= <EJ:GnDY!e~DhuLNs1tB(b0!6v`Y E`~V.P}z=S,yG21J3 vaD9<`+O' );
define( 'NONCE_KEY',        ';`0}z$xD/V<!AWbYfn?|.m_PJ> cvjNey]J;eH>xH}ihv(/rrz?:Fe $HarXLte8' );
define( 'AUTH_SALT',        'NWa-.Zf<S5hu5q!(tKfQ`&FNGPPO`?%RL|Q24>OY;B:Vc{@{FeyZ+?cW2`QYd)ff' );
define( 'SECURE_AUTH_SALT', 'spRzF6=yp#]2cKP2I$^G5vTYK,#eJC7$CE`gnpB5^5, FP#Hf2p<ZN=wQ){(yK6`' );
define( 'LOGGED_IN_SALT',   '9JggO, ZLeHNSqUhlVf~hy|OQq~W?;Lz|^=9_ {s^S~DOGJ]k)=nIp0>4GW8:iT7' );
define( 'NONCE_SALT',       'B%QJ]_Vmp51;{Bm(i5t~::)k7=%,Yn2Fda2(Qv?JDfh7y:rW6,}oUEKU@/p<Cq-D' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
