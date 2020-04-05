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
define( 'DB_NAME', 'swadeshifood' );

/** MySQL database username */
define( 'DB_USER', 'swadeshi' );

/** MySQL database password */
define( 'DB_PASSWORD', '8mlUnoic3HMHj6lV' );

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
define( 'AUTH_KEY',         'gXW6KPxBf8E0 VR&$s>_G=Y?XMETTGPT:`+k+]VGpMmQJvHffs]s+~xdma`u{^2X' );
define( 'SECURE_AUTH_KEY',  '7}on^*PbPAVL^06mx@1#yI[[/45lsn$k 0fq#5FPe^>O^[U_P_Qjj1 !CHHRjo`s' );
define( 'LOGGED_IN_KEY',    '+v@bnuZ!^3DXV,+TGx_nL]=4!3pLu`8!mwKdqg/KdNn46M^Bd{Z6%48u:/oNPJ10' );
define( 'NONCE_KEY',        'M/q,|?i@YfIMUkY-!X_WnhqGpVe(1c5)w:m[~<K~)4QhOg}%J{/*g49ecjG|^Sb&' );
define( 'AUTH_SALT',        '1b2+NtYA2E#6h XrLTB7Pb>Mge7]#8w>NPufZ#m+P42I6oafpOq5haW All5`YV0' );
define( 'SECURE_AUTH_SALT', '%MH$CW}EdDi]:-UDwl}k)+1^HEy^P#4_Rf)2yXjepJb`Wm(dLdeR%jhz6Iw!6qIN' );
define( 'LOGGED_IN_SALT',   '&5~< $+3bn]VR~Tm-Iiy4tO`cu]J3yIF^/YHVu:NssP34~tE7~/|LT%Ie>QZsmZ4' );
define( 'NONCE_SALT',       'L;&4BwtwG`|>^f 9+fl9aGm}im%w;;l*yl7c1JMC-2_^7S1+}Z(r,eEVg( XUul5' );

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
