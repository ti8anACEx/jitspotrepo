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
define( 'DB_NAME', 'portfolio_site' );

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
define( 'AUTH_KEY',         'Lw8kMT!xI{Ik9~d&<~|5A$=l ++?]b*H8_^p~#}UN^r,&+h`LgQNvh[YZ-`l:0e}' );
define( 'SECURE_AUTH_KEY',  '<W A#:]VnQI8}jnmhTavH|/k-Wtt*@3*L{u)8^8mMJv4CHFMEg}--;yK A;yw,`0' );
define( 'LOGGED_IN_KEY',    ' >KTd[ql5,#50eB+0%}@-[G}a,rd~?DCYl65sdDCviS1Zm9BnMG(dYoJp#lkEjpN' );
define( 'NONCE_KEY',        'dKf4,6pa{hRs]G.;hKt:(3MpewXC^+r=P(bM{i#a340|U7I&J}_Z,Y,E#)6T8^k4' );
define( 'AUTH_SALT',        '6OPza^#;?%XT927!/[icWr4EYUISoc&wAFYeiKHGe<vj+],{XY2{T(omwSBf{vY~' );
define( 'SECURE_AUTH_SALT', 'AY4Zmz]AIso!E4k?P/M n|l/&S[41a>h[FV~RCFf$tad-hG@V+(%E>r8N`x;3v5T' );
define( 'LOGGED_IN_SALT',   'YlrI[#d7iKZ?O%O*.ji@Fq}*u5wM^e(38Sd^z ;.yxuUJ<B$3VI(=6DByAT[rjv&' );
define( 'NONCE_SALT',       'O;S~Xh{FexIN>!9b)i%#%*)6(HNuf>fAp3stJIj:d~Huzds?uD~U8ZNRVRu-<^xt' );

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
