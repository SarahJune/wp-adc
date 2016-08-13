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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'mRO`mOBB>-3|7D,P``.z ^9+D2e8=+sMD.V8DjSw{xGu/-!z7APDJ&w_(%u[*B2m');
define('SECURE_AUTH_KEY',  'Dz__IPGITP=JVz]`MamIix>`f+!-1SMzv8P,<lVm8e{<c~IGF Ex:D.)x)!m:7lo');
define('LOGGED_IN_KEY',    'dFJ.ia_1Jr sp^rp5,8*DD(Cf0eAy;oUN,_}9?Lo.@,|E,KqMq7Hr#UnoX}kW/<L');
define('NONCE_KEY',        '0sb6l{|,V<HC[;y:4v<:Wp3,^t&BrG#puZepU1v^G|6[C>%R+&bJZXrf3+M-A{)?');
define('AUTH_SALT',        'x&kz1Kh$&27s/!9+kvu5FU5jF!,>0xT6y.btv EVLIw5TN{UTxgzF][1??LLeX90');
define('SECURE_AUTH_SALT', '~$/txu$ciy!2!nj@>JWsf^A)j#/rxKBvt4X2U|pDKym=t,avM-r.y5`5,nv--*~]');
define('LOGGED_IN_SALT',   '=S6P@P*q1oB&y(#1XAgL_Hj^=R-*AH_mCpN#TkuhQ7?7rzo`46di(.&2.h,w;*mN');
define('NONCE_SALT',       '&xwfF}kQ~,0[|L<cmWAoj[:B4~H?z:RgD45g~P3irK3EXTJ_}.L%bOQ:tT&FRzG<');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

error_reporting(E_ALL); ini_set('display_errors', 1);
