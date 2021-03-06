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
define('DB_NAME', 'i5337733_wp2');

/** MySQL database username */
define('DB_USER', 'i5337733_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'M.zfB3mMzibuzUYn7B006');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'H90vb5QEIVZcoNqaGgevV1WibbEEcWPD4g9fGCKCYjrkYBeoOzkZ43wgFcoVZlqp');
define('SECURE_AUTH_KEY',  'S815wW1BL8srSVTegK611w4oEQLkisLdKSKfFwmhp0V1IwGUTXijcT30yuT6KEoG');
define('LOGGED_IN_KEY',    '9Ibwq88DhhBmHLJt95uPCeTx9KfEAdoiM6rXk3xM0XJRxtMOCxez1cIk6zcohXW1');
define('NONCE_KEY',        'drn0kps9QIlSbDmHyw3C6glNVsRSFqcDBCrVfhcWR3wns7nCEt7b2q9X2k9TgGlC');
define('AUTH_SALT',        'MR79hCcwEf92fJYc2pShrGI9LhE1HQgCfKXAeEbQ8ks2AT9DTQKXQclsnrDHNV72');
define('SECURE_AUTH_SALT', '3PttsmaeHoQDPtOQoLfkBGNPoHrh2Uquk6TrPkX5fS1Ev0QQfdtq6RGWEDAUuqla');
define('LOGGED_IN_SALT',   '0jzNbRpd8PAzub96bTZBGEwheSSUhtv9TxybWcychR5YP36XdMFjr4QiTiHsyvFW');
define('NONCE_SALT',       'NcgyypWb8uWHYrrGWvV2nps8Fuhb8z0bXvxxcMHarXODU1WrC1GbRFNQlglbr4Q3');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
