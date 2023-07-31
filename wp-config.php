<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'securityluxuryservicesgreece' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'V1=SN3W<kD4]kk|?Uov318h54F=r1V(f>f>fK-UI?>28VKDK!AWat4;})cuD-QO,' );
define( 'SECURE_AUTH_KEY',  'X1YX{H?(>IPHn;THa6oJ^L:,1JG>KD{uxP]mMFQab^acZNp?FKpB`]$lk+Q0y3{c' );
define( 'LOGGED_IN_KEY',    '+RX{X?u>wj(QgS_GCUv00] }xl$+tQzD7R/5B>4+gCK9_voB{aYeF9n9&vI<Ygot' );
define( 'NONCE_KEY',        '[A <$YZ$|WO0X)ybLv8jclc2X%phq@9*X~-PO9pB}@uH4I8k%[?a`keKb$o08Nji' );
define( 'AUTH_SALT',        '*}sG,]z3=&Pk4=99mJ%%j#t-1,zyA@EJ`K%c[Wq<=bI@4~x? HtIx`Gh]}Hx%k,s' );
define( 'SECURE_AUTH_SALT', 'FY%,Ymfw,B^j/IgJI(v[DJS>%,pGmPI$3<kr)!Y8N4fv }!%=(+K|VpwEkTm~;5%' );
define( 'LOGGED_IN_SALT',   '7n,]^oc[)3uw,T2.~k9(6rh}BR<js24(z_x=w`cP<r)]<T|S48dX(B+(X.Wg{VlU' );
define( 'NONCE_SALT',       '$x-lp.$ka/lTQ!SpiMW[{y8T :V!Fp;F@k3rY2(^O;=4pWvKY(bHnPK3BgoCpBin' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
