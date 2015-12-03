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
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

error_log(getenv('DB_USER'));

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
define('AUTH_KEY',         'vHaz&kfG{6R;HfJQfuZz6cNt)nIcr:DV NXrZb]JG*)ITaQ;I)EBnlD[mJ#+5Lyi');
define('SECURE_AUTH_KEY',  'B,!ZfRT0*J$aW1A>Y kYmiX`b*80|=AgyTzd8]Q8o*&n>H_$g~oGR+ZmlP{ Z:!6');
define('LOGGED_IN_KEY',    'zeht$zU@c?={:`P<nN[L.n&XdVEMR`,},?qFj6.)4<^=:IbQsOWUmg_F_NM52F%&');
define('NONCE_KEY',        'a0,$Qb4O2*_3 bW%P=k^*:A0$%=rO0#rx,_/`>1#XZwyf/7S984!4/ks>:AW%XUh');
define('AUTH_SALT',        ')}2{t1F:-Rn7}]MdnW}RuNsk-BQG*7woZ&JQodA~-vn&Ma7[*hm=zf]Zi<5::<0n');
define('SECURE_AUTH_SALT', 'VB|u0QZT^JAVBQlQh|TWhBD6In_{k$GmCB&M.<{MzW]<{qxgq*/YYXd3,g7^i&dd');
define('LOGGED_IN_SALT',   ',+1BR$Xf*2iNR-.|Kp0fR7VP5r7|P$VR-^,*$x?0tx-1.I8VB|tKs:(YWRwNC^;N');
define('NONCE_SALT',       ',Pl0J (Vj#FUhvM|h[GV2)-/c5~7BT&%E@)106RKyvKN4+-<!^m9-(6k,Y+B6?%w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_oort';

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
