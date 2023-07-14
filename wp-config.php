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
define( 'DB_NAME', 'gutenburgblock' );

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
define( 'AUTH_KEY',         'Xsf0fDa5<R66dU]&6WwF)wO:q,N6c@+SSfLXCpIut)-Y(4OcW6myjBsq3X:[{4je' );
define( 'SECURE_AUTH_KEY',  '/3^n*_>{l)x;2Gk)sLF.`Lzy1[93dOi|>B+!^k#nG}qePE1`7.o}:0D}ZZV):n;e' );
define( 'LOGGED_IN_KEY',    'Nu@e3@,hF#F3&w0e-Sj3 n{~f4r.YM[|MhF~<D}s,&#mj#4P6:Vt@3X;F+aQB49]' );
define( 'NONCE_KEY',        '0wZ{:Nrp@#>_A<VVJSYSMhh0_aw|sw=5CQg#a_?~N`b ~Jt/wK| =K7J{$*&no$g' );
define( 'AUTH_SALT',        'vWaXk6,/.JBKlx2*BM[hZeW~Kq_het)_ I`ZeSVrK.)p~gG~xF6${o`E^!3TYevt' );
define( 'SECURE_AUTH_SALT', 'DKKC>+>1tv6Klsz1%OTEjzOb<pM:8QDsZ&eN~H&?9K@7SdM`R`}_rD.|3[,S/e/k' );
define( 'LOGGED_IN_SALT',   'nm]n{nw^Cu]Fd8EW(r]#T^0}kClOmR2WWu|2SF_),y9v0D:4l4O2JR %iMan0e_&' );
define( 'NONCE_SALT',       '4L-_b~r[25n9^MBNHPxBxg%PAX&#YE?>Y} ^GW6Ce7dC8shRTOh!,Es7&3@6b]l5' );

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
