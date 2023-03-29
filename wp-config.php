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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'tz11fe3h|=^d1xe5N9gfoAYrJ8KU=JOze^.Fa=p2wKtyFiF%Vr!D<<5SECk_=^#S' );
define( 'SECURE_AUTH_KEY',  'kPH1^w;%C%uNpz1s8vwPpayRD5kd 1)!9K-F(hY{Pm_Z5YQIg2)vv5(GvQ2v+H$ ' );
define( 'LOGGED_IN_KEY',    'l5_cDy-Yrgszmd(Y{GeK,@4Gx=k{b$RF?|U(JDe!yQ>4R=~zaKmQ,0bx6H{*9zt[' );
define( 'NONCE_KEY',        'tPs@YWfEB&20xr]lD:$3S;m0z.Agi}zJ!@F[31WM*cXK^~O@cpw/&9rWi^!juf-J' );
define( 'AUTH_SALT',        '.J5,G#9b0L_7dWKiUF}m6JMU2#Y>baMI:B*$+4r|_.t7]i!IpD/7glQ7KWtb?gPH' );
define( 'SECURE_AUTH_SALT', 'lwSBR19~t0C-L](=|KpSm85 b6? +b;s^]$jj^ECzXWaq9CZH1_gi`z5Ao^OJlVG' );
define( 'LOGGED_IN_SALT',   '$rvaaesBd<7GIe%IN/tt(~x2g43?l1^qujSP!S!kKubnY.dZ!kAcq%:#UL1Z&(-k' );
define( 'NONCE_SALT',       '`_(Wpz:jNO3lAa vt2A+eq;0]$W b/c)1#zI3O~FMEcafk1(!Eg$SFj~+]{iC|p>' );

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
