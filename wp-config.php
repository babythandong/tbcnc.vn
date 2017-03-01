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
define('DB_NAME', 'tbcnc');

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
define('AUTH_KEY',         'DBLGh%3X(scHZ]ATA}ZN7f1]p[J<:x;4&F:KUL2MGM+9H6[m}T]yg0s0-u`964m2');
define('SECURE_AUTH_KEY',  '4ouc=]#002~L^9wM8Az#~[xRE [Y|xlN*Y1vO/p/U {U_ S]/mBrDz,VyoDFHYMo');
define('LOGGED_IN_KEY',    'BJN!mLLD[KVmqnf;UdLz;Z%ywkr@ZIl}^HtDJKs;D-<p~|P$HH#=OdIF/fhTndGu');
define('NONCE_KEY',        '(3])2*FGkM$Q *wtu_JuZ>#l92}[M`5?UpeohME=9CMxg`(TD2LQ)V0tlfPAbjnJ');
define('AUTH_SALT',        'UfoN#@,B!h}UT(5gc1Arc5,dA-Z;z88(x!rkag}j8YxGz@jBCC7^2_*fx &M9_BT');
define('SECURE_AUTH_SALT', 'Qk@49RnfN;euLM|=n-tL*qTz~hrF5~[z,}K#qN/BX(d;Y-[?^s62]p.*J<D#h=.?');
define('LOGGED_IN_SALT',   'Z$STE=fA:E;-l bryY>9?`+XT>48FTNb(r0&AW&]}B,.[4r?E]~Gi(QRXL?+@h X');
define('NONCE_SALT',       '7P&IGWGMlzD#}Ub4,:]5].9n{ud1jt5mTO3G`6s_P0g.aXy2bj{zIKx6:~7(H(n?');

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
