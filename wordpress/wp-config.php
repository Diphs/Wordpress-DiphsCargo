<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         '^s(Ky.x%Xn<P? ;=FAg=Z&0yQN=53ERs]@VB&m`A/i:)Y?2O2t_Q9V<uz|]? gt[' );
define( 'SECURE_AUTH_KEY',  '@0hWXPV0:&/Y.O2m^y1&n|3Pb /_LSx9.aq%&!a0aF<56g%*[c[I.S%R`9d>$G)R' );
define( 'LOGGED_IN_KEY',    'L.Ax@%v@!7o?W]_i9T3Y3=@j9%JL;1%~~uMg+*T|ZG^?$-?pr92!,NRD0DKYN+gO' );
define( 'NONCE_KEY',        'O=}Lg=,#{<!a&U6CDyoG8 v@;&$EzemY+P(V:B{OKQ=_e%s%O){4)t}qafMwRf`{' );
define( 'AUTH_SALT',        '|&J+dz7BhK(smpp@?;|@`cXmXlwusN 7V2]P5YRwg%l8EHM&[EPk{G#5g0@5wMQZ' );
define( 'SECURE_AUTH_SALT', 'dUYHvc)fzmB<jI-lnH;J[c>_=BSth<1s(9HwEU6[VPxTf*>x&E5JY1]`8KM!1V1j' );
define( 'LOGGED_IN_SALT',   '=Pt_NXk%hk4wK4DyA_:;TA}9%q,13H6K!bI|WD_SqMETAJ[_jQOEXXUv5*E.+3c ' );
define( 'NONCE_SALT',       '^YJt9BW q5aek$ [4N6~ <vd~X&YJ`_fOxD,+.qr2?J}?Y`9Y.@VS}Ug,s)0wXuM' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
