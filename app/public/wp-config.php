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
define('AUTH_KEY',         'e0spTbM3FloMReeMgCdmZWDTCjdH5rB5z1NtSqtNq0b55L0LD2iDUInJe4wy4FEgCwu/fOIRVVrGzk67/f8e1w==');
define('SECURE_AUTH_KEY',  'Q+0E4AUWVaLT8oY2JoSuIl4Qvqzk0seiKQ+lC83h6apCv59H0euz1ZBOFo0K7cIfJvcOsp9rA821/OIY/y+nEw==');
define('LOGGED_IN_KEY',    'SduIXtAWIMUCuJRvbnvdBLdpWDmSZekX8nSQt6gGxt8HV5t/e9rVCuNibgXp/V+cvPa0c1OqTR+eobN01vN6Mg==');
define('NONCE_KEY',        'w2feAduO+NdvkW3oW7JzqgalEXP170LRJ9BaSLpKg0LKbVyF4FJ5YNqQOdmblY494P1NnGn9BSVX53sWvZrdqg==');
define('AUTH_SALT',        '0Qh48GMV3C23BzntAF/VoL3zLUat6g7UZPnUIZmW3uMlLqCtbYi1JoiB/SKn7kwDSItSR0Q/vuGQAvoUEZa0tg==');
define('SECURE_AUTH_SALT', 'IiZwO+EOF1KQHXggrdYZFCsDK6Cn92kRzI3fqmCu+gYEi8tkvt1NXIvrsR79KeCMY2aqNO3ke/E7/BUyM32ncg==');
define('LOGGED_IN_SALT',   'fazwYM8qHWBU97BCfbecTy4OFiYmWYwlnO9j0zAHuJCXxHiOC30Ed19CweCWVMZbkGQVWhaf99ngKG+0fzvUWw==');
define('NONCE_SALT',       'FYWein3z/qksTLTbg3nQBlvftEw1FraMgNg1tH7IofDh+s+WxWlyCJZ7Q7IUH+iN0HSrp62GNqZBA2ji38KllA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
