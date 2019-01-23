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
define('AUTH_KEY',         't+y<SXhG6weDR</6TMIn7Vd]*1+VSKUgZOBHc!whI6dp-hod)S=!y`>8@,namUe-');
define('SECURE_AUTH_KEY',  '[,AqZb*aBUT2p$Rt`!K+-/I#-@rt-!bq{_}?p#c8$be%/D][qeNbf%*G]*:8(dF6');
define('LOGGED_IN_KEY',    'cg?{Vu%Ki-6z4@5h19fw$5SSGpP,urH =_BBOy_bZA#<~m4!&sS&;z$4!t>4j&Q2');
define('NONCE_KEY',        '3B3~<x})W9d|>))dqtUSh`<qgJ<,,:,k*CsqZ3D{H#5iMz%0=m7,{o}*hsI}ic0`');
define('AUTH_SALT',        '`@#%Pul_A:}#jeUF%AYe!vv@Tz5&xH#^m+l-cwA}_XzqfO^3I@uqB}m_Xu;SdB(E');
define('SECURE_AUTH_SALT', ': c+vM)GjzVh#})nMf% GXG}uqpxa|7IWoy5-%6npDjrySiMI..{%8:=<CLM/c6M');
define('LOGGED_IN_SALT',   'KH0!T<S&1B@+Ll-pkmCSh3Wf1)IVC`$_w7;GsSJ9E94x6`11v@liRR>n(b!=ajQc');
define('NONCE_SALT',       'l8otSY=|M.nKV6pk0!$P!)q/ay;^ ej`/11^|c`]v3{LBF$H4v%R</ >hO]ha.Hf');

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
