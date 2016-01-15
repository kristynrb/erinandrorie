<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'erinandrorie');

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
define('AUTH_KEY',         '/<w4p[}U[96_uJ&F5Ewmi-WlB&u_mhd0m1a%<.!Q4.g]1,%,Jv-|zU9R|!5xBW8j');
define('SECURE_AUTH_KEY',  'R<*AT<}GW p|HxSCDdIYMV2sxn$Mn<*[VRbFoTj82a(Ra}>[}YhB[|e}gxNz!]d-');
define('LOGGED_IN_KEY',    'Ol<ka*2u*+vE,v+8[]~UkQ&|46`A%r2|AP[xz&~ +.;+..M,}/BNab]tpSa)Ex<Q');
define('NONCE_KEY',        '-WnxQMO)O7Mc)6-%%HkDbn$v||8-/8w`:}ozR+~m)S_,Mi`ZI=kPgY?PV.<T.D|8');
define('AUTH_SALT',        '-#*$c84;20I!-[{ig.GK`@f!ERS).9;^DBDZ9e|=ocA24B/2e^[~Np`u15k^2209');
define('SECURE_AUTH_SALT', 'Qt?$]TMTK#|i$-#n4:*G=[oNDb4l:Y]f.k}+VSeu!2*zbv&}E-qm+*_sq:)ast>-');
define('LOGGED_IN_SALT',   'W(ZXU*r=at+9[h%~!95}WizMb58@>`EY4v|5.lR?r<Zo~YA%BXM0qKza1in)7]Qb');
define('NONCE_SALT',       'n{kVNS-Tx5Ec %NXAK-kBpU)}TGa$rxJ?2qf^^+]c]?[!3EWBXH~}zI-|y^m1i,`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
