<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pdc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD','');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'j]qW]ZNJR6N>1j&2gAoA:9Jn+xBML4|VOZ> X#kL&bkN^H[Laj_rzHLeT)A-,Xbi');
define('SECURE_AUTH_KEY',  '2x#+ml^=X=f5%XyrfQ]+4F cb^A&|=X#[0HL-#&/p~sX&vISD2|r~ih*2PFXliT]');
define('LOGGED_IN_KEY',    'B%%w].wNMd)4K>15[t_W0%}q|+ngV*$%[f!|lVfE>Bo]u&%(DY-=K,+YW-26Ocv0');
define('NONCE_KEY',        'S`*8NYN](AF9 .L?8r(dK7GW|G<7^|Lk&@7!j@8]&(0?SC1m+F,<U6BR.i32/PrY');
define('AUTH_SALT',        'mZ U-jQC^lpjg-l?{Kf_RX*-v5[fI7#pLJ(3M{szfLJ}mt=u0#9I74LZ.Lb|@T~/');
define('SECURE_AUTH_SALT', 'Y^+6cc{clr~_}^+}8tb=]E.q|Yn8<|=fF(N<O^)x;pU3I}gxAmLBiGI7|.)a~5!G');
define('LOGGED_IN_SALT',   'ku*%EyXLT[|(`EWO>3lml6k}^X nN-I2]&v5M7VIGFIz.>@o;zzYN-<K<.)g>Wu`');
define('NONCE_SALT',       '3o2r0|u[o$Ut*rU1b|s_^9s+:o~hNJ! MQB=HY-_.Ieo&%or00DwM-M#oK`eELo0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
