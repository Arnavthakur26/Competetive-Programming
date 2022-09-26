
text/x-generic wp-config.php ( PHP script text )
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i8098182_wp10' );

/** Database username */
define( 'DB_USER', 'i8098182_wp10' );

/** Database password */
define( 'DB_PASSWORD', 'B.YZnLCoGsB4rh6SjmN65' );

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
define('AUTH_KEY',         'lGtoXq2TjX4svIEemcx7jvZnI20HgascwufFISRNMJn92LhSTtHpySPyigb9BIBU');
define('SECURE_AUTH_KEY',  '4MIcDyi0ShP7hVq7XBwEtnjD6m0QpqnDZaw9f7GMB8FzLavCX3mkXiR8gu7R6F3I');
define('LOGGED_IN_KEY',    'wjnaZTQsS91TRdo9z5ZYpCpxL00kP34Hf8gythvOp2Q9Y2Jt7azCvID7ZlyEdOXp');
define('NONCE_KEY',        'aQtnjhdS2uCMXlIsLLrhr9LLWjfeFiTuJJtjz7G6eCoRiMgRXNK6qyZKM2pwvSIq');
define('AUTH_SALT',        'wEDlXiyJW3BEflMuk6mDrcVikuTKW7LLkg2kkendHlF4JAiSB6o3cZlXLlxz3nMa');
define('SECURE_AUTH_SALT', 'FpU2k9iIC8Wi4M67Pszk28LUTfAM00RrAgkw8l1tM0zw8Yx8GOKTAbpOERuJazw5');
define('LOGGED_IN_SALT',   '7SIcOpuAQcyJafJIqi8BytkNvZk8lkLEolfKHMqpOjj5nAeM88XzMSwD3MwyKJEL');
define('NONCE_SALT',       '9HxFE9bKU4TzG9Fb67qiq3HLea1tvF2k9XOgBD2aw5ai0mVlVJ719uqhErzwX6sB');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
?>