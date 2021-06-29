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
define( 'DB_NAME', 'dw3_wp' );

/** MySQL database username */
define( 'DB_USER', 'dw3_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Z174rro5A' );

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
define( 'AUTH_KEY',         ':}jpRMOmfj{=0.0ZZP:Xm{R~:qlj~.Y9/,$?kH{ W^b #sgVe#5!1F;5lQM6}_c@' );
define( 'SECURE_AUTH_KEY',  'LGcG}MW`]?58)BO.0@b4OW2w!a@2]; txYTj`&%&M*ux(SWPpfsS[JfapzQWD101' );
define( 'LOGGED_IN_KEY',    ']N67,i18MG*w{H!smY4;Gl}5(2md-ZRcle~!Ir+-=rv+TLs`Sp2md#M<biXF!<RS' );
define( 'NONCE_KEY',        'AE):fnVRnq?bcTTICobtI k@xnvJIHqUD.g{X4l;U3ox[T9{rfY??HDilz@`qoQ6' );
define( 'AUTH_SALT',        '4h8NC+}/sw6eI31BzE5&B~k{fpfbT^Ib09`[<t;:ZJIcEz*Mq{j}{Hq#G]6~{3H6' );
define( 'SECURE_AUTH_SALT', '0lV;E^~R lS>rA4rQ feOs#HAv^(GepD+h.LYYW9o-Ksa5w&XEz~otgi_;E<Ar@S' );
define( 'LOGGED_IN_SALT',   '5^}c<.XcpKaoYM#o!kiz7(?!|~dsrUUuDtlW!k{,MJ%>(>Tys&5I|Q1JV);*;!{q' );
define( 'NONCE_SALT',       '.1Fwd-$)R8gE`7#z.TNb|BRXCr=Gbu/3YnP?dlL^7!Tn0$@Hf;99:M$QF0tFcfWK' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dw3_';

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
