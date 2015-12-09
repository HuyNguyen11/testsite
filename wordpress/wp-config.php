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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'ejY?AsE-g+C2W?<1hZuBE5!nCOUP+JxUvcl0#{69+$RJ7,62Zo/QOvA*3mp*Q^L1');
define('SECURE_AUTH_KEY',  '[@#l;&^=rq.imuv@]Yoy^l#o:,{F#/}Q}Y@O,oM:k*||ujZ juMJVhMPlA#B-Tus');
define('LOGGED_IN_KEY',    'GTj*Zr>~QS7f.AMG zRKAmd(7UgB+tKi$/&iVYGYlG q|4Z8|;SLTaWxxbht{-y~');
define('NONCE_KEY',        'O ~{B{@#g @-tNBFG@W-q!c:5s9Ud_@%4pbff&g|Kar-@f*ag|8G%5Ew3*CxR(2`');
define('AUTH_SALT',        '9U%ca;{tSo]UAB:xE9f{-9F<!agQt,c#b/H2o@eBc<cQfet&&,eCC%-|N%Zg)%@6');
define('SECURE_AUTH_SALT', 'rk|ul`o|F$Ie8j0/ImJ,.W1cJ[K&qu-7gB@YtUCb^I34_bA.9[9Pm]L?0v/S`@Q-');
define('LOGGED_IN_SALT',   'LB{m#18@WJ9 MV1-4/?gs,M0Z<|Ed~GQJ6FsQAYI0&wdX{kG#7C4IV1yrknNXd B');
define('NONCE_SALT',       'G`6|+0+Xsu6IpMoVafS?V[oeIV:=-prB4 dCyy6&q;irw7xO<{$ogS^1/-c|#Axn');

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
