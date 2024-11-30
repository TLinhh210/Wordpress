<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywordpress' );

/** Database username */
define( 'DB_USER', 'tlinh' );

/** Database password */
define( 'DB_PASSWORD', 'tlinh' );

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
define( 'AUTH_KEY',         '9Y=f8e-@r}peb4-h48Hh?vWZ-_x1:W6cfB L4IWeU[PX=Wm#<KRu.LX+<]<Nc^}e' );
define( 'SECURE_AUTH_KEY',  ';##T+./bPt=E(1L0;in8U3vrh(.OetKDW<$y<cq907#v,6k_%bZq6,_x~wMtmSyo' );
define( 'LOGGED_IN_KEY',    'D>8YX<P~Be@l89mK+z#K/!6IHB9cfP`1;E@dyB>=@kyE<a^-L2m%vj)=(L&..E3D' );
define( 'NONCE_KEY',        'ZWvo5_N.=%{rU>s<ZgOON^Lc}O%pR5@{~Mdi5x?(Hq<UKB[w3VTXUrf2-.gCD}Wq' );
define( 'AUTH_SALT',        '_UYh|*:>;$Dlv=?`$mTegD1vSgQcqb^*r/NUj:i@ZyCc5Uo^tI2`)]C,&| X LZI' );
define( 'SECURE_AUTH_SALT', '],D*y=y>c(K_6x]oY8mNUNr? ^vwRhf[T 25C53o1;))xIdH7|/1*zgLdOR6!dsU' );
define( 'LOGGED_IN_SALT',   'q;7METilfh:yVB_Y.4v_2muW)5zWF@9AdN>=.WA]@D6++/A?3JB{zk.}fW=([!Dv' );
define( 'NONCE_SALT',       '%(Lim4x-QK.uM;(RWJ6@xQ3S9o-o=JQa59w-%<u*;o2HNa3BvLLvYG1f#=BrlVap' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
