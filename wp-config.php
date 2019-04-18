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
define('DB_NAME', 'agent');

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
define('AUTH_KEY',         'ybikR11a!y[;2B*O|`GAav9U8o~u]%$Pae-h=o.SK!w_hKSv *[OCr|-c46=re&6');
define('SECURE_AUTH_KEY',  'x}q!&C*833L/-eRMon;ibKiv.P)/ .k(9^Cbf7AqbRZ`%0_Tw wkr-[P+{Dn!4(a');
define('LOGGED_IN_KEY',    '&+$rj tvUH~>#&tI,.W6kz,uY:_t:Vs}Q) E]<lijaYKeq)?78/EVu9~1l$fK=Vs');
define('NONCE_KEY',        ':9YMLV5@_3/B;g$$ xf:pvwQQ4qBh`A{R;?2UQ[wN|m|rVc6$IE!GN*Zu0V6Q[Pv');
define('AUTH_SALT',        '8L)]1;kTMHVVDk.6LrN^%ikdIc6Rs*+n@kx=~ hf[3z!#lIGU*GZ??aD:]>S+:<f');
define('SECURE_AUTH_SALT', '8z.&oM*J][zs;I^3i`(_unJIWymXutvc}:EGXD~[Is;eC:zPh)7]g]y3q3t+1BjU');
define('LOGGED_IN_SALT',   'ruGd.;frj qUA/2f<ytd?D3k%w]]1v+*7LCKm)DgN2}!Ssl==aYi7mYK)?<3P7h;');
define('NONCE_SALT',       'cQFu@zL6`; PziJ|)/~GdsN~8PlT57[!K;*=a.Mz--!x#`O/*>9S@r/.!#dIB{8r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ag_';

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
