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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'OoA&#ocJ{w,IlDYTG94GcS8,y|GU*.d_#%.rSWK^uJ^c_Ny(J,sLs8kBrBv?Y5an' );
define( 'SECURE_AUTH_KEY',  'Y)>@)go8Y:&,,$6U|W2q]#e`mAGZfgf~7IqX9iXS+K^(b`(k%jzsa3.sZO51COdU' );
define( 'LOGGED_IN_KEY',    '}I]9N]=JEecC%gVLJ^vn)w0LQ|xoPii u?Jdftm_P9awMediI%e<w 3CCdztq*e|' );
define( 'NONCE_KEY',        'r;czQs$$v/`?{O;cOTX5:fo){|<aBZ%Hm5`UU$/khOPAi[FJOURqyGgd#x=Oeqtc' );
define( 'AUTH_SALT',        'v%t;a~q4%~Q(DalpX=l`+UE#&jMXS(BM HMUATw2U=V[ZBJMKV~4n60Kz>Z4{>,y' );
define( 'SECURE_AUTH_SALT', 'G0OVG6yrUW*5Ndaog|*V|1L.v3Y1v;?%U}axFo W)R<{a%R@Zq:Zh]bAe/Mr`;0z' );
define( 'LOGGED_IN_SALT',   'e4$88>*Ki]}f]<-O3k:$E394lC?v!(2-QRF1cu831~q -PV_IuK8(]aRA[3mS] S' );
define( 'NONCE_SALT',       'vL&B:N^Q%-t[:?afk3+0.Im(lI[;H42{#+oj%*>jg~g:2%M3`>{$QK,bIGr2* [a' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
