<?php



define( 'WPRB_AJAX_BASE', 'http://5starlimobusrentals.com/wp-json/' );
define( 'AS3CF_AWS_ACCESS_KEY_ID', 'AKIAJF4A43MKZMGYB6XQ'  );
define( 'AS3CF_AWS_SECRET_ACCESS_KEY', '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'  );


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
define('DB_NAME', "a2plcpnl0485.prod.iad2.secureserver.net");
define('DB_USER', "n5st41547595532");
define('DB_PASSWORD', "mPmY+S9vOF");
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
define('AUTH_KEY',         'Wta35%=#n pHryVFw&Gv');
define('SECURE_AUTH_KEY',  'y0BRjD30kG$O0$EIyRRH');
define('LOGGED_IN_KEY',    's+kDhkfsdCR$j=ps!wn!');
define('NONCE_KEY',        '$x#BTQ/ScNTv=bBFn sK');
define('AUTH_SALT',        'I&xZb9Fpr6(k/DVxc%xI');
define('SECURE_AUTH_SALT', 'Oy&yXS/w$a6Z-UYRTkP*');
define('LOGGED_IN_SALT',   '#=(Rf15&ay1Z_KF+3QCd');
define('NONCE_SALT',       'n*p2b-5P-!N!m7XW5f 3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = "wp_pkwt353mgd_";

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

define( 'FS_METHOD', 'direct');
define('FS_CHMOD_DIR', (0755 & ~ umask()));
define('FS_CHMOD_FILE', (0644 & ~ umask()));


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );
