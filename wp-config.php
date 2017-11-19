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
define('DB_NAME', 'wp196');

/** MySQL database username */
define('DB_USER', 'wp196');

/** MySQL database password */
define('DB_PASSWORD', 'aFS7)@4p3N');

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
define('AUTH_KEY',         'apyd9qbqpmn81b1p9f0a6dxf2tsefk65ucti92ggmpkyl175juj2elghcea4hly0');
define('SECURE_AUTH_KEY',  'w1zgpdd7srdvxslgsavkkclqmx2w29qjme5rcovmt7ppxez9v0awpbsjjex7dyin');
define('LOGGED_IN_KEY',    'i7wjtyks8vafglggwayhxeookgsjbrtmkl9aki7mdhnw72cbnxeehltnchuhu1le');
define('NONCE_KEY',        'imiic8nsqbefekwytbpytf2iifqlgq2hhc3rnt1godgxuxi9aa0pdgnqxz2ky8af');
define('AUTH_SALT',        'su7nbk2wh6ocjzur0gv1l4uiafjprpwwetuq93w12pzytgnze7kmo0ayreowm6xt');
define('SECURE_AUTH_SALT', 'q3vw6of47mw7xxvvkgiflfigpexb6ods7eb3ztz3dhwciqxwq65ln58bhtxvunnm');
define('LOGGED_IN_SALT',   'fjdzfnzw9pkcqftbrr5igzswj3f3m5r3g6akflbsj6grrpablgm18ywfna8wsr4k');
define('NONCE_SALT',       'p0iokn5akpagmrzpgeffbe7o0ifykkv7to7cqp8sa7tplmsdfvasqkdf5ei2uggh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpvq_';

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
