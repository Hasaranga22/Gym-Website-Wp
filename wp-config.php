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
define( 'DB_NAME', 'resturant' );

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
define( 'AUTH_KEY',         '^dfAl1e3i!Mjdg*U{~ZVeW/BaBjKRE;E2AT%I&o)67qG_X_O]s?/G|[,fC.;WUV*' );
define( 'SECURE_AUTH_KEY',  ']A~v!RKr&A}3+T3.3Oh<Em6M$<.(!x9v:9y~*R+:Fy>TCJrxx<dl=PZugenA0dG~' );
define( 'LOGGED_IN_KEY',    ']Cw%U0O3WiGa3X[8H_p?4[qs9J1,-atGMLXlu1<YETE^vZ/8x;-,-.R]5jK>wI@t' );
define( 'NONCE_KEY',        ',Y}(z!r8#=^]maBWJ$_ o<QQj)k#1~6rMtg?g?jLXy {f>7n^es~j|%(H>2XX%9;' );
define( 'AUTH_SALT',        'K`4|$4|GBFl):M}QT1<n#lp>9K+BE2IyFr?QB[se(#FE?FKb@T1^l3xqQXawwDZ^' );
define( 'SECURE_AUTH_SALT', 'B&DmUPt/45Ua~jC4Rl@X0X+?p!55|>l2gG^O#luMd,aSGE7Iy[xc~PpAQ]%m!4gU' );
define( 'LOGGED_IN_SALT',   '?%O!p*vT6EmCJN+)_)S9iG<$%&cy!k,pFeT*7D9c>PjZxBds@K@TL_oS)qWHi=]P' );
define( 'NONCE_SALT',       'O,r*%rE(#@*$:m^Rwr.)`sV> h LjQ5GM m^|D YTv58-|vX)?<!^m5{GQG/veQl' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
