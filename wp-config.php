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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         '39o-G=!j(dB(Ww{Fr@^,hm(+@!jqV.0ltg.|S>pwN+S,|t%V`=u@01+sah)#BS<)');
define('SECURE_AUTH_KEY',  '%bThe-C+gm]hSIp=pknb`g r:=b+a83+oW%U~7`|CnWO5q6J+A;A_,/1X,6PPpxN');
define('LOGGED_IN_KEY',    '|vFY~%]-k-*(;B5ti-.cFm>5-.5$J=qF<i<r$5a1oy{-Hkxq|ODb9<q%=zYWr%n@');
define('NONCE_KEY',        ']7> Ke^$ h4~r {a6I^UZlrgicZOYR@wU`wzt?yc-c80*IU3u=I88J!|5zD>,5V7');
define('AUTH_SALT',        '~*ifcD!Od-nn|a{*&J6ohqdZ87JyTpn-V<T+w7=6`ZBQffnU)ByWzQRD=Q21%q9C');
define('SECURE_AUTH_SALT', '|b QtDe_yTl8T+:e+j[,`|t-|;vX]K$H+V.^[|t$`:CLG{Mh{(xewKk~#[+pES+,');
define('LOGGED_IN_SALT',   '|P6W$eyMlpDn0YX!u/lq{lfyZCQ9s3grOi+35q<OiSn3]x++}2dV,ohW7#-.zN+#');
define('NONCE_SALT',       '*NfTi$9m2SV-[g25Al$c3Kl]J*@S6dzKjP:+z[C&y/t?n-gP/LfuR7t0xn;QM!ax');
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

