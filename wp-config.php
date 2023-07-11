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
define( 'DB_NAME', 'wp-page-database' );

/** Database username */
define( 'DB_USER', 'wp-page-user' );

/** Database password */
define( 'DB_PASSWORD', 'WMtrn@H(EJEK0rsr' );

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
define( 'AUTH_KEY',         '`(e|Q*/~A8,hy;nuGE~aTSM-]/?0/;b;}KrpD^QQ{0wg# &.yk-GuA{pSm.y]]JZ' );
define( 'SECURE_AUTH_KEY',  'q&icmi3U|:#lB~4;|z^JB+yBkRL#QZ-o&9/:_AvK5P>OHJ^qwbw.b?%G=9|5`Mb)' );
define( 'LOGGED_IN_KEY',    '*?6:[_bbU/Q2O5Jz9~DAEkbHd~vmREmb7IA3E$Nwh1)bO6*#r$;(QjmLga~VlKj+' );
define( 'NONCE_KEY',        'PK(sxJ~O2l+r=_G#6P|ATrK1HA@Ha,s+178@*zwf[ c}*XZ.%pI%(-fXjQ407Zql' );
define( 'AUTH_SALT',        'Pj33a%p={7r.skYH=X>fNGbNM_AWI, a0b(A#h?eObz0ZuyoLnaY*Ml?8yV[pT7?' );
define( 'SECURE_AUTH_SALT', 'Aj5tj<cU!uv>k[8:Xc-rVHrKr=ijz^g*y5k7Y*$jP<crQxWi|^Joz+XK3i>Yr?#i' );
define( 'LOGGED_IN_SALT',   'I=vRIh[t1f_?$b^7&FD/dUjHV5*9DE)VO`l}i:JPVjm]%vt)] ;STIEBid%(%iB]' );
define( 'NONCE_SALT',       '|Rbr^u|S(|bcZoQX;Ba6j7 7)^`EsR>yLv??9T)YsvCPme}jwdX)c>~g7gh0}qyu' );

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
