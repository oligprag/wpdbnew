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
define( 'DB_NAME', 'WPDB' );

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
define( 'AUTH_KEY',         'X!Y/zX9-QCJ11]*6S =Dz<q*KVg*8N$QK.fF]2=`P{>%*?.#`NqQ/,d82Q8BJ~OJ' );
define( 'SECURE_AUTH_KEY',  '7m,`g7Kpf%dtJ/M:<$Opv{}.Ob`Ov`HofJ:Y,pA%wxr/-m5IMCD 7eh;dn}u!YjZ' );
define( 'LOGGED_IN_KEY',    '~ywa(Be+myGg(rp1d}s{ 0@$*Ey&5^  [F+T9QJ.-RkSpeF)XlOZy>z?0KOwvq1@' );
define( 'NONCE_KEY',        '50=l@xgVWpHFmO|6z};q}Q!+USl9D0m5|,oYT%P9&&)~Vld5^L`qE^l/tDWX1!S[' );
define( 'AUTH_SALT',        '>wn[2,_m,roI ta#0mP+3}0hj?*y+c/p;t~WP+S aH)]OLrCaXJkM~H~>M!ToTu6' );
define( 'SECURE_AUTH_SALT', 'A*f.l,C(!iLLDDRuht~z2|3mO($L}5Q5XAsB  N><7R*$c}y+eabnxpgTJHV(sZ;' );
define( 'LOGGED_IN_SALT',   'spu0wO}R+cVA;qP_1OLsmZ@&01TC=e|!gPlp=TX,!YsE]0F2_d=8Dpn&GaKuZj)]' );
define( 'NONCE_SALT',       'hh]2LLf_*5cZ%<9Q&2tp[)>uI5_5l7G):rJZ68~3A{bVt&3*%e4h?(H o6]QY:81' );

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
