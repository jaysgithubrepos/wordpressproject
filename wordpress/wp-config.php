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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '~n+dw@~OT{Q4 QB?S-P)MA1|-RW>q)CX-zz#*&oy4]AEds6;1+Bwt:#+@&Z<;%i}' );
define( 'SECURE_AUTH_KEY',  'av2:OhZW%P|>(+([3}bzX8Rqb&Q>kpE>7`S3T)[1qg$8s%sf`&-EjP[~.*p4=>-T' );
define( 'LOGGED_IN_KEY',    'yFOWzYdgZHk;,k=w@<r<6b%^1ZiaEHKl=K`oC/ogWa9yXP;n|#z}ydRY]=(dP^~C' );
define( 'NONCE_KEY',        '~IFfg3jJvGgo]87L=ee}t_&|:^&y3j`.-FwSToV9bFI5<Q9vQo/9s,MTOk_T`(fZ' );
define( 'AUTH_SALT',        'LZ3^i0M//]-~zStHnd#<5stbo),#^N[`ojl?0(uzH=.z!EyYicMPttQ8H^j[[K1k' );
define( 'SECURE_AUTH_SALT', 'n,US)}|7w o0j^vH`f~1/M}v69[~/Wd|d;SSWS5sR7t<q((ET92$^ZIEkxWB:xGC' );
define( 'LOGGED_IN_SALT',   'm59cY5qnF)@2!%[cQLji]0_SG.z)]gXiNfWuQ=IVJ9(HNwwDstXY$]{^i6VcpC%T' );
define( 'NONCE_SALT',       '<vLai~pD[/QB ?`|z6NNWt.}}t)pzIX$._0!#%X hK&D]YUMs]0mSEYmtT%{=3=$' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
