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
define('DB_NAME', 'testwordpress_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '=W3T;?;G_9,F6-;LDHyd}4#Uw]ii<*D.c`@fX!Lzwz<Ufv`_X5kpi9l<Yw,y1U*A');
define('SECURE_AUTH_KEY',  'C`y<URrvA+*U[]J}7s{H]_MeM[&K*]jUAZX8/-Sl<hgjVyFM<syEbET|woKZ)3g:');
define('LOGGED_IN_KEY',    'qwXx*[I;0@^>:i*wXV@9zU5z*!mgUav_V2Pm4}mur-WLhR}0Cx]x./82xYhoN.:t');
define('NONCE_KEY',        '|@Xf-Y/ENW3Q(+I;N25[6`W]a8p4rC]~ZG%j<uEK5[2@8{e`$e/-7&o0CI.I0q#K');
define('AUTH_SALT',        'x@u0NL_N@z:1dSU=Q2.|@Y}yMW<|<&Rgq5vj|0dt;}WylA*b4~N1iuOS`JuXjLy(');
define('SECURE_AUTH_SALT', 'l+r28VI}~rhqlHl]$TJ?9hCkEI}|zRJw%nr6+bGhiXRS){kHDQL/P VJx8{vr-C]');
define('LOGGED_IN_SALT',   'uU;pcXkq/:5E$Zv7=O^^=1*kuo&7N<.O^L+ #VKPKuCD<^hwDe7jA]5li8#BE;I#');
define('NONCE_SALT',       'n,Ar99LG}%u4^y.P@yk{EIap]y@KE8N)sb[/zq~Cmdzmr@9@<`>>CV}#P-ek0]cc');

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
