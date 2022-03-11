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
define('AUTH_KEY',         'wvXw6+I5iNGoGVcEVjesZlFsAE3dwnRgfza/eE5gCkGriMDpCL5FoI7hmwaYM6MHvHdjcjZPRgSjjehRBnrGXQ==');
define('SECURE_AUTH_KEY',  'k6WORqRmpfrPR5pMqUtfGudAx70Lvkwlx308DRMIm83AEXxPJ8NZMgEppiNwX85WEiVKhbtmdDzCDkEF+kGWTA==');
define('LOGGED_IN_KEY',    'isOdO60wLs7R2aS9WJKM5L6S3B7xQ9lC5Ue8oZqdDuLu67fdcFw4y4bmUS3GeM2dGKpFsLp3Yhb/3IBZ6R5MkQ==');
define('NONCE_KEY',        'KaM2XEXWplqnQbooiZOPeefnbKYg0p61eByWGva0AeUgy06nByTarbYFpEHPtkVOrnSCoo3RnVHG89Z4mfarOQ==');
define('AUTH_SALT',        'Yj7TiTat83KCOHwlkWpiHg561bheiKZJpnkTTkz0wGj2viP0q6AzNNmYtcxkf3eu+m4PDVh7x1EfNGZC2UhBlA==');
define('SECURE_AUTH_SALT', 'lbvs0hDIw1lAac7pwMg9AMbfHjRzHCPbd7hCxPzlUKrqoQ2q1b4ifEfNGNj58hQnPBGvNkG/1zJKI4zCaD1MVA==');
define('LOGGED_IN_SALT',   'FKiBohVYEu83j0iErngqwhBEhZEB9bQY2CFPl89lYcfsKaW7ZO9LjShS44E9D9vzDRiedoatB97F8wAN8Y5X4Q==');
define('NONCE_SALT',       'kxmEwn9sI95cD12erkQFaKQixCDM5ZfYMjU8UkFUBH0fQVFUPI6zEsrqw4H256P3LFwX2/EUk+oFV4dMYog+OQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_0d3tc8dujc_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
