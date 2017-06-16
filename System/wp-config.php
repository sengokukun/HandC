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
define('DB_NAME', 'typilcgh_wp71');

/** MySQL database username */
define('DB_USER', 'typilcgh_wp71');

/** MySQL database password */
define('DB_PASSWORD', 'jgX3[p-S77');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'at8sd2hx7sunxnhbbydf8acpf7gv8ma6lgzzrp3df8ua840j1oyt468i8dtz9hf7');
define('SECURE_AUTH_KEY',  'gicu6b1swpo3hbtkcvrjwdgndfwqjriuwevylok7tlnn4mw7piplmxcaetreule5');
define('LOGGED_IN_KEY',    'ynkbxhggxywa2halb8kgn3pvctt0fb7qkupf2eyzo2hujix5b55jng68gjludapx');
define('NONCE_KEY',        'c404yowhdarzqrh8odscupbyjwjifhqg6poaibmpuqznrauz0xljqxmupvdkcuwo');
define('AUTH_SALT',        'fecfnf7xj1yr6s7ikovlbdsxjdedgzs3kuvkxtdzctdpjpypitmllbtn1n6h4nqi');
define('SECURE_AUTH_SALT', 'augg6jmllra3baj02cbkuayawhxckbippbkcdxjqom7ndgz45xpppwzi3zi2y4vn');
define('LOGGED_IN_SALT',   'iiclw4s9q377nntjgqzfu8ykzcfd1l0gknm5ncplk6csacxirmgwt5atixfffz30');
define('NONCE_SALT',       'qnvycatjumaq5nvdw9w5989rtm2qv2ctymnwjkcjuugkmneaqas8cwjzleudozqt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wprm_';

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
