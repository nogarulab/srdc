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
// define('DB_NAME', 'nogarula_srdc');
define('DB_NAME', 'phloxmar_test');

/** MySQL database username */
// define('DB_USER', 'nogarula_dev');
define('DB_USER', 'phloxmar_test');

/** MySQL database password */
// define('DB_PASSWORD', '_nogaru1q2w_');
define('DB_PASSWORD', 'n0g@rud3v');

/** MySQL hostname */
// define('DB_HOST', 'localhost');
define('DB_HOST', 'phloxmarketing.com');

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
define('AUTH_KEY',         '0?y(WB$JmUDCnROhT4v*HIvkTK]|P9-OZ`> XB-F[&g5V{QQ;q4zs-*Su#1p_Nx/');
define('SECURE_AUTH_KEY',  '>PRDN&8|isSoNIXxAL?V  `EL&#kaPYQDC</0NtN8&FO722VG=mp|U1l0&KeXWxv');
define('LOGGED_IN_KEY',    'hlMy4 lTv0f$NPhgBF}hI4RNkS.YEEuJIM,vhx7B*&9.[C/C~> vEPOch.^F 5j~');
define('NONCE_KEY',        'q$mCl}uyEqM**P$7_nHAjp]o|@x2%54<UC@8lO%xe @z2S^qo8PWF%~XOy;d;9A?');
define('AUTH_SALT',        '8k*4hIFP[8/7%bvX>=bYD..Pir+6m5Hq;~rc^`0-$EDU-.WyEDdc` ,QP]Ev8bf ');
define('SECURE_AUTH_SALT', '4>w!yc2lYiCM=<E]I@9.&16E)pJ6aW*}/x<bpxG9KuBZ;yBvF+pr>NVDGnyee[E+');
define('LOGGED_IN_SALT',   '8cJE_8Not$rSt=|@Sa$/=J|enJ&qSsV^pN[nhXCc.hZzek*;Ie-DodSi3)qZJly;');
define('NONCE_SALT',       'XRQR_o3sHtPwEV+=n>6K3YzPj837uZ*W@]/Sg{&dcJOFzruxeyI~hH{Vn31V>;[t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cdrs_';

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
