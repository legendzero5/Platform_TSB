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
define( 'DB_NAME', 'tsb_database' );

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
define( 'AUTH_KEY',         'xoEk`k]u:}iq}5[VZAJ5Su>j5pnDVC$J)5me/a._&D|V{.U 6WOwq#;&7Jyniw*4' );
define( 'SECURE_AUTH_KEY',  'Y4gIf)A=AS0UAoCu0.,eER~v01+E0}qQ-Au*x`W)Wd/feV9}G?l%ys^6;o5_bJZv' );
define( 'LOGGED_IN_KEY',    'Y%$BLsWQj4,Xe+_Ffwh!jGzhrs{g$)4[Y^H7jU>D2ve5Qn=h{$V0,#:PE$ccIjq!' );
define( 'NONCE_KEY',        '&0Jn=qD.U9k4kpGw]>+%| M(1rfOe|RKATY;8*-zf[)PiCRx>RqR8+1_q+5j=r]X' );
define( 'AUTH_SALT',        'O Y@69nTiK6U-}>Xo@8OuaXo30.V#mmb{)|[boC+K-*EIn,m4keg~KE{-$2uih&U' );
define( 'SECURE_AUTH_SALT', 'iX:a_&sXB]s2vs#RPunR9v^r6iiwB1Tk0?ew67E=3f*1+ofF$8C=J54UUa2unE=K' );
define( 'LOGGED_IN_SALT',   '^79*|A-JLHV>n.Y-`hC+vWkx,oixOe=:e@Wf*l3j{q.&];:#eh^P5lU/:!;o-dQ)' );
define( 'NONCE_SALT',       ',U6TzQMlak5Z0Z?f>rGw|TZ!}*`NACLbzyFi]`>~yDNr{;?;(c;fs3;Vq}TxUyU:' );

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
