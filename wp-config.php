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
define( 'DB_NAME', 'laragigs' );

/** Database username */
define( 'DB_USER', 'lara' );

/** Database password */
define( 'DB_PASSWORD', 'Laragigs254#' );

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
define( 'AUTH_KEY',         'R0FFyR>YL[5,&qd[l+]6QE+.p}mKd2lqx7~$FnHzyBpRj0_g10x56=9&^yA4$!dx' );
define( 'SECURE_AUTH_KEY',  'KTopque-oG 3!Sd$-J{x;?jiUbb|Zm0ZAa<QgN!vdKxUm3{X>([sopB{*a|vMcp7' );
define( 'LOGGED_IN_KEY',    'o{}uJW+Q]Tp28UK(*xNg1 L8-Cre:Wclja9^e{v!!1gZiH(N!z$P.yulc:MbZ{K&' );
define( 'NONCE_KEY',        '6s<tb^TC3&7Y{[C-.:7aI;6uR)iNW{:tl!?)}Wkq}?awcwOT>mWV[yL5Z!xFeW!u' );
define( 'AUTH_SALT',        'v]/D~Vun-h3)EcckU3{,qNTGr{Ft~q5o*A4#pG,HKv|7e,8?b-Zw~LF?.(eR|UO}' );
define( 'SECURE_AUTH_SALT', ':]?je)rbtr<e?:cl%!N6gj#s=y>XJxcK@Svk:l/|4l`|<C)}~l@ hA/Q$U{eWo(n' );
define( 'LOGGED_IN_SALT',   'fKj=a/$f4=afk_l&l||I6R$r#ODo,DN;*IQf4ho7xcAUwEiQ%wYy@9v^?uW`Bgc`' );
define( 'NONCE_SALT',       'u.Ab!,tXVe3z3c!~Vqo}vVf2^7Zzq g|d6;m8s,h#g*yHQ4BRLN]^J@75,S}VuA6' );

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
