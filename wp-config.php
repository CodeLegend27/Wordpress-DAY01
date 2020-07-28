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
define( 'DB_NAME', 'wp_db' );

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
define( 'AUTH_KEY',         '=ikU>,?VMfD0?*O}92LSMKKzunNNdd1VA~0-0[KnU-00&.X75#/ah=?4a),4Cg;~' );
define( 'SECURE_AUTH_KEY',  '.rFHr]`G%>crl$Wk0RV;z*({i2[c~ZOrjPjvDPaQbHGAQ4z?80HHBTg =0z0^BHW' );
define( 'LOGGED_IN_KEY',    '#PCthyxzyTMG[Id!_6klhf5Ie!e 7rrM2yRfwKrsw B9$#(RF}elBu.1Qh#b*N$C' );
define( 'NONCE_KEY',        'Rh_#+CLe)fTC^Oxt==w9F`oo31g7-/T}jH{yA#^{KFp5}}QsmVzkIUlg&5td=`{p' );
define( 'AUTH_SALT',        '^}.i?Nh+~R;wUV;zk2 >mYGy6B0Br;Vg p:$7]<(<Jiyk1]O|$)9Va:m?YdwlvV}' );
define( 'SECURE_AUTH_SALT', 'WgN%J94D.*Ct[C6cTso=sK6xTRFQ}Vd?wT+;ay3[n8.MT*w PUH|H-A1I7K(%=5]' );
define( 'LOGGED_IN_SALT',   ']BN3qP6<T*Nc1;X}BaH-j2wVo)Q>984%~?8.c@St42-0,@!ksbuo^l/l+6T646mc' );
define( 'NONCE_SALT',       '}6m!qA^c?Tz`;J:5S:LhPGg2QG:Z%X-7mT[j$yn8meqwdFFo:N*)0wT`mzgSs V)' );

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
