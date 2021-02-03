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
define('AUTH_KEY',         'diPENsdpAcAXx4F9KFyjcfRHJ0LEyg9NS2rogHunNtFPCOc0RRcDdPCovKWfVlbKge/YTjFTP0seJG79qiAIvA==');
define('SECURE_AUTH_KEY',  '/2R/NjZGwEvf5+NBmdAzrfbqG4YQv0LAkSWTzwrLEwewj5aE6h1JVWTQQQOqhbVxN6e1NUwoZ0ytGGwbeg6fuQ==');
define('LOGGED_IN_KEY',    'H33BPBqYPZHXiVJ+S+4c8lovHrCiJA4uCGLLbgISdTrzPbiQL9it8zQ6AH6vc5vzOft/rzN9WiUMicXJeuH3QQ==');
define('NONCE_KEY',        'kst2T97koJLeWxke3j4nDz7I1KInRlOoalKFDq21QCALDI+qROusbj+NiFQvjU5babxx8H03itKwqhMUKJHyig==');
define('AUTH_SALT',        'xIYhMsPiIjMlNbQWoWRJlO+CVF17DS/P0vrEq5pBCZwdH2pvfnrMghO6YRIzyvR4jyJGao/LBgLECerYaepaHA==');
define('SECURE_AUTH_SALT', 'q8F0/csX51uuh0gqW7147O+f3AEj9QyNrBaFAv2SXoU0U5gog+oUUB2omtCFRUPwENsf82NfFq7zSLgVB7D++g==');
define('LOGGED_IN_SALT',   'y62+neYaQxfOL6eQhT18Ry8jZVvx/AakmqaM9Eo9k2bkM7XA1pgkin3tfOZ4wSosjOCdTOWh0GSZj7tFI1OzWA==');
define('NONCE_SALT',       'OrT+k/VtQAmib07nKnpbZ4QDyd2M7YjxJXPQp25T3NAkN4Exu/P3kQlMgWNbIVYznKMkl+/At5yRqIABAGRtzg==');

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
