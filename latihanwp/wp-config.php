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
define( 'DB_NAME', 'latihanwp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '62HfMlXIP6bcPaini4eOPj73Nec7kDgpAdCMzl4gQTtV8FMGloz5XssmsK9s8rBq' );
define( 'SECURE_AUTH_KEY',  'oMlnVoq2z19WEaeNSOr9hWq6lF8uroqaANzv30RxlIaKSpTLN9VydlRzMEEh6KhI' );
define( 'LOGGED_IN_KEY',    'p5UTuCiqP2ykyb6BoUF8pIrrnTZFujzoS1GBXvUJOjarTf8LPdrLhX6BTFB1Tytl' );
define( 'NONCE_KEY',        'aycvJ0w9J99ysffG8o2hhwGgWYNdYSMH6rwAhALqu1uO0DzcqcniF8csmjsspghD' );
define( 'AUTH_SALT',        'a2rWTJykWv0lA4RSb6HUgp8KO4TOzBfdYaq0NZDuXfYVKIV6vrf3OnI9fTMovl5D' );
define( 'SECURE_AUTH_SALT', 'bj1srXrJcwzJt6IGHbVTob97QgMYCworfnxeIlHFrRZBKz07wwLfS1V0mUJ7j0gg' );
define( 'LOGGED_IN_SALT',   'hhg7Nu1yzQLjUx2J86fDOHladKdjyRS8my4lqA97Ua3qBW8lqizpKlwTYNVptpe0' );
define( 'NONCE_SALT',       'A3UeWxsRjLI5JxY0HQsWflFdLc8HGB2Sn916UoWnpZJfmGeqT3VT2eV8iHrerITr' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
