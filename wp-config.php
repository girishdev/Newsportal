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
define('DB_NAME', 'newsportal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'rp+.Ef#,CGr;w)+7yb4WJ?--{*WU .VF4jFLj=/q;wleNCtX$Gk/iGA9#G,R^,DW');
define('SECURE_AUTH_KEY',  'tY5M=~m~PWNDdF/:fe_<uwbNcpgu.4;[L`DThU<OmQ=obxkrlBjc!y|$_Thue=~4');
define('LOGGED_IN_KEY',    '-po[Nm,Sy4!=K|S{~(M#W+OlB-G8_nO9Z$vD+uqh]M-Q*p}$*[095?rE6sE+T$lO');
define('NONCE_KEY',        'JZ{x =K6v7^5yPf>Q)pAMCHljv+N0h?{*N-rs[NB-MC<!v9|rjlS-cc.?+JQ$>.V');
define('AUTH_SALT',        'yMi0h-<+rOc.q-V.Ehv!`{J><h,fuURITv~C>sjWIaiifF|U_]%{,_TaXvY@2>Ru');
define('SECURE_AUTH_SALT', '^d4w;xq!<WsC;@}6hOwhrqB&++sTVI+>v79&|1M+&akvlVt~`RsKM-0eGG,3Gug@');
define('LOGGED_IN_SALT',   'mbk(-N6J#pa5gKn7fw=cs(z-%rEY~;JziJ^>1YZQ)2<qc:nk23txms7SH2JD}[-`');
define('NONCE_SALT',       'n`*^b5V|^k5{_Px@HY2puWFtfs|B2edSoViw+:$Lk7Mg,r=l7DP-F|tA`,m%3b;P');

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

define('FS_METHOD', 'direct');
