<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'EoeGKVagFBiv1V8/utceA+IVRsclQywXkbf1IF56Rl4PPZgrUpPsYMiVA5MvuXwv15CVOZBJw3viLHV6J44eXg==');
define('SECURE_AUTH_KEY',  'Kow8gCm0NnFXLxQJ1Hdhkl+S1liEJtyskb9zQnA+TtW66vN+hTCaD29bo8DU+M6vAGyU1nOwDIm4OOJppwmEHw==');
define('LOGGED_IN_KEY',    'lVqzJ0Y+M9NMncRBQw2M6AKGR2dubZPuldmOztjePVIsdt5HbFcuixT6an/T95g5ugwVbEdRyWMbJyPkpCGlsw==');
define('NONCE_KEY',        'dVEB1TmKAlBAOcNHU9FXvGk7mDOLYMHeRX9wRo0EhPhn2xNd6Me72oWp9+OQANFItOW/1k1Qu8pYBEYBFuMu4Q==');
define('AUTH_SALT',        'RquPsuYI83+L6dLNOVsTHN8C3z2mD1fAZJL+PDN2mctarhkAsJTalsSjCxTkHp2LnRG6ZlGZQfzee4nQC3TpPw==');
define('SECURE_AUTH_SALT', '3zy9YVMo+ftF6B2zDQ3hTapnUVkw3XB1Qq1Ua532gCRCcAQEnQUmI+lGzeWxDcUwzRLzH5KXqtEvT31czj0c6w==');
define('LOGGED_IN_SALT',   'eywHAsvmPr5Z/uoKVtpnDS4QqurXzNgVyYzRE9PWkfixOYoIvq5m/58vlmeCv+WwNgNDTH4uGlw2qnBzJnis+w==');
define('NONCE_SALT',       'ibyr8YhVatYZEo8kwSda6ghZAQHlU08JOX0dC+dWXvLqD5se65sSNrktNdOkH3j7rGiaeWajHQZKgfsLUDx+Mg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
