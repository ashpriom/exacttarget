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

define('WP_CACHE', 'false');
define('DB_NAME', 'twopente_wpstradigilocal');



/* MySQL database username */
define('DB_USER', 'wpstradigilocal');

/* MySQL database password */
define('DB_PASSWORD', 'Cas#$#%');


//define('DB_NAME', 'wpstradigi');



/** MySQL database username */
/*define('DB_USER', 'stradigiOut');

/** MySQL database password */
/*define('DB_PASSWORD', 'stradigiOut123');

/** MySQL hostname */
//define('DB_HOST', '192.168.110.121'); // localhost
define('DB_HOST', 'mysql.server288.com'); // localhost

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
define('AUTH_KEY',         'Ywb-fu[^Si:7c|PH8w?qE){<~rR)~EfLOg.q%{^1TQ_t?sI*4|9X@U{ZW#(6d:bt');
define('SECURE_AUTH_KEY',  'kxt=Z<.h%*]PeWUjp&/xmi4?BZ:h-nGIlPFnPs:8lXwjYIvjT]rq}a!H7NnYxDV1');
define('LOGGED_IN_KEY',    '|+cZl[_pa{vVe%?S7I2^A7cZB^P }KzP+@+B P^ZK1~4jbb@FwB0~9Qd%i!<-``<');
define('NONCE_KEY',        '3;T%Qn/jxGgwd[:w*WbfU$e;Hh0{x7Zr9d.!o~X}Ba+Q+q.|KCORLqhYH|)Q+Oc>');
define('AUTH_SALT',        ':7<C8RRe*1 KJ5;G{@S%4$_p9V>Bo3k= =CHmv`KR^Be/g&!J~>i3_=<U;@c5R2!');
define('SECURE_AUTH_SALT', '6Xp_w~,!2R J%#*$H:R$T%xE1*$c<+j>dAlg<{dU20=J}JOqUf~%1NAfmYT},[i:');
define('LOGGED_IN_SALT',   '}n{-##4,DH:>/fx>{2{[qGM+YRP$F/LL>zVhm4p~A}^Yd`Ie!?1?sm7f4?[f;jP3');
define('NONCE_SALT',       '%U`zok3(kp?(Y5m{ zfs%a*_fw&G<anNB<`pg`AHmVA*{f3nbe4a IR`/iM4y;Mm');

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
