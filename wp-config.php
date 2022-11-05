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
define( 'DB_NAME', 'banksboard' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'js|#/%q]]nn_QGE0DOtNs>`Z3o<<@WPd:_(nL99JS+B?n>2wFG@Cr#khAx7G8dOz' );
define( 'SECURE_AUTH_KEY',  '%e iDIpmg*W<i^K8%f48cen!4`4+ T0!>SHX{XaDymKXl<.xw]q.l5#*4Y*7:K;6' );
define( 'LOGGED_IN_KEY',    ';WXmVL:uX%](FlG^OKMsl`rhT7l:Ji{6flz_W]lFnR2O|GTW{W_Q[4zJBcHZ0qS>' );
define( 'NONCE_KEY',        'zjoy-Jd BWbMIoA$>Jf cGE?.bzvX_WqPYtf6A#w2Hl!>w#4e~V[1oV$+MwYJN9i' );
define( 'AUTH_SALT',        'l5_<hoF1pMNXOam)u,(/5{D zgY7DSkA=hM;>4SI@U4q%#k0_GiqjZTxE-qnVTwl' );
define( 'SECURE_AUTH_SALT', 'Ye?vqXiv1{HY8nHm3OjELJhXt1yooup;oU0/x]GLa!l1wR{v+dm0KH1GaIsurgY*' );
define( 'LOGGED_IN_SALT',   '0S{@<})ckw^2$x1tcQDu%M;5#wOI0$o[@8t]^$*~O[e0S3r@mr<a5dAfeh,KJ[qp' );
define( 'NONCE_SALT',       'jKKMO^*a:8>fna7M/|.PxKy_7|^f.s5Amqfz+5ftH%)E?Z}QaM{Nt!UgnJ>m=`Nt' );

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
