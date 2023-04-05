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
define( 'DB_NAME', 'bringon' );

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
define( 'AUTH_KEY',         ';rtamxhyGz/>~y-4Jy2Au.k9*hobe$|S^$)qh/e@zQ?}]sBpOna&VK>L_nmj}i+{' );
define( 'SECURE_AUTH_KEY',  '^hozrRV2t$PLhSFyA(k1V_}cQ/c_~#5rolyK;f:nLD26 o(0Fj4AcC}RWKd0W)Z1' );
define( 'LOGGED_IN_KEY',    ';S>5MFTFi3M~f.I;~`:2Y{dT LvE82ut?c  iz~n;_5&`P 7DN>:_&/HAGU278_<' );
define( 'NONCE_KEY',        '&lg5E8h>m>h5Z 9 #1jeLT&c.($j?t^JBrhrd!skQY?4VCF1cH7=:h8H7VFZ!?(^' );
define( 'AUTH_SALT',        'E0|5Wh[CzQMTfBpaSgjb#RIzo*.T5;BaYK&YO*/%0F.h]?r`2yw1*V3#/;#8lMJv' );
define( 'SECURE_AUTH_SALT', '+L=(=wkwVH/|UasAoW{!6M-g7n;&lVN-L~ Y8EpUON[@]WWu;}l<+rNr?xA.>MFi' );
define( 'LOGGED_IN_SALT',   '0C([;Jyuo)9TjoHk#bO> x.hoBs//t+:0c&OL|ppdNknooj4&J D`OF@S9,l3,>p' );
define( 'NONCE_SALT',       '9Uz>=$%uYP7CREIL`}*MI^h:GW(>Jx,u,gn`UC6iurdzV|C*FF0#v) cqU`Uf.}z' );

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
