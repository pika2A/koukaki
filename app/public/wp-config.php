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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'GoW}WjVsvd)FzD(P yT|_@I[<eu%2oBqN<}z>AO:Y[K[kEJodR1AF||3f03iJ(uD' );
define( 'SECURE_AUTH_KEY',   'E&-?;59nO^WLOA *1.kow!ZT`O2S-CpO4#9DBTnLt|n[ZL:W-s{JT)azVz~tH&4.' );
define( 'LOGGED_IN_KEY',     'CRt#,Rwc|I,rLSbR?s>Lb}JkYvc! ?aC28v[bQ$6y(}Spb7%(jwQK=MR2w7*]7g4' );
define( 'NONCE_KEY',         'WKUE2{Jn2%4AuH_uD?U}e4z=b@-sPqj.gvBYSY6p[AmDb[}t5MUw[$Xmh1)S=u:N' );
define( 'AUTH_SALT',         '$WQ/+D*/S7n-sEjp6~6G/S9:[ 7:k G)Rj`6X#}J6#ZZfF^B:xDdxcTZj_NWN^9Z' );
define( 'SECURE_AUTH_SALT',  '{b1P[E^@:h!,9 @{WQaJE);UpBkSN{>&%=59r8P]rAiPLBQAifOTrY{,n~.4#r]`' );
define( 'LOGGED_IN_SALT',    '=8  IjB`(cJa|`MvD}BXQh<HH4Z$VM;@G?-midY8Koxy6o#sN=uk_0C|2N8d|;N!' );
define( 'NONCE_SALT',        '/F4>Sg|uu J++T~k(2B}g:]1Pk^<rWFx:d,rP)+mM~b_U/u-Enz9fjeC.0sjb}56' );
define( 'WP_CACHE_KEY_SALT', 'bb8_&&M73Ly2;K#Vf8NkN(J=9i|ICf6Zrv|vUFhFP1~} [:3]6;zg9|/%8ndLm{6' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
