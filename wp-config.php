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
define( 'DB_NAME', 'kalea-website' );

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
define( 'AUTH_KEY',         '-[dJV=/&8/L;m&6DwKJmc4km|kG~LU]3--{7L&KdUz/s|h@g[3Id[+k$2?xO_ML?' );
define( 'SECURE_AUTH_KEY',  '!(C]df3rV[:+GVR99_@T,6)G]2^@)(.BMDJ>Eo}x3BFGL)tKb?nky!zb~a#ssq%8' );
define( 'LOGGED_IN_KEY',    'k;1&![K$sx%Z#d@Mi91_vX$.RkyT+y/C^lij|Zr3|y3 Iupc[N>x0iw#DkfK(@E`' );
define( 'NONCE_KEY',        'V3=i_*aJTR%d.-Et]8:3AVB=QG2Vq2dC_ocqx3}%MR9zShVmqAZj<xIHDEs7j38`' );
define( 'AUTH_SALT',        'W7&7U2V2]1^va_dlwnTr!s(dSIs5-&AAR4D7WX:RC78ld]1;xvo!]UD^lj-HNqZ]' );
define( 'SECURE_AUTH_SALT', 'sI3lF09O<)lXy>bJ#>u a)|Ss$z2B]FYA:}d.+_=`l1LFtYS.w*~o2N0?.h+*+ym' );
define( 'LOGGED_IN_SALT',   ':z&)l<C&qHhZwQ?v8Q$cEZ5^K()p Q$HZ(x~![q794C1;gWiBN.B5S;qu|N@AW-y' );
define( 'NONCE_SALT',       'FewJF{%;<sf#r@yv%LPnWBpNG?k@xj9n),lRiiA616~^`pKg}ueIq)<IH(gG-a7a' );

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
