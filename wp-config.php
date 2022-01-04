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
define( 'DB_NAME', 'tmdt1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bqry0lhllulumbunxcyzvcx2wwzlsgdfsv4whdfnaxpi4fmamz7dobwbbaaeheg5' );
define( 'SECURE_AUTH_KEY',  'rbgdzxzt3hsn9b9djsvfe1zvusycqjzozyvkuumxqsc4lvuykpilocjtsiojq9l8' );
define( 'LOGGED_IN_KEY',    '0u4dow0bwg4x9hthdw879cvkhy5xedoxnzfd8z88udxqasbemv2bn7fwzgb0qbnm' );
define( 'NONCE_KEY',        '0veeeyk5pucmknupxfvngopvulwyf2kgeshf6ojj9drmkm5ol7lxgrba4d9yk92v' );
define( 'AUTH_SALT',        'eowsppr3digquhp7jir3gtm380xjd7mecqwqyuvepak5wrnltmfzesmbobhbizb1' );
define( 'SECURE_AUTH_SALT', 'ypforz1r9hllpkrgdr9lziynpgoltz2bxea8wd5ybw1ituqitnyzh4yi88woc1cg' );
define( 'LOGGED_IN_SALT',   'es9fhikyqnd3hr4jwt2s0qbyeqapts5hdaktvj2hyzstxskmlenivvmnw7aiof5f' );
define( 'NONCE_SALT',       'ucwrigg3dn4doo8r3fwdkqgcfoedzlxrzdxhjdgjrnm9pkhgddn6ydbrcg9geej6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
