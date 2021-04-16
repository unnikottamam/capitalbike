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
define( 'DB_NAME', 'capitalb_db21' );

/** MySQL database username */
define( 'DB_USER', 'capitalb_db21' );

/** MySQL database password */
define( 'DB_PASSWORD', 'i%OYbg7YAF21%ver' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '/n&oz#9Lr2aA[C7h;epO1H[(:79!BACqqeeyqA22LTP4Uob|t-+Ai8u%7!&OwpE8');
define('SECURE_AUTH_KEY', 'nGne;|oyPV2H5D8xoh:;1Zb%433INz9FYcYKxG3F(34hA6:k)m32IkxmAY~K5271');
define('LOGGED_IN_KEY', 'j7tuV5LxNvl9u|pE&Vs/-gmnGY:BFh)7x7-17*91g2uI7&U_[a5XKEew5z1J1Z5H');
define('NONCE_KEY', '9z4:h_g9vqv4O+3TLIC~z*fAO#J2[D*x-*-91YjAej4W5i3Ke6NVl_eDneTl&lux');
define('AUTH_SALT', 'JQE+~@ls2:3DWE4pMsl0R|UgR[5|N25rc97P(7brSl8TLa@UnY|09!&lhV8Z;&vd');
define('SECURE_AUTH_SALT', 'DwYi:&i~A8UE0yfy)*8TPHj:5y5|9u19@Bp!9WN:~v]|!Z4I1;5u-@w:%h2V]CjJ');
define('LOGGED_IN_SALT', 'r~[MCn@8Su&K9i&WU7(J#E*H;)3%5*C~MPK%2b12]f%2EBq%5M4fO1pyoQa7607n');
define('NONCE_SALT', '4)40*93/4c-foSjQq&AdA87Y12kSa!w8H8M33ogsK2xB5_l264iY7!tNBC6H5mVa');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cb_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
