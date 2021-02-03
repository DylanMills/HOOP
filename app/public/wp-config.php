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
define('AUTH_KEY',         'LoWIDzMhVwCtj+ExES0nnfX7WzSpVS+CtdrE5aV6m/ICSgVgxpwK0kvG506jeXhEhRqn/eFzpXml3KDTlp+P6w==');
define('SECURE_AUTH_KEY',  'd9ACfk4QRJlnHbsPh0bk7+QTiCXNfx6vxL78dsoA8iyu2Z6zUEWI4F0J7A630IUBKSVnixaYsfRyLj1y5jVAsA==');
define('LOGGED_IN_KEY',    '+QkvnX1aIixUYGWZ0CZnmrV//1W5mwgZCOPzofpIr9CjHQyZjOU/3F42TVHb6/1LpceVSdW/KtaT60PG4UZ+lg==');
define('NONCE_KEY',        'HUeyYWuTVqa5bHWU6WLjkezJcniQDpwutsVA8/kdC+A5ABR2uriCCK+lkX/AnEnwpC5GQIUFZRaAjLPn3oz2YA==');
define('AUTH_SALT',        'o3wqAb18oUiaP/2FGoCdDeVkM28RMHzxry6QoDFGZYYQuc6OMQlK+9nvTJDV4ohA6ZTVO7VdnZ8Y1ObLUW/bNw==');
define('SECURE_AUTH_SALT', 'jrTZHFuNnrE1Owjzx+zr+02kJUW+Z2+pz7rmbd4whhKPJt+QUhNY8Vj1LyKYzWX3RurfcdI3etXzS71mU9L/VA==');
define('LOGGED_IN_SALT',   'IuI0qsZsjWxElMnk36Nd2U3pQ3NQ4l820FywhPaqMCoZImMwQA9zb8qgVw+++IAFFWIXOoMbURLnMEuS/LctMw==');
define('NONCE_SALT',       'EOD4a9B7+oZpgGMSRE/POxQ3ElUhZY6CPwDdg3yoJPZ3iVHyXQVcI7s27UinyhuYvVVxvdyzI/yHN/hhEP8Hgg==');

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
