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
define( 'DB_NAME', 'mtsnpadangjapang' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '4J8lc4T9s)dNqJ^L,1YcoWJ/hO{<lE<i#0^w^~tfiLMCyQuXf_5hD-e9V<;(?Ji+' );
define( 'SECURE_AUTH_KEY',  'qD<Ap)yEb*^D#XC_CZ)g&S$,3Yb3*7a>P-jJhE-0[CXvZ@3WPH$&Qh5osD( EVNI' );
define( 'LOGGED_IN_KEY',    '+3NGrNAFQP,O}y2;uWq7*1rHytG(uOcFXAwC$Q].%{@&wD}t-(]9q,Q:2)26}4Tz' );
define( 'NONCE_KEY',        '}I<X<sc*Cpbv^MdS_4CX`VCcIv7Ldo2,LUH*LB1XZQ!tNz. 1.k0)DoaiD%r)OJB' );
define( 'AUTH_SALT',        'J7xiP+ UMlr$ty>K28/!;?G$]*BHH9FRH^;wr.v-?L~rTv44K)c%!#Z~?AUWm;pt' );
define( 'SECURE_AUTH_SALT', '3CcUSD+ONEG4~jRe<P; DL|QCL9qCCh)*^M0$iB40- L}c[9GIQw,Un{z10I(hg:' );
define( 'LOGGED_IN_SALT',   '.Y9%Ao#b=6OeEF$Zq^3yRQ3%b:h*t|4(V_<bUI2]volXEGq<.W!BPcX#1fb`cV{L' );
define( 'NONCE_SALT',       'R]#!!-4G&p3&L-E!n~`)X8ZAG35^%3vYE67ep HZ=!PO3pPSzB:#1EMJko*THDOL' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp12_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
