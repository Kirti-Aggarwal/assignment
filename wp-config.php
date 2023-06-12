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
define( 'DB_NAME', 'assignment' );

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
define( 'AUTH_KEY',         'p$y{6N9n@.%quTk6]$mIb ha1l7UV~gwhl$sV7f$]UpI XSnE*+J1eVOi/3AAMlY' );
define( 'SECURE_AUTH_KEY',  'IsKVAO8mUk1]q=8TkbDL!xh+H0F{vDe/z&z#9.=`IfBjf,}{CBA.LqgGwN^EJvYl' );
define( 'LOGGED_IN_KEY',    'at~(U>??,H5ps?o<yLBf%+jH9Z0YRa<W_;E*cM:XO0l:EeFMuMP;?T8jelIdC5j%' );
define( 'NONCE_KEY',        'wKX)K:sG%;l5373mAC{&8=S:sqJU/f3nk^;@>t??I?VF8e|=GHOlBVb/hEPgAsUT' );
define( 'AUTH_SALT',        'TPq0pJ{8lX{xE|UVI8YvHQ?`Hoab*]%B`1IrKmbftHjw!O[{s67zuQ@n8pApowQW' );
define( 'SECURE_AUTH_SALT', 'Z[{LkA*/pe%Vb8hi#$+!Km+W~= JDMi,q8CHKkywkG6hJy8IW7N3dvGo(T1*j7Y%' );
define( 'LOGGED_IN_SALT',   ']0s}T,#*T@YZv/ne_P1!BX?p#TWkdt,7yL_&8>_a>_~;pg3#NCrA DG?SbteO<j.' );
define( 'NONCE_SALT',       '{LvqXz~&B^|}*%7,pUCG%w5sU|My%M2;74R{l;E@G;-z:40({Bj=uqo7wbB|RYZ,' );

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
