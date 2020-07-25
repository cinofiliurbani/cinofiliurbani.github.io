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
define('AUTH_KEY',         'WTENMhpkwjjgynPwDedU4ocwj1hSTsyyx4W+5fD8S5THSLU6Imvc9pubeIuMS0vSr9OZOyYHkz5+NhnkRtUJRw==');
define('SECURE_AUTH_KEY',  'VnaFWijIS/9YS5wpEYXdO28AYyfvbTyNFqW8x+KFiPB7UiEBSvPCZGAwmhPmEB1SwO3PvBPcCMwaqrsfW2pKrA==');
define('LOGGED_IN_KEY',    'Bu04B2OLSmAhgPiBSl2tw0cFR9fZktf1p1HvWjWhpnmO2mTCm6yP4TC5zzMJ9mb7Oa8lZoUXjeWkEf/OospokQ==');
define('NONCE_KEY',        'GcwJUG0kDM5KlPwAbBlEpyagVLWJyLC+UFuF5cvAGriIhxUEAFv6/jf2iIW80EBVRzEgJLKb7jeqsYmtRHsarA==');
define('AUTH_SALT',        'leFC5h/X+xoEgjTJ2Ck0HiM7+aqElEHMnL3tryvUa0oC3nnRrsokKphRbBww6Si7Y4/kQOB84YrKDMjyJet9Rg==');
define('SECURE_AUTH_SALT', 'D1NiiBGDGC8sXqXZysVw5ZhRqFMr8RKxlsftvuX+ehwrjJM6mx9AHI2cchTmuQl8FRngTfRUocbNVgygdkQmwA==');
define('LOGGED_IN_SALT',   'ylnDHQvp7eKddp4ao6E90I8ZWKdVuHJzzLar7XdgjOTcnmQ6/TNw5NPttM3CqjuPABx3qmHQ6G/X06gKPZu+qQ==');
define('NONCE_SALT',       'bevnVRPD8Y2KxCCec2t9rsgW4zwTnvB6JDNMZaFOatNoXw2CRVMQTILXAZv0Lh824CKVAHWwOO3bFygRGUe9Ow==');

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
