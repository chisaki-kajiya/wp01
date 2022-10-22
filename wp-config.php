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
define( 'DB_NAME', 'wp01db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ')/Z}5vgr%Nu.R7?6`$(il1t*XTB0]C$0]<.XE`=CA9A7>x%Oq<>b76m`!J4+68H2' );
define( 'SECURE_AUTH_KEY',  'e.)C4[JR3CIbw2i pODn]j$*67#UGb_ZR+S=(8QzQB@Wu}xg?WlA>E*bjy[:U,XT' );
define( 'LOGGED_IN_KEY',    '<coqGM2/Z6h Wk<r8$YmZBCpf##:rvENo;X3tlefE2q^L;(1?zcxW}Lg3iQn`=&6' );
define( 'NONCE_KEY',        'c.:Ey>sP}b~fYGuj_g*=R% 6w^CKX5C6qBm7VX#0!~n,enw;`}evg;/!K8M2h.3&' );
define( 'AUTH_SALT',        ', 0%+[-%pc$rQ,i[VOy^h!)aA:#t|`8]I<Fq{<ytV/$Q2Z`n7O5#3h|?;:k5~OPr' );
define( 'SECURE_AUTH_SALT', 'ZKxkxKb7^OqIHt1%?1#4L_uD7W~7dA[]/.wl79ex;!5-[D-uoH@.Ip(.h=a/ijkP' );
define( 'LOGGED_IN_SALT',   '~vQKcx6VS]Avt_wI6O:LS?^ H&!gieU{:OV0*%8oqVUk$.(n3KB)VC:}CULk^z@P' );
define( 'NONCE_SALT',       'c p^NHj`1M&r.K1 CWtc?<!n@7c=lHQH4+e$XU2RhU {~#7+6_iPoWj*cpIY|5Zx' );

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
