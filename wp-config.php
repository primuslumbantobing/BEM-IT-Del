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
define( 'DB_NAME', 'bemItdel' );

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
define( 'AUTH_KEY',         '/EMHJ RYir-?4Sw5+>)WQ.O1k5=V=~XZXd?)0u_Esp*`/VLV{:(BjcQ4:fZb{isr' );
define( 'SECURE_AUTH_KEY',  'm*Ho<wRA8P!G}*BXrh=;<DM?|em$?PFaVLH#K%AjSeeJS3[cX7zRv[t2+;n$(s]5' );
define( 'LOGGED_IN_KEY',    'G Hy=dw[Cn*tszj>e~{_{KfO0LJNFerkN%ae3_ow ]IZ,LR8ZVhS>O4!y.S,X;<H' );
define( 'NONCE_KEY',        '$[pg3=iT2{;`)MXZo:A}BAR?4GBJ#0Jfqz_fazrSyCAP@w$DNvftI.2I`fi,5HPP' );
define( 'AUTH_SALT',        'pe+]8@[M,e[[-kpZ=0?JdK-QD0f.Vu}}R1Mul+~0erdnOQ<[7Lh:h3 35~OX}5{I' );
define( 'SECURE_AUTH_SALT', 'lX |9S0_RL%I3RWK,^eW`n7?vjA3<Bb|JQHC.!aatf>klN^-y;skTKdbB^52W5BR' );
define( 'LOGGED_IN_SALT',   '}Ivo=wj?Uyu5IboZ/nN5{*2/TL}NJ~Tf.E$`S7plj^{TO~?v{w$0FQxy;F:kB@BO' );
define( 'NONCE_SALT',       '?z=Ik=sole:BM?A.m6Qy%[-z`}=_A*Sdiq7W`}<#*X_y<XYlEU&Jx_W8.e$1@R3`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
