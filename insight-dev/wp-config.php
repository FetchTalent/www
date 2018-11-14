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
define('DB_NAME', 'i1618949_wp12');

/** MySQL database username */
define('DB_USER', 'i1618949_wp12');

/** MySQL database password */
define('DB_PASSWORD', 'D@NHvq@](PpE67JyY5^92~@0');

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
define('AUTH_KEY',         'TgcUkcx4F5YuxhD40xCl2yYAiDRHld6gbdrmJL9dsmaSdrS9SEJd89UXCqnTQL6a');
define('SECURE_AUTH_KEY',  'xE0OuXP2plELULgJK5aMkRRjAfrb5vN3acdFp0b5aDtdsX6YyGO6aGbDfCOyWYjY');
define('LOGGED_IN_KEY',    'X9dU47dXQXzefLIEWRc1Q7idAYr44a1n4lwsgidKSWRw4z1pbp5DBQ0qmTuCcY2a');
define('NONCE_KEY',        '73IQY7mihwmamnFl4E5fybSXMpXUXI0Qb8Npti6oLpJ0ati5b4LtxKd1qaTb8eGj');
define('AUTH_SALT',        'tk2TfN8lJkEkQFzSFT3hvuxMVRK3gkysrddos8COHpRdZDg8bzv78TiZ6uVRan0g');
define('SECURE_AUTH_SALT', 'EkDRn96Sa4T1XwKa7g0K1z2PkbtOJ01gyxwLBIyIBxmnGTLe8xXdNuluPZVPFx4W');
define('LOGGED_IN_SALT',   'BJHSDXBwzHSkiMqwkq8himAJ9TPaSfyyFsuvCIixNkCJNBeuAPuZ6epN6r2nMDxB');
define('NONCE_SALT',       '01RehKwbUdqP4qUdxd4r4DESgtD6pV5CnYm9RuSlmFZZFx8hwaamq6R8MxrjdExt');

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
