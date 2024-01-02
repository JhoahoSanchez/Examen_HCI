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
define( 'DB_NAME', 'wp_buenavibra' );

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
define( 'AUTH_KEY',         '4Ytm@u]*H*fB>T1^)p%VE%=mL7pM=/J[zu4pj^Rf>8|v>h2QP6[~<+:sYg.d4zA3' );
define( 'SECURE_AUTH_KEY',  '?-m>`Ed&$v|7% <BVYVXG7gI~W-]:3`7(3AA^;y;jd[m_lHVL$mBe3l[h?gaz$|5' );
define( 'LOGGED_IN_KEY',    'F)EoRyk-WhpX5g5avx5L)KX_x&|Rg}PQoFg1ztq0p%Tb?w;/tijv_x.>;|P+9W/!' );
define( 'NONCE_KEY',        '{Lgjew)j7m7<vy.uQp`:]K7 4~?*6X,8s|74hZ&vl/=r3Htu l/3Z}X/LByXET?D' );
define( 'AUTH_SALT',        'x0ZpzC]:j%er44<v$q0uy]@7{)FmzhA[tHREU~]$-pB4qGTX{r,u6rLAJF`#e<$N' );
define( 'SECURE_AUTH_SALT', '>*2y(X}xV8O<Q H^=2HY=cn&_YgiEZr^EDC:It|!^AgQmaG)X}z .#<SaC[2[0Tw' );
define( 'LOGGED_IN_SALT',   'nj.4hm6uFoO]@YXm!Ch93{BV3^%>vsM?XZhCgyi6PAjGX_{2*%mB5 U,(Q5up_N0' );
define( 'NONCE_SALT',       'nctCTli@1s4%t]gzqmDQB:7#^|IIwgjhCF|l_,2=h+H:R?zHEp%Z(L,p #>+9{&X' );

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
