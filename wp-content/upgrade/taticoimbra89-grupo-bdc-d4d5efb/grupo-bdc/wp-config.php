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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bdc_db' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '6`J1#U0*-L Gj*yT!?1;#1m H$[V?3zHy@Wme`{%N rA-dEzt,<L2Ho_|irvJsxC' );
define( 'SECURE_AUTH_KEY',  'L@X!nK>H@X^Rc0~qk6<ir!&P/Oy@n<O>Wx6A,rbWlROqT&I@SH^u[]5IpBLf}:}|' );
define( 'LOGGED_IN_KEY',    'v;Q42#~9Y7Ky:WlGy*>aHL|7<}I?$)PUl5[,[qIFFG`r}gij]XCv7di6T>P|Zdfx' );
define( 'NONCE_KEY',        'ESU*pZRa~2uy1|4k~9Py,,R+D:?uUj2f1my?MD58;}{nf o09C~<#LjfwUM#0qq;' );
define( 'AUTH_SALT',        'eZ9NM`sZrG8)~g-dyc@`olJCS:Jv7n?Hb@UrL`*x[{ekrK`.tOy4+lSxmLo!x?q-' );
define( 'SECURE_AUTH_SALT', 't)@D]TCwib]+oC}WYu2MNbFRPQ1xhIfkZOJf&3Iz~xI_%A7=i/FZj~.UIJY[:9:+' );
define( 'LOGGED_IN_SALT',   ')olx_x+;1WfaBYhOesHo.vaB*h%y+x}82Q/;kuRm-nYXDWx~E~.z~cl.J;rQxURv' );
define( 'NONCE_SALT',       '/!-)XfhK3#n+ga<91cyLW#+s<e?#z{[C1GKhyFI1%6K7O$BP!fugF$OX-&p,A0H2' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
