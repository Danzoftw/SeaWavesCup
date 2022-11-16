<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache



/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'seawaves_cup' );

/** MySQL database username */
define( 'DB_USER', 'seawaves_cup' );

/** MySQL database password */
define( 'DB_PASSWORD', '$]1LMr8}]fv@' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '$9 27,o?#dyf.!.jjzFy6p|, uz1j^j!}on`7=ND:Q)W..UK>xF>(ehIgsHLKumE' );
define( 'SECURE_AUTH_KEY',  'nD}u$-)q_CzS7;#Tb7FG?S%1>@JF/^rd8KHc1B=mYZ$m<Ctt=`Wg]m3+N?vX7*:c' );
define( 'LOGGED_IN_KEY',    'mBDb,VrY;;@5r%RWAoJU}{d9x.7}%x}%YiG#zDj@^Xs3t+^r_Z,Ok7k2 z%>Pk,w' );
define( 'NONCE_KEY',        ']{GxTe=I=zP*v0eED/#^Grf2R|{e=wV9[oXecS9=O%)Y@ik-|H_E+UxPOcc)#8/W' );
define( 'AUTH_SALT',        ';}L{X2yeH]Xi|*`+Bjw7C!2[n;ve>$rCo@P-&&kXrL(t.U:=W>qQ(&P>=+(8LHM%' );
define( 'SECURE_AUTH_SALT', '10nT6{2*REsL)<j=?zAdtDxo)v]E{KE~0KNk2AlNf1NYkdrZs~S#Py&O+V_,V#>Q' );
define( 'LOGGED_IN_SALT',   'O@Kj+6,ITR-b6*q$/g U=WX&)NRt#%%<l4jNPepOA-g_T01?d6RN~/o(YraF0uQi' );
define( 'NONCE_SALT',       'sHX+uY8h%[e)1aW1}]Vi<yi.C4bwqYa%<)J[9:XcXTw5-S<+YZ*d@Gr7NG~l@*_3' );

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
