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
define('AUTH_KEY',         '|:/tgLAQU<>:mb|jE5*y4lnscW`m646|/Sj|d^DqMDg (o{5I+1*7>Mp0tWd/C8%');
define('SECURE_AUTH_KEY',  '?bD|z@U+=wa~#|DbKH?XIIH0)nE:KPxiH-PJ~0194Bv4yM~]*D~Au^z3sNIA:TS!');
define('LOGGED_IN_KEY',    'P&rUH~|yLRPh<HLEjUj?z%SQ.qn(w4d=i0cn]/?J(slCva$95!cstbeWduZw;Yc;');
define('NONCE_KEY',        ' 9PZ^6m]F+1!qkv#I}5=QZGK/%Us?ndOpp$5{]ex/Y9W!!VBeh]T2*4MP43/%vB!');
define('AUTH_SALT',        'Z:TH9;zWn ZMPtxn6)`:jx#if6p*0?RSJo^rR2]_Pz^{KTw8AD[377q>a%gAzAL|');
define('SECURE_AUTH_SALT', 'cE*P}%b!w91i(8oFpDYz]Su(p<zE:Irh)$P&^^#Py`u(W~VA7;?f6l(+t^p0Xd%T');
define('LOGGED_IN_SALT',   'zpCa~N,ojBv*I+bE07a*KmiMjuw`MrBCO3ZN<@rp(Jj@nnJx#RQn]UDzzX&JO^+J');
define('NONCE_SALT',       'we~$DJ:dJiLCws+BjT8BKi#iCj63oErs!OD2G80NDWY4p^H@PJE.qp3|1P@d/$GU');

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

