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
define( 'DB_NAME', 'bookspdf' );

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
define( 'AUTH_KEY',         'eG9>EQ9bFZ%ADW{Oi+g)*:gl |z9{NtN[lBsU*:2~v|7D0NXVS-KX0pt-.7y.R(6' );
define( 'SECURE_AUTH_KEY',  '`mH~dDGnaF{Yb:_(KY6ol$p1f1~K^s2Qgm!F)g)-+cTF$sth6iW`, ukR9;)lT/S' );
define( 'LOGGED_IN_KEY',    'sbSfNZKMn &!]k9/nHf%)v.f&*]{vM6H;2usQ1fZ!1VLbEcE<t9e4`f6~,]`~P1r' );
define( 'NONCE_KEY',        'iPK(f>xrPy|zb{aBrKl3|p eR4v5Z4fql1keT*.gX&y.JH !Z1F)pk3}_h#*@ar6' );
define( 'AUTH_SALT',        '}Swx%xq.`=jz/b<W{ZX5j3Si0jr#1zOQx*@YMZNHYh3ci(:lFd4Hv#VgH>%^SQ?H' );
define( 'SECURE_AUTH_SALT', '3oC&,b&4{5yu+8#KV<XgS`8D{$s$&f+KB>)u>2KE;)?Q}xtGR-y6bP{B_q#7VG;i' );
define( 'LOGGED_IN_SALT',   'EQz7o&a)$R^hkY @-7uuVNs/G>xf?;>Di7V1N0$-)]r[3ZEK|SxRJFh,o{sbnQQ0' );
define( 'NONCE_SALT',       'vhYH.,{KX1FHv{/{uW]r>%42_vACUv9]0G&/8fvV2#s gQ$KkH Gd|pb}6LrT&Rj' );

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
