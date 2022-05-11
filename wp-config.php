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


define('FS_METHOD','direct');


// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'todo-list' );

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
define( 'AUTH_KEY',         '>73&EpN_6*[ FF{wz}Z%b&jyW_6#vm*vup>2f{V^%*^T^7;.S#|nhGTQNpKBbnFo' );
define( 'SECURE_AUTH_KEY',  'g!JiR5bzN~2A5-IVFLVVjrO:bDojiRvC@{ebtO4{jo%)3UV wmBq[-QacXh[xi:n' );
define( 'LOGGED_IN_KEY',    'Lt`!4eJ&Yg+4/dvY?^uOBBHTk 5j{HNV|Kc-=}LNJlWwRa@%8ofpl6F@qLu>Xv 1' );
define( 'NONCE_KEY',        '^/YpJ?iwcKw$UUdNj,K5O3=/v:>la$DV !vL:)Xm0U2PKc8?[#e<5jfwIHv5@Xeq' );
define( 'AUTH_SALT',        '/^maDU8T};o8%lI2o//,xs2-Vikz@!H/lo2v-M`:c4@T/v_9[B@hfqw$Z%7w;r{<' );
define( 'SECURE_AUTH_SALT', 'PxLKTH%#7 fi}x_VmL2!`SPtP@.LN| {U3w2B*AqKIBX+I>!U8k)L88|4%X?$!+!' );
define( 'LOGGED_IN_SALT',   '$$*.L@N3rAn@agYBK`r6^s&`1k)mG{mBGRiblcyP<!WgFmnfc{|Q+;uf]`[r9FwD' );
define( 'NONCE_SALT',       '0ND@}h;`2nTkB[DFo@@W8Dr1yeINb[jISod^)x^ZDba(aH(]SJ^76daOIycHLbv(' );

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
