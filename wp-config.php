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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J(_syXZ$]- `Fz5fEI-bA~?baB*3>?)Y5aCPNj#_F%o[RE7+p;&2bfzs%(,h/UG^');
define('SECURE_AUTH_KEY',  'A|zN(@ppSeNe)x+uU{S`eL7?):r)SV9zggtqd>?#utN(iS3)?4Kz0Rr!;nf}A},j');
define('LOGGED_IN_KEY',    'GSY~yk6a+y~_<;YQOXbsB3/jd2k/o[}6{5w[W~I66LO|Di+d+kix+.&j$+fw4s}R');
define('NONCE_KEY',        'g~LC=s3J#*5LtO^*ni-HPLs.cDohS@k&jCMwM=6a`sA=mS]oVo=#)z~3+Bav+ k6');
define('AUTH_SALT',        '_WosfZ9j):c$>O?r%@pAc ?V^qWpaU7Dp^^Ssb]Vp@;pioio[}kM=kkn_!v3U}uM');
define('SECURE_AUTH_SALT', 'W~F%eA6e{fh#:NtgazS:vlu~_pKZqUayomBua; [~aC?OQU8NXY,DNm3S*E81k]`');
define('LOGGED_IN_SALT',   '=0aY~M?8^[/a`CW*Y#UwY)5Q!V@S5Mj=$&05bi-D8K hXI:~dP)Vp|e{oF~[`o6I');
define('NONCE_SALT',       '#+?8)bvoO0Q=98|~xuxqKG/ }#MKi/%f|YrVv*E3|7p`c2VSQ}Wqgl,aiw#?SgOg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpgp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
// Turn debugging on
define('WP_DEBUG', true);
 
// Tell WordPress to log everything to /wp-content/debug.log
define('WP_DEBUG_LOG', true);
 
// Turn off the display of error messages on your site
define('WP_DEBUG_DISPLAY', false);
 
// For good measure, you can also add the follow code, which will hide errors from being displayed on-screen
@ini_set('display_errors', 0);
//PHP memory limit
define( 'WP_MEMORY_LIMIT', '128M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
