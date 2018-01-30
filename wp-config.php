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
define('AUTH_KEY',         'nH3gzQnKdwu7mRgs&ZJ-gQ}Cl&MYyF:.V{V3Wao%e.s+cn6svc{xC{)b ,;9-HF@');
define('SECURE_AUTH_KEY',  ':9o!g{Z!n=fI2#ZW%Sv% rYm-,cF3T*4%-%^WA/!;.`;Ps2Csj~=gktG+@ OMv5>');
define('LOGGED_IN_KEY',    '%X_R3M nchB*$]TgY[E(}6(j8#.atGf<X/N?@1}?4l0:al88H4k?JlC:8V_XHEyC');
define('NONCE_KEY',        'P6#dJVZ.,:.B&LJ4ut4NVVf^C^of7qluHcbA53gnP^1*h. xM8yRw>-G9s/e0$q&');
define('AUTH_SALT',        '|wl)`kJNEL/q8oa/7Q/mmiYekLajk4J[NqsmdZj:g@;[^G%3];~0d.#uduuKuiB(');
define('SECURE_AUTH_SALT', '%:<>UyGLdTHs|}H)Vh4Q4E , }ly 1Nz0[XDH;U0*eal!d$(04i7O-(TXGIKQto_');
define('LOGGED_IN_SALT',   'D:+mBQ)JDYZ?;0;dr1*_nl)W:J>5K[8;SMcPJ[NGE,&8GQ(Q#z7aM(R<(|67$yX/');
define('NONCE_SALT',       'L#`vQUW}`W+D?9d,#kQ:g.p7UjeBJ+Kw*dUBg/OA>bBD:sE-<AkHyB6+p[bSl<Ye');

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
