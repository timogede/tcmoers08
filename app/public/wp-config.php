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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'R1BqH0uTe+BqMA+Mt1OVFb17gz56c1O6knx23PaIeMxlEAdjDFY+EOCOBTq8HyrDn+/DykUxOU7qd+OLmtc/AQ==');
define('SECURE_AUTH_KEY',  '3kFPeEuNn+O5xBxktdswoTwZHqKNAj6BNU/Eu7F7PJiGZchB/uQ3MoZtk2dFjQsGEvGcLHiD/ptGw5frRkwcgA==');
define('LOGGED_IN_KEY',    'bpZY24+NkMwXfC748ku5Zbd7g2h6Wzsh0Iw5ApU/UAZjevTNYyd3x5RUeQGkBlP9PczbyVa6nZZEwpGspB4iVg==');
define('NONCE_KEY',        'iPxtSCt8SUNTRAQdEho4zb5S75ieLDtffWhfylvWeYFslfV0wndfkE1TLeei4G+pFhvizLHyO20llWdw42KjOQ==');
define('AUTH_SALT',        'zciCuOQniR8mjOA3yXr2WZxnRXeI7gEPKSCPaaZ5JzO+DPfWBhLboqQnFX2L0rEfPywENbmWBQSeuIcdeRavow==');
define('SECURE_AUTH_SALT', 'kZBDGPg/bZaseO5HxG0N5t083OxD6uMwogwhAfpE6EFM7l2+RGJqyZNA36AbFbiJ/GHxqxaQZOfPpYTonPFxYA==');
define('LOGGED_IN_SALT',   'Wvshi5d6Y0wR25Mb8Yoxzskk/nHnFqSSAWGJ9uHobcYPYsYh0K48ur7BP9Pn4+2xjtZOjDmqV8PILSG5I7UTZg==');
define('NONCE_SALT',       'e21DxvL9DEVZEx+eFTxF94taPq/pLwImhUGD9PZgKXd+BBhf2oY6/NgAB4aL/fI0Uj5BKcFGVrqxc6ngt3VqwA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'WuAVqbxd';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
