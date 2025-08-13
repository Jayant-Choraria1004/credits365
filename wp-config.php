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
define( 'AUTH_KEY',          'tjO;u4&1^okbB@8[l5.y}rZdMG /XwN3InepY5M,XeN^`>#7G)ml3ivmE[8@^<4j' );
define( 'SECURE_AUTH_KEY',   ';@V]RUC13`vune*Of<&FQ>z2|&NAt}00x#pT[nqpKl<=~^d8ZfAoa85^G=+^[_tx' );
define( 'LOGGED_IN_KEY',     '$BG2ul~N}Ho!&,iPWa2Ad:HB0^m }%5mCAWEpet750KSNADLq|&?;)u0w.&&EflW' );
define( 'NONCE_KEY',         '4mEX,(m]Egut%0)=@I*]Z#!L2s[^wPC~L0P5]j8:j7mGlKLyyQ$UEoJY{0^&W1hj' );
define( 'AUTH_SALT',         'PTSiw`)[`mq=ZS{VeFyR`-/Ja6fuQ5BcI~<<+$1t8hKSte)%N![u1cuY=epxx78N' );
define( 'SECURE_AUTH_SALT',  'gkK-?O~gd}7RT5ksb.A3*bq3aG(J.54=UbalR6PmMNS7Rl4Y>H.nKho6t-E{ED@g' );
define( 'LOGGED_IN_SALT',    'W5vT]}!ywne$lzyNDL6X]*>.HNo-NK4m//,_|yQ_G]3pqXd89ngg+em@L@#EEMgL' );
define( 'NONCE_SALT',        ';(}5|0N+/A0q)#WtTu!d6YxdA;q8~3#d+-9<7O/EkVIjOHR.j2j~Xqk=1Q, R.V,' );
define( 'WP_CACHE_KEY_SALT', 'nI{1 4jLJ/R`97k,*x6yz <x,%spw[h^!P:ECc@ia]dj7jC&K&VN*+2;/vT*c3}~' );


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
