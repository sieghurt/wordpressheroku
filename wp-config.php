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
define( 'DB_NAME', 'ljmgn5v3zqxmrl94' );

/** MySQL database username */
define( 'DB_USER', 'xu71tirdhpfhgpm1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xa7j7tos4kfe38pw' );

/** MySQL hostname */
define( 'DB_HOST', 'hwr4wkxs079mtb19.cbetxkdyhwsb.us-east-1.rds.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         ')53,w0+mw@_8%mNW9^>r<)a&@Gn76+|joYdl6/7}+j,v0l-M[@pXv>XeLMG;^VTQ' );
define( 'SECURE_AUTH_KEY',  '9G#}E@h04#tHxa:)3k(aPQ0+!6 4?`5frg,Uv{hYx5aC?9I.t[C9zwjJ|Y[zgO^:' );
define( 'LOGGED_IN_KEY',    '!Jc2S-5d=nzd_Pt5l0W#as&cZ#lg0!{Hz9isgDupR6]cvxhvfXqRQl:XN]?fo`{5' );
define( 'NONCE_KEY',        'go11Xsy&=gqbcUbCJ{*-l4mpu0-4kdM >Eaz%mGwtB#H%()KJ_DLw_KEV(WlgJrj' );
define( 'AUTH_SALT',        '=z+u|lEw,*^z^*NM6^1[,FNw/SunmK`]T(Q&yga,q4*igRCi{Hh&z_G`n,2K$|QC' );
define( 'SECURE_AUTH_SALT', 'JpD~2VV/5#9nXvw^YZ/K]j0^jDp~h 1dtVFf77uQDFfxP`z CQ9q +~r+b0s?wQ&' );
define( 'LOGGED_IN_SALT',   'Wl;(pu+M&pNA<EhREC{>+Y6s?IR6q$1f?YIm^tfb+8n</Nn`E3p,W?T]=~fgE;Ot' );
define( 'NONCE_SALT',       '34*@2]Dq#W7X2}Krc2x&vl`^XpytFG},!#S4Sjs;_F,1EZ!-wT?^qDG9c^%/zE;8' );

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
