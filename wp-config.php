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
define( 'DB_NAME', 'plugin' );

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
define( 'AUTH_KEY',         'QDcdH>?or%p3,4@J^SQ9OtcI6 2n8:#,au!D~Y,;Og&[.Rm!60{eKvlpl!<9%7G.' );
define( 'SECURE_AUTH_KEY',  'tg6V.?HF/}i.>e)wk?$kTBqD.LR$r7a-*R*_G,t=!35cR|SHMK/q@@u#tNnn9y>3' );
define( 'LOGGED_IN_KEY',    '8}o{iwkS&g/^fA=e4qtWpI06*_PB<f^Qxe,^I0[A5c4??xF!.}*:Dly*1eN#j?$q' );
define( 'NONCE_KEY',        ',L9v?m8Iz!X$#7KQGb[~qJ]Pk<OtGF$|gngX*vNO3hYHm}1^j+6wphe@!:_)6x_/' );
define( 'AUTH_SALT',        '&]9/GmiDv;:%Wo YnY~d{XH#]pV,bs$aW10H`%r@<RShbC_w<Tu^_:rAp4}|79fl' );
define( 'SECURE_AUTH_SALT', '.BZHw03g1zipB/rs%`7_A^Er<)b)H4W(mky%ZGd$4i@`h9J:jfl?UIfG}n|7Gx(=' );
define( 'LOGGED_IN_SALT',   'Q1^l]jHTeme]$DJB[1tB@o6b[F_(4:?DL],9) leq,Z9>(Slqg 9yhmxG sW^]B#' );
define( 'NONCE_SALT',       '^^u0Pvp8CweENu%}kA!fwuAv!3uP#x.XE~7 mbFfg*4|GG-R-Yth^ngM(f5=(JMX' );

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
