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
define( 'DB_NAME',  getenv('MYSQL_DB_NAME'));

/** Database username */
define( 'DB_USER', getenv('MYSQL_USER') );

/** Database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') );

/** Database hostname */
define( 'DB_HOST', getenv('MYSQL_HOST') );

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
define( 'AUTH_KEY',         'JSV+q`rni23|F`^+7xPv)~`CL7SWy/sc&?zx6`^v3pS6TE9M~m}KgKiW<!8I;95P' );
define( 'SECURE_AUTH_KEY',  'APz!Ta.Y^gL~c]UmF$mZFukzC#18PBWVXu1D>(GX,Ni+mA3;;CDTJAJv0@77dd#3' );
define( 'LOGGED_IN_KEY',    'Rmn#*c8pmI^Uw5xcH,2b*WLn=7m93%mR[+pZ)4u3=DnA/l&}gxKS;YDL,~RR[4p<' );
define( 'NONCE_KEY',        '1`/Z),#ex,!w8RLX/z#xMx$=iN=X[?&e31sI~&-P6DW]HM.%=3b@qQG1kuIyH^~G' );
define( 'AUTH_SALT',        '{W[g&m(f[X3ZVr%!=RAR+1;.|U>9L@+Vc+dJp!M{=P:<< ,1)J=8}=e6<P?<!oV*' );
define( 'SECURE_AUTH_SALT', 'N,9qA$N1yr:J1C=UO~NtHI=OPY/Cb~|%nU+JpU7:C+D>x{Ybuvz<Zlp+w@<m,8~O' );
define( 'LOGGED_IN_SALT',   'qrI+=+W)PQlqf1lV$yJ@V^8>r%jVOIiEY)C={}h;:$~)3/T[cFMsv|ykrH&/CDgf' );
define( 'NONCE_SALT',       '0TX=%?d6YceS(|@221$W#SrVTs/ulFJqm0M[OpS:Q},I8[)aL=<I4iGYITS61b,C' );

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