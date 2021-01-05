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
define( 'DB_NAME', 'carrers' );

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
define( 'AUTH_KEY',         'hp2$r/-{gcM ,~Fa1k*|{&uKAYUsKX{!7gH!V9IOZU~3t7m6:tq+4siB~;OQDC*d' );
define( 'SECURE_AUTH_KEY',  ']z$*1->%#P..zOrHo/ 0T<K(Bcgx:wDo7E9mVkoFRJE DIpnsm%T!hH&o<tQI= X' );
define( 'LOGGED_IN_KEY',    'G)J^t .SR^1Sva>Hd_YkWU18I$wF=$`&wePg#j|$`RwMV#k:NZ :ZW~dS<O-@x8h' );
define( 'NONCE_KEY',        'INp~Z>m6H8%egI85_5z0&4VM0!`b)Qa{+5c`h8t:f>:< S=].24<bEY47:Q,r*ti' );
define( 'AUTH_SALT',        'dyK{#q~.p}Ny {#~)uD2g5CM[-6{4nH]#)!pSF9!tu*2X~%S$kl]+O(;V_c~8JPv' );
define( 'SECURE_AUTH_SALT', 'G;I5ZusLV2J8X6SytO)H[ 0N?hE$SwaE%4(1qSlygU)Cb7D)JRV+y.K,DOXXxu(p' );
define( 'LOGGED_IN_SALT',   'TnaW3L]l9a=yQi^oN=z-9#`A*KQGcY0OHdd6?cI[Yvz QGg4?vHC{KUd=ypKf8Rn' );
define( 'NONCE_SALT',       'SY}Z==4( @cAG,MLCf70lIhXW6hLEnc}6<8Q5ue~tJ=<r7c?4J2VEgf@=SW6.GG;' );

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
