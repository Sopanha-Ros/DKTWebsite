<?php
define( 'WPCACHEHOME', 'C:\xampp\htdocs\DKTWebsite\wordpress\wp-content\plugins\wp-super-cache/' );
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'dktwebsite' );

/** Database username */
define( 'DB_USER', 'panha' );

/** Database password */
define( 'DB_PASSWORD', 'D0idrap@a*b' );

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
define( 'AUTH_KEY',         '$/*zrT=WGKzo&@,;o{:mKzO1E9U<ub!fzhVYf!xy]KeQwfy:rmB5V+$pI?3lTly<' );
define( 'SECURE_AUTH_KEY',  'gBKeiHwjl4Z[KaZ>DTL= 7aM-a`$l~))H]KT0l?AO8n 76wzLtAh0$<KDoR,(XoW' );
define( 'LOGGED_IN_KEY',    'k{(C$6gIc`_*Y<+||s^[B=15yXTqM%=FrWS0!x=-pY-WXqPWUY^#a3$C-C!P y.F' );
define( 'NONCE_KEY',        'HTMRoZsj7fw4bu>[)m,O&82i#|=Tkd!h$=#Klq1Qt>YWr8-)XuR|b5X&pLYH+QFt' );
define( 'AUTH_SALT',        '?bAExyl<nhD` 4_Um3fj:Wn3X8z,hv4w$c{8?W@oSH@j4t<avcIZrb_W+!cKT{&T' );
define( 'SECURE_AUTH_SALT', 'B}bb&_JN^9Q^fIl]MZ6StH~O.M(nlaKpfzx.e01s2BBkiz<4#rGGYBN.W,OHpY,I' );
define( 'LOGGED_IN_SALT',   ',w/8v<K^0w7u#V{^4tqXTflaX*@[CXG^~0c,i3>08U:Ra/{:v8e$aZbe^Zqt42HA' );
define( 'NONCE_SALT',       'Y#Hd?)H+x<H3a}e5)F8*b9R7&>dc^>*{`EkC&3IO${!JJc3}&Ug}?t]maibl4Y?&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dkt_';

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
