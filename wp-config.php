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
define( 'DB_NAME', 'wordpress_multisite' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'WpPass@123' );

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
define( 'AUTH_KEY',         'G`V|2>[aj9Q,u}DwQ?m9YfE9eZq+?{Ld/|pjV)Kalh9yfW4<_^5u5`$n`E6,w->Q' );
define( 'SECURE_AUTH_KEY',  '4)G97NKsZPD^!C&,3gvZp}DtDpfewL>UX:9wi8]@s`CsEG:t 0_ZqY&WhMrOeK&Z' );
define( 'LOGGED_IN_KEY',    'D;7nIdDtm6~]qFz(v$rfI>t5p.FsmL?ZB76yjGSY+FcF0J3coP47)?&UxVHOeJ_N' );
define( 'NONCE_KEY',        'X*?[VZrwp=5G4~7>C[w+*W~B4=~&#h-,6b@D6R{~&f7h%p}#}9r]eJa]3a=Tr]Dt' );
define( 'AUTH_SALT',        '*9:T_(-an$W04B+$-HQ:g0DvsWsG.??4tX}QV]|D 7,{g4]u[MW2iXB]_n9Y`DSx' );
define( 'SECURE_AUTH_SALT', 'hCG0BIHv??s>AK43zML|!h{N_Fj9D= >~$dpF9#xF://Q]a)b`G2J6FLWH=q,fDc' );
define( 'LOGGED_IN_SALT',   'yUVmcLYQQC)Zqic:p}h;NI~hB~a;i|.mLVJ^wtplZ2kTW=a{s|-}+Gk5?lf|D]Q0' );
define( 'NONCE_SALT',       '+Q ;IDKMUK6X1KM&{d5g^j~7kq vP[z;PTDRg(j=MfQwTvnCF@e03BE[>>Ns0d+E' );

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

define('RELOCATE', true);
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
define('ADMIN_COOKIE_PATH', '/');
define('COOKIE_DOMAIN', '');
define('COOKIEPATH', '');
define('SITECOOKIEPATH', '');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
