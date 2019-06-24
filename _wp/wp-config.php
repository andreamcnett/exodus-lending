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
define('DB_NAME', 'exodus-lending');

/** MySQL database username */
define('DB_USER', 'exodus-lending');

/** MySQL database password */
define('DB_PASSWORD', 'P2scl5naqAKLr3Bj');

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
define('AUTH_KEY',         '`H[v?:80/FoHq_-sMXy?782HO|c.DV>IVH,=wbjL#hu>{8E7:<})BoG:sE9v%Uoo');
define('SECURE_AUTH_KEY',  '~S%A#~p/ld$130F.tr0OKrXN4X)tG?kbeX1v!m3(]i*X|@u7Vpa}7wKFgfFv?,4M');
define('LOGGED_IN_KEY',    'ivN@!:^]T,D(#^f 0je)?)_Dv@dw+HM5d[+.aMYc^/;Q(fcmJ/:FNhmO/0bU5r(o');
define('NONCE_KEY',        '`@=_6F&bkJ1XKSZ:y,DIa;bb#ejT:rl{!z{#xY7+@tYiH^6=fDGj*m`e2nC1(sdE');
define('AUTH_SALT',        'RKpZJiyXLSkmAiGi66@R<Qg}m*EnHoQK@*>{r2euZ%GN IhryXg+c@xqp9dfPX]n');
define('SECURE_AUTH_SALT', 'q <c3*pr|~x26bPih;L?QTc]=LV$P,-v@A6lH 5YTvo&;[c>;]z7eSjV5H4{DDAy');
define('LOGGED_IN_SALT',   'k^hrSnqVCX]~kISqr4r9B@lI#^_5vME4#]x_jsbpychl&r5:?sMK9/OrFFO%:c(h');
define('NONCE_SALT',       'Pw$R.C#s^<UCcH!e@#%)oDAyd#[Z{Pq%1!_[rH(;O>0OjB4tLB0t0LEv7F&9}9Z(');

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
