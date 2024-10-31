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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ')N.CimO!T6lPlv2Fl|`:(80PB!h#D }~+O>nlUoh[6UwW9n;jvn};2)4xyst S~:' );
define( 'SECURE_AUTH_KEY',   'Zk#d-1%v*~lL&`O1|]9|J5bAut/#@iF.l9b Hss/nQS]`}Os08V4KjMb|`eQ5x)m' );
define( 'LOGGED_IN_KEY',     '5:8o<K;4E0Fna:uxU27$wqrtjKzd%qt9wVjO)[:w}; APE$r(%S8|9CbF~=G+7=l' );
define( 'NONCE_KEY',         'fT[0KO`n,gM$Qpo+V[d03*!`P<S0UCOxt|9i}OfN98^pzvC9X3(NqYSv{dvY:35Q' );
define( 'AUTH_SALT',         '1=]xB(y 3y >U>nZxgt?t% !|&REo;mwxc<03:V#`AmBgkSd5tH{EW)5`L.tFeY+' );
define( 'SECURE_AUTH_SALT',  'XM!RKu=bWao<2FDQf^a0GX)ag`gxaR,!Szd~a)?%o8lWYjwYH+6-X>[w]oOhgSJ-' );
define( 'LOGGED_IN_SALT',    '+<7x5p;}7zI00e&*vNDQ_Q_=tqCdQk8FaWW9H>ohl,0U3JgxHpdS-Ou_(ec41k-C' );
define( 'NONCE_SALT',        '6mfg<:Bk(7~}EOJlDfU]3wP%elq;sCDU*VsURrN^97klW-.Gr%`J$a^vN_k+mrZ*' );
define( 'WP_CACHE_KEY_SALT', '#>jFM}7Tfxvus=VfQ,qDNQ}5)if<8W@UFH99[6Ns-]cK^ }z3? nv{{)P*copT&:' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
