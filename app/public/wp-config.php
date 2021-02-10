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
define('AUTH_KEY',         'up7zOvfXFF5GYyFw22zjKqvZt8rzJBVCDWLUh4qWvLQ342TReCfgg1HkCv9n6d5ISeOreWuyz74QHgIygNZnCA==');
define('SECURE_AUTH_KEY',  'oTCCa0W+E2rYV82gKRiEEJRIAnov+nvTe6t8OPKwGKfBQC7Vi8sVBQPv2lLtuvW8Xu1TrOlbhIwTtjj9SVRRvw==');
define('LOGGED_IN_KEY',    '043YFUEQfVUJrYJ6vcm5on33lS7Bnxo1YcjfXfN29VtEqyGznCFn4Jy0LFlnE5/guX32kwrtbX2jaHBa5fvkuQ==');
define('NONCE_KEY',        'izEl2PqTDuY9tPDKfYKsWCmHNvqgDwc7kqU9KnhQgiFbeFj8fyHDsGH2qrypiGfEN0q/u1Hbbu1CiM9+D6CQmw==');
define('AUTH_SALT',        'NFaC2eKeLWL/1d+/hxNbySi9gnm1texeRRp3i8TB6nPC5+fDdSCTopyy15SDxsB58ZnyBzogd0EgF/cyvF4tBg==');
define('SECURE_AUTH_SALT', 'm+DQmTgOhr4/+AJ8n3fMHeAaW2W9myE6vzw4Uy65I8tfBBgiGInkPoEvOCvBgjYkObvBej5FiuBZA/6nhTUFoQ==');
define('LOGGED_IN_SALT',   'w1y5N/jAveqPs0Tx2wpKtt+6KwE6C3bMPtkFJ8KcJfSUlsSheVALjW/4h+lg512PHgv/pfojgipvFXqRtksNyw==');
define('NONCE_SALT',       'F1IDeuHEm62HbjWsTbBFHPdOwXhuNaItyygd1HUvOO8rbsCWLgW5RMTWoPmua6XLpXR52nwqPy8ez1WFc8Oqog==');

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
