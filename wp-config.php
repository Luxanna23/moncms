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
define('DB_NAME', 'yasmine-amaddah_wordpress_f');

/** MySQL database username */
define('DB_USER', 'wordpress_51');

/** MySQL database password */
define('DB_PASSWORD', '7O7pP6Rar#');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'jnuRgPIwwaPsS(LVdp5E^21CF2TdyuI%1b*LNbse%O1UN&K59gau^S35P0RfnZYJ');
define('SECURE_AUTH_KEY',  'Hvr57S&w*J9@wdtCMeag!U(^4azf*aP%uGM3Wj5GCb*PIja(o@SepwyvSYQfSGED');
define('LOGGED_IN_KEY',    'x(R@qQD%72*ettWieKD)WI9hwcJ095(0dHs3^Tl@WYDHyn(C0G2fDesSYfs8WIDa');
define('NONCE_KEY',        'JctTBRYeu2C^KlX0StOK*Fss*9YXBbucv1ufKqOdUP7o&cHd&pdzMj6j^du5D1&v');
define('AUTH_SALT',        'K2Z*oz@^&tGgXzMua#8iF@SWOwHc^PcE^G*dgRrywdzAvX1VeUEXAvAvGm3M)b@*');
define('SECURE_AUTH_SALT', 'ma5)fdnIOP^Bf%K#M#vLsx9^)tRCUB56h%hr#R3Tn%)En)j%spxI1gMsjowWeiRe');
define('LOGGED_IN_SALT',   ')j1L6Dfc%t5Zei&fhL!%@ykl9M&8hACbNnM4O4AzRYAubAi9qUVQH8FWn7DOklWa');
define('NONCE_SALT',       'QXlxyCh4de2yd^2fH4!&&arfJZ8fRfK81tSs)CYmHNWSgBhcU41dZcK(6fz#X*e!');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Lz9UG_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
