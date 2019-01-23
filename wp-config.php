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
define('DB_NAME', 'test_db');

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
define('AUTH_KEY',         'rIRw*!BFjRC}k]^{o(C8kHe~@S9FSQ |UA^J[WW`ukR:HQmN(@}YaLh+i+@xY*tR');
define('SECURE_AUTH_KEY',  ' idMtP8 gf3EnEY-OR#9D6@L!Z41Ln!.Ja>|p;)X&eX-Y_pPuxu`RAlK]agg_TZf');
define('LOGGED_IN_KEY',    '-0Nl!ol=xWk*{CWp,`SZ$I!l9fJATx%cHuJwzIm/qr{ Q<x$M.Wf! +pgH,[Ey/ ');
define('NONCE_KEY',        'zP1H(~tI tDE^bG,B_d1?_Nsz;-61B3RUydi{nRF:Ch)~hCmN]ke+AIA`qCJj}eT');
define('AUTH_SALT',        '@dXfl`Qa/k+CD_9ew4^GRsC<,o}F|QWYNF{}q!mt/o se&A!OxJQtV0AD*HE3,|0');
define('SECURE_AUTH_SALT', '77S]<v#h(H<:3()JN/(*y](O8_ jgx?$.o* yj>cZ/z>=9 MiK6pd_<qxo>GH]$0');
define('LOGGED_IN_SALT',   'Q$h%ln=Jy{G$/aZAK^6OoP6HjMOKy(*N.bmk| r~PiNsxXX?_S]8$pL5ZAJ:ZIQm');
define('NONCE_SALT',       'uR2/U~F5o<>>ocHn[o|Zd=sJke9JL{G-np4@AB675Xj{krk~=otIoo#!T1cDVHB>');

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
