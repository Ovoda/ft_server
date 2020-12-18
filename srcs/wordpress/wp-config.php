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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '] ynV|UHpqBkPu)) )rHFn7[vcZY%{<N)XYZ/b;6:n?K=3v^<`w+Hb|i`__]%KP?' );
define( 'SECURE_AUTH_KEY',  'Up6<XP;|w*Z$lBQ`C[#y=h^zQ;#i/lb06Vt+bX{fUFvbTbN(c8Y[MJsZe&>rrmxH' );
define( 'LOGGED_IN_KEY',    'k9&f2F:|_Dv}{<KGo) !D6(UVqo4PLL[lN9kpR]|wz~O(w9ve!j704X}Yc}kP(<a' );
define( 'NONCE_KEY',        '>=B1D)kZGum ^uGA`j0g7bFy#5A$Pt|1`nP&X`Fr8//%x#6&FdsApEXp^sqR8]T@' );
define( 'AUTH_SALT',        'sw8y~^UE*i1bN+NncKi#|6k53D|.}@QYB%G{_^M@eJ8$n<TJrOF`PB0PDWe$Sm;K' );
define( 'SECURE_AUTH_SALT', '~3I.Hc/*_aH^Jc3S}>d&NksC`;a`yh5m#h0goitkQz>Toy%ke$sNOaFdJP|i0^v,' );
define( 'LOGGED_IN_SALT',   '$5*+W+Ae#Wjnm-bHAq0+a;I-d?Y&3-pLT{BA@#PzNO/5H[.hA]}H)j?Vsa]b+EBZ' );
define( 'NONCE_SALT',       '|gr^0bYup].)]S<2EN~SsZbQ1|:at^6v34Mijj,wB+%RCF@,33(^<k9BDA-@l{[>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

