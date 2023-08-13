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
define( 'DB_NAME', 'wordpressdb' );

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
define( 'AUTH_KEY',         'Qg[,m.]D@%tNLj~Jg@Wn#^~<8f7?jDS&uqeVf`]uw#*oQdZM`xOp%q}Z~+3IE&E2' );
define( 'SECURE_AUTH_KEY',  '6Dt@k@j,_i2Rc/iP<R65GrOPR;>Q#&p>^*V?oB3K_Eoo@b`!>I+f8G-NnP7+};}>' );
define( 'LOGGED_IN_KEY',    'o;Be:aKt >wR@-D|9BC!JlK,OQW2oP6=g1FvAX|eK<2P(r(k[!Mro?f<T+687qyY' );
define( 'NONCE_KEY',        'f>N:w./orM+%?l9$muDlfqKSa1VVQ ;9v8K1%aMR/tqYhhw=e)i&? 0Ro~9Jf1>M' );
define( 'AUTH_SALT',        ';$#o&s-b[/dY67E`Lwmf41`xrEW.q~0H|@XmfAwKq2r{{<Ve;xegx4C5im{(X]!9' );
define( 'SECURE_AUTH_SALT', 'MrFI]Pdv}X;N{Z}kSA`lw&qxydQf`KMk.y/$uKOMGm*%tmGi*Y+U[$Yu?,J?vpMd' );
define( 'LOGGED_IN_SALT',   '0Z+MMPia3Fx=gWy;}vx(5U@Z+w^/9pdMPgD1f~b#gTK/R2ZfJm z:rj`)}E54d-C' );
define( 'NONCE_SALT',       'C=~}QbLMHzCII_jPWk#iZK*rU5+GWuBJ~9udn/)j~t*3=<Ec)M+F,7Q(I_X|8Q%w' );

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
