<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u605407518_bapaq');

/** MySQL database username */
define('DB_USER', 'u605407518_surym');

/** MySQL database password */
define('DB_PASSWORD', 'pySyPapeNu');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'QjdYDi6AYUmFkDqNxVbPulTYwAxULdsz8czS6CG9A3FihVFcTtXpVWJf4B5sp5OR');
define('SECURE_AUTH_KEY',  'TOrrblQhkkZbrm64pgSfIkegZufyQfvrwtTlG2jNtZoqApgDQxSer4Cz1GkX18Nt');
define('LOGGED_IN_KEY',    'otcN7KtrRdsbp3RoYzIhfjEWstwhSV0LM11SHQAUXqh15UtgLKK6uy6IcnuOCkGQ');
define('NONCE_KEY',        'vYqbLoVi8B3cAHlpR0oWHt5A7TpZr1I5qAN7ZfPoH8ftdbDzGedIduPRNFUJwLtB');
define('AUTH_SALT',        'wRBzPa34GlBeEgADzyajjn5Ix2YkX4eU8WzNnASd4KlJfA0C76sD14aCDDLyMCpW');
define('SECURE_AUTH_SALT', 'SSLe9sSpxrfIhVsuWH3rAuFeB3W7PUi8WpH3dHWSTB3cHqigwlIZ2veM6P5HEL6i');
define('LOGGED_IN_SALT',   'aLetPcNvGHUPTuuM7PJj3H9YTAYksiKoUxaEOmhdjY7SVYAzOIvBR31YYrqzzdva');
define('NONCE_SALT',       'u0Kquob0Vm0FiSESGvZ7PKSyqlDKLCfHVPH9zMV4c9hEKF9lMzM8dXiW57SE9QES');

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
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fsdv_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
