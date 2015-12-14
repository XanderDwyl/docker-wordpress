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
define('DB_NAME', 'db_ls');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '~W~eI!1zgc{9abX$I!;*._dCy&O?#Y8boKK5E%-W+rGYvraTnE#(P<]5b&O*rM;.');
define('SECURE_AUTH_KEY',  'JN~-Kr8J?3@rAH-S=1Rc4P|?4d|]{sZ5^.|3`:{&fTJce:|3Rh!cIK+&yOy/i&a3');
define('LOGGED_IN_KEY',    'iHqS|c|4*,:@Qci`k.bHhFV5+:tYlw$L e?UN%dBrnsBEJ>m[~Y$7i%y+3v0W0N(');
define('NONCE_KEY',        'l!ufo+c(jQF#m#Po#I6+@nl AP4Kj8o^!+A]* +)VM+?<M8:a,r0>k9R*pHJga#x');
define('AUTH_SALT',        '8D!D}FV26h{+T5mX@viJ){ClDfmG)iE&|9w^SrLAY2{MFxztbWr3J:mXyPy+@!xK');
define('SECURE_AUTH_SALT', '!q!8lb9yy[o2:dYmp=Z z(HxESk@-VEpt;mud9DQPZH/7/_RARr sN+Y?tEK7NI!');
define('LOGGED_IN_SALT',   'N.jp<2veX_dl-cI`qT3L.A<9IlLTwqGIC>^cLvToC{6@%v)}`v;;D&;|AGdI)2Jv');
define('NONCE_SALT',       ')j11+-6T Z?vEgl91gjdrd1ipXcL{-|-h_Gn![);O^UO-A+C,-5hG-Sht6N4UwMM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_lsrocks15';

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
