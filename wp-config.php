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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'ED8,9jBVrqIA3F+Y@8A=,X/%gRb=}.{|1owO/UtwgtHno}9^SLF/EXt>WaWFlpw}' );
define( 'SECURE_AUTH_KEY',  '5m~d$5sQK;C;(<6`]Z*h#6_U(O</},R<A)T.<7cd)4c2i_Xlp=X1qR^55Y|Oc3ON' );
define( 'LOGGED_IN_KEY',    'TQ$i8+i4D*N|w(=;3rBszW8pe(}HV/aIppi)+0Nu*oh% 6itKeGpz>yD2L}f*m#H' );
define( 'NONCE_KEY',        'QorD&xP$b1(&S9PbO(^d`~&!eGs,N/4T7p>8V5yu)o/.#TW<cNBlu`0t@>SUuMHW' );
define( 'AUTH_SALT',        '(Sw.G2A{/8*!+5x3vz>@=b3M7Up1m}:A%7D]OHi=.IgniV<%v3mD3q`3]9]qAWg`' );
define( 'SECURE_AUTH_SALT', ',_(Ka>#LSoC2$=!_8X8C/*B~p/~yO&4gHU>ddansYy{WH}H_)C}]I2IA^cAr0nV|' );
define( 'LOGGED_IN_SALT',   'V6C<Q44eUAyNV-c)P#(yYK?QS:)Z] uDKTndGSXW]W8Us},LN-J}M7@K5j_f.,@$' );
define( 'NONCE_SALT',       '2.[I*{&-%?5P1ehT3|>_%CS<tz!u3w3%r1W|1:,#@jH<+=~Z0p$dl+3H7q7i*>,[' );

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
