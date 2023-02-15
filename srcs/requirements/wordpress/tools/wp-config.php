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
define( 'DB_NAME',  'alidb');

/** Database username */
define( 'DB_USER','abayar' );

/** Database password */
define( 'DB_PASSWORD', 'qwerty' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define('AUTH_KEY',         'KV-fi8Se?z4g.b@W:;Rh5rJRo8SszuUM)b+dZ6^EXErBP}pwTU(#^V--FRu^Jt.(');
define('SECURE_AUTH_KEY',  'sd>P,dNd(g%sy&@j @}$-b[n4<v@=7uY2;/[W5eIlS__xey|T)}HjzjzF[$2ShcO');
define('LOGGED_IN_KEY',    'TQ]=awB-Y=fGbq9?|5j`M-AK#zKE@GQ_((TCe$$P|6-qE2#20r)=,IHsWI*Fl>2j');
define('NONCE_KEY',        '/r?$|Vs.Y>K2`g>C]]a~lpZkm.&-?aGh33f-!<2pvP^ .y?z<IX9//a3@pU$NC|i');
define('AUTH_SALT',        'Zxe|{^!-,1l-T|~H$q;z:Y%^HJ@ &7%M<#+ckOB$kL-dyvUc?@D+nkSNn3~2Lw9E');
define('SECURE_AUTH_SALT', ')Ky5+-3+d;-|uUsMnOjI4IrngI:QPj@7KB-N0tM+*qR#28;fsOaB0+^e>qn@DA<&');
define('LOGGED_IN_SALT',   ',12.WGI.M+-$)EoNA>vKHjj_R>93ld`6iZ~9-S^hH>>>!2rImzBGaYv 8+joq?]%');
define('NONCE_SALT',       'L}GKhzP}t[P>knD*(R@Ih42|-L9!T:CyM`YC=+UPV%&_ck~b4dh|A7jMmuO$zLSG');

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