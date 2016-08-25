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
define('DB_NAME', 'phpLearnin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'P_UjyRT5d%lgb^zkW]+^lWjtKZOA;^MX?mZ[EmC<K:o^9smc@oNSjI7+@)[ogmUs');
define('SECURE_AUTH_KEY',  '&.f6+m[En6#oL3L-{9N#w0? %[zweid8gc?hNG,?_V:IZ<RC!R=G=v,Mv1{=?/0E');
define('LOGGED_IN_KEY',    'MGz!AUL$r~{j^0hpqQ`CW95vSRqi@&br( py+a.]lYi<aKUI1Y{nwK4SWPA/H#vF');
define('NONCE_KEY',        '&p5W,!5m.q{Z3/2MJA-ThS<m/$%Z{3I$wykFu~P[aw36,yULB.h,GApKV~:~3g/`');
define('AUTH_SALT',        '4[079>[ PRrXSN^jqK/z5w4e!rG_t]F!MVJdlP)6HGG QH_=w&pG2Mm4#Lz~j_-^');
define('SECURE_AUTH_SALT', 'K;>T6:q>[9O0wLW%Fj/(|c{l9wQT@ZTE{<cv {jG}?Wi|am;/#NlX`tm}wvZ|s{x');
define('LOGGED_IN_SALT',   'f|cUNH_k3iu=P-aX+smPsQS fzNqzs5ZJG^i5Jx33f-q/Nj?!/dCo<6 52@>pK7N');
define('NONCE_SALT',       'wp#DmGV!xJ]A%~:^qY2H7,Qo]An!y/({6dtl8vY?1yBFubm>o[oGSyuSE9MNsJ(e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
