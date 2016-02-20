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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'w}kP5335iMqh!C,Yn{/<..MX<m XkK8I8-E0=DHppBOnWsl!-~@ >{xvw7A+]pyH');
define('SECURE_AUTH_KEY',  '?;(N7-yn3q>(xe});[+YX/3x.2mGQ9r{n6Tq,ym;=-Q]7xINJWiyx/ieD)8<JU|;');
define('LOGGED_IN_KEY',    'T(xYbe}bhBeD[K}k6|22-3o@{!;~Ek>*+ER}Wn).Vp9H$b]B*GA*X>wmNR-KgfHQ');
define('NONCE_KEY',        '8rK7=,DTl ~dbOG/(zl)Hy/3v |>V:h}2|@cvpM>9u:MV+a;$uu7t{n$|Yy*F|)U');
define('AUTH_SALT',        'c5qYPMHIxmM[fJei|Hx g(y-;]34G>pcbIVf/(n!gT-m}w0GHq[ra^d^7|{)C+f{');
define('SECURE_AUTH_SALT', 'YSqkm5Cv=kv}dQ?*,uEJ?>14K<-9aZ!R~/KUa$XUwdy}8U|>KH|J-/q*[hbeZ)bz');
define('LOGGED_IN_SALT',   'ixuL,eL(+p-+C8E}wm-6uPK/W@tc46![WgmA#g uYu:f;^vSs/=+UK:Ud^9QBAHr');
define('NONCE_SALT',       'zi#Fk!6jLSv8-eJmK@r*9^#Od; /w5):giAB8alybg` *<5~zr*y}CS3V|u7TaR4');

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
