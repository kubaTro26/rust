<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'weblide2_rust' );

/** Database username */
define( 'DB_USER', 'weblide2_rust' );

/** Database password */
define( 'DB_PASSWORD', 'FuWgQf*K+Z&_' );

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
define( 'AUTH_KEY',         '>FV}rPpqVd_)p-8:}6>if%rGj3,1/oCStmqOauDh&XQ-A^pRYXPCD9}Ay_o!)w?}' );
define( 'SECURE_AUTH_KEY',  '5B42oP&oaYX~XwoM-HbNbzu?$^5lI9F7L[#kl/C*uC:b }  7aE(yUvh.F}o(BgS' );
define( 'LOGGED_IN_KEY',    'f%a4O(`#3fy CaayIDxTd5nxd2$Nc9wkzBqb>J:{c{>0HpL}uHmW9x[xB-)x-)IR' );
define( 'NONCE_KEY',        '_LY|Y[S?*H4c^2@@,S6ylJR7m:,up QkFK4ys>[/,7c#h23Bx=4|<G+74/|}E`cG' );
define( 'AUTH_SALT',        'nB:<0&WO$`7rWZ?wS|RJZT|/u38>Lct9@Cn$f6>0tD2d|@<hz<n9HShn92(GkTdZ' );
define( 'SECURE_AUTH_SALT', 'zd6d600R#r[Om$Ot/VGu%T,!{uz<Ac1yE$*t%S~=s}RK_/*fiA9!cX$>#USQ<#GJ' );
define( 'LOGGED_IN_SALT',   '/}i^nY%pf+Wp+GU^YZeen2ek?`=L+r:Sk:;L;5tnib3GuN?#)~GyoueGdtB=$iw,' );
define( 'NONCE_SALT',       'mQ?nP%0#Y1rLUlY|T%ldh-M6S_#/A+^$s{j8XFS!]%p!lGsMS`xsj/{jPj!x~Z1a' );

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
