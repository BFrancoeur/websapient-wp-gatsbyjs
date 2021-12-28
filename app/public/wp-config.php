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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'EkRxw9eSFofSpvMhKOmfqFsnag2xF92X2H61KPtiUDKf2HdCkZTkg3ME8DiH7NVpyMtbPEOZ1G0VMbV43Hg6pg==');
define('SECURE_AUTH_KEY',  'k1I0x7esn5b9c20KDJPJtjNvp9MMVeEJ7W23+eyPwygMT6wYQkLhnGoQKgPdkiLzVqyVNLLdw0OU6Xj3klpO4A==');
define('LOGGED_IN_KEY',    'U9DJjceCaJSPYHkZNqw9WsDo4vT6BBSwCPO6SgsqxCgP3oYewh0dIEXteoKLcRDO17jF4Ag6/vBDOZFEyUtA0g==');
define('NONCE_KEY',        'sz9RXznaIxtPv5ju9MQQ3nHMxVMqP3iBgw0mua3CxzGQO8HJjkWfLwOWQcg0GR+g3gl7cnW7Yuo4gcB8BWRnEg==');
define('AUTH_SALT',        'AQ95s523bJoHGDH1609WMuWtUQUlVCFS47u4z456+fBiCoNkdpReGIqF+DGAY4/PlZRB0YUQybU0So6paBr6Ig==');
define('SECURE_AUTH_SALT', '9j09Z3nYzZCvmWu733mQ0kxbJVQcsZmc415xcAvnJlvSg/GuiuuSulyiyZuf0yWXgEoQ+uCUvM3dAA4C5HdAng==');
define('LOGGED_IN_SALT',   'y+Z/PnW2dWnvivY8iLkvaYn4wNWzlmGC2XByJboy5cnIxVR1IzJjxAAgH/i0Z7Lo1pDVS/QWZkbphHBCMtbE9w==');
define('NONCE_SALT',       'oTKHPYCCHo+TcNYoIZeUfzWLJDk+GPznXH6z1vdthVqOJXGhtJnXLUDNmJQHZRmqtk7CFYn8/jFKi8661iKVgw==');

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
