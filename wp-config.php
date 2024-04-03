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
define( 'DB_NAME', 'wp_gh21a' );

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
define( 'AUTH_KEY',         '%[fn&,/7]S|Qg-R0~6IBofEsPD%>z|IyL6N)r dF-ItKAF,-.p 0`rov1y9DcL$o' );
define( 'SECURE_AUTH_KEY',  'z0z6o^u^%!{d:)Ak8sn/6*Cv2D1Jh;C37&$ZK<V^g7>$7Q|Pj!*M!+|7K}IP=_m)' );
define( 'LOGGED_IN_KEY',    'C.VR5F_l9:OJg6#>1?a.@yd*$Q)wNjGGG)`F(t-)Jaqx-ni:R;3=Kr/]vlm#was1' );
define( 'NONCE_KEY',        '}xd*zOGH)7!x(fg3PIDz)!Q)7_t[o+by9~IusXkgKP!wJFAYo9vm@G&1Ge2o*E0J' );
define( 'AUTH_SALT',        'N#<:Yp(5*CThqzPY.RE(>2o}[f+yC$Kf*%~c;<+cyO^k9g(kek*_QQ[N(o3w2E2J' );
define( 'SECURE_AUTH_SALT', '<{2P$0t+%X=`C}n72jEdLt18#Pg_]TbEa{[(&#ow(`nW)NeI<1/Qm~~n .lUK<i~' );
define( 'LOGGED_IN_SALT',   '|SP4WMgs0t^*V!0;:KjKi8/%l(ux_:H?v$;_;Kl.o_wx0W3e+QwJ7DLADWLVw0y3' );
define( 'NONCE_SALT',       ',p,`&#Ntpi0x<d+CkSXi97KX0L(Z<>#10HXFi~jM|@76j+N_BCr#py;&PYI7QGqt' );

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
