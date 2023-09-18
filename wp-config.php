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
define('DB_NAME', 'local');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
	define('WP_DEBUG_DISPLAY', false);
	define('WP_DEBUG_LOG', true);
}


define('AUTH_KEY',         'Py3qNi0zNQE7i8D5+Wes0st4S00ukVxyuQCeioIfzBlDjQ0gp/qkQ51arWNvDIA4seQX6U88RH8qIo+0cfKh+g==');
define('SECURE_AUTH_KEY',  'eYblKJDbi1i4CTJfCot/NAPhUZIyESXpz7212tYwvSWCh8iqjJTqgJgmKGsHltIjvvo3GdVgdp2gGSSW8j22qQ==');
define('LOGGED_IN_KEY',    'dE1Q0zF77b/3KOkgTBoMumT9di0KCqAV8nv04cVpS7mfW6LTQT7qp7YZbAO+AfPYmspyPMte6K8tdoStcM6KCw==');
define('NONCE_KEY',        '4s21LTiVpBCspnVnp7DhWFaQh7rfg3tCcL3F31kVTv/ww6Tr22Y3noOyVhqbFm7twEYHYqC6i34+bDfPd0Gojw==');
define('AUTH_SALT',        '4OG68OJ+0pFTBvThzcfME9oOGwUiqLCYBNM2D1dmX72livhnUVoDiZEn+gFJstd1S7zb3L6q4LHOENWaWv9L8Q==');
define('SECURE_AUTH_SALT', 'hNniPSLSxmfWboo8lBtW3D0zrglqW4FIp+2PGhgfHhlYh2EX2ftX6EnMI4chNYVRen4iwcdsfMDqsJuGH5sqwQ==');
define('LOGGED_IN_SALT',   'FAwxYcq0BIcJvWIKI33mqUOl5GbtagQHKsIvypTF44FWYGIPP4XdngLtAqHp03mdRrtGvNl7YaymSIPFzE9aQQ==');
define('NONCE_SALT',       'YaeVvxG/Jy7qku8KBQuyzFzpOQBRO0AlKNGW3YQoTkTWF8y6tU8CaeTuUCQARWDQhZ9VJwlf/v4dHEja6t5F6Q==');
define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
