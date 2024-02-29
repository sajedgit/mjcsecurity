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
define( 'DB_NAME', 'SecurityGuard' );

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
define( 'AUTH_KEY',         '+lO[|C[.&sa(|?;avI>;v9dSf2F$ZyY{Rh:u;~1-##iz`;n<VLCsP->HpVs_Fv;@' );
define( 'SECURE_AUTH_KEY',  'Cg{?Mf:qn/i!gu~)oKLwPY4K.t&O0GJ>5{)I|*Fal6)Yd(VyTCws8.N>:&*<PF*>' );
define( 'LOGGED_IN_KEY',    'V1C%ZP)VYeH{@s<5T;)[)&@9S*$zz{|]:pG@=B^`F*}wM%03ImR`8~;hYa8z,9vE' );
define( 'NONCE_KEY',        'Q*qUg0N!~iEcYg^nM`6(8[_$.dzc7Y$hy{h)N_&@0j}_/n.]!g_aY[TN*kFt7+#Z' );
define( 'AUTH_SALT',        'Xqf;{UJ##1Sb.r-Z<2iaryB|MZV^Gz1CJ1d.ALTaWT^M@N*i,5$ztgrXIgj0`H|9' );
define( 'SECURE_AUTH_SALT', 'kJ^4N)oQ+umwlLiL]Kx5RFC?I:<!-hPMI!#=u3xP=KFLSd3i!3MqV2vlR&# Nl;H' );
define( 'LOGGED_IN_SALT',   'y]0X-OXyFd!g}3DF]IzrX#?%_eO9W]FPl{oC6H9?zedQ)Kf5j`gG A1)&Vt8DBZm' );
define( 'NONCE_SALT',       'VN o~&ARrD+{gL3c]p[m3@MRlm_I&E<KJ$1$u3(|zhxHLTpdCZ+rkT`F+3UZ}zu7' );

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
