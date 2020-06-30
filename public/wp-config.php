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
define( 'DB_NAME', 'local_idm250-red73' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'pAGizJu`Ut4l5*_kcjmr<VC{Sq+GO^U,?/(1;c>X-Vu`P00zz%0h= Yg|@Jp!2Gk' );
define( 'SECURE_AUTH_KEY',  '8pb#O%k_H,T$daSW}[Y3Pft(|vpB+&[>rFInzF~Rc*AwxC|*63Ui:NRO=b9XahCK' );
define( 'LOGGED_IN_KEY',    '8Lz3#t.aea#vy>oih22Z%P&W&I2QYw<rgqJ&Y72W+HvT%r`@12SQAt09fS kW9W;' );
define( 'NONCE_KEY',        'a@%L#%Cv,j9%}faA&_K1?+X=Y~RZEDU9pd)& X9./cTkqDTS#&2BLE%0pxQd<@XY' );
define( 'AUTH_SALT',        '$zT= d2~yK}0S&!6&9pb[xMNLKY/S=*kD|WeJtbbDza_eLcMzW!(u$[ N ^M4p=7' );
define( 'SECURE_AUTH_SALT', 'D.}IPdEzsl NPAEZcxie&P=<bjl0_M!>K4lBd(cS+$<7|Ty/]7]2RyB>XJN+B>xQ' );
define( 'LOGGED_IN_SALT',   'H%7gbBMJZfMwo6ctf(Xj>}d!5-Lrk<Pu/HoZ@Pe_/JCu#Z)CPENiYX%+e:j3xheM' );
define( 'NONCE_SALT',       'v<>!]XLibnB-ZFt{I~O%*q^<U3}L]/UcYk&iL{L]+WhiALFE=! fyTRb$GQr)i+3' );

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
