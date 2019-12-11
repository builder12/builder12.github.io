<?php
define('COOKIE_DOMAIN', '5starlimobusrentals.com'); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'i5368074_wp2');

/** MySQL database username */
define('DB_USER', 'i5368074_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'R.eTPVKEGfa5nEBABcc53');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'FnfZUTWXVcKlBFrE2STmDK8DULdT6K3aMPp4C6xXzkzt5DCLQERUDadU0ain3dvp');
define('SECURE_AUTH_KEY',  'l8jzQVrnyMNl8NOxWSathDqHYo9HB0Tbfvd2bKVpTBeFcBqg1mXgmeOUAKVGeRHj');
define('LOGGED_IN_KEY',    '22vpIxTIX3S0AOvQRXxBlKAGQxUgC5MIuek9Yx4GGbiN2mhcfYImjBiELhcZhiyx');
define('NONCE_KEY',        'GYfDQ7CrX3czW4faHVVjK25pFQW5gI2ImHynvwC7qlGIJ7sP3o6wXibrY9C6SGv1');
define('AUTH_SALT',        'JzIrKHd0Me91p6bkh3xOICE4PA2cUZOybpRPJQXImdv0EmFbzfa1hCim1eJXqg35');
define('SECURE_AUTH_SALT', 'H3fqXXVqMxKB8JFnD7D03qBKfDSRlQ2RckqPvXghXQUG8Ntvq83dkFbbnTm5olsq');
define('LOGGED_IN_SALT',   'Vp97BJgdOmvRtq57hLYefi2iUBXDp5vfFIFJ5ZK2YwOuFfdGtIdc1YQceXYJEAmh');
define('NONCE_SALT',       'qJqhwcYJsz62voHeTTIxTBd5YRPy61ZhEP8rF3umo2IpUAImgTFkGyRBvNuNPoWI');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);

/**
 * Multi-site
 *
 */
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
$base = '/';
define('DOMAIN_CURRENT_SITE', '5starlimobusrentals.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
define('WP_ALLOW_MULTISITE', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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