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
define('AUTH_KEY',         '_sH|~v*zKBW>5~-WDIY/%@]*+2$5`v(v rf {y*9w|cSmDbpkDK1?H5w}tXXG9!G');
define('SECURE_AUTH_KEY',  '7s#dK]Z_C-R:n.J2Nqi3O3KI8U%}^p]8i{!g9VBh[H]=5_q(vj2RDop]qD&9@9~(');
define('LOGGED_IN_KEY',    'e%^d=&o13N-p]s^@)s%WjKD1@*>nqN:Q_7^F@~dyS_OGVpG)9Y<uwp r`zy1k>M#');
define('NONCE_KEY',        'L$OD oT|`<xDC~_xzTw~WH2cof@ )e7te.3o (Xsp0+cO8E`iC2_oY k=3AI:$F?');
define('AUTH_SALT',        'OTjh_07`Ebp[)uT:XQt~8dzd0eR;{kj8s4i(;FC1RG%b?y}e]|k+*~m/Go=zGJsO');
define('SECURE_AUTH_SALT', 'S7;8bu(ok#_d:] b!#t}F#`4^-.:t,iLjm(xh# R: &(b3T$nMs9 FR{NCK+zM@1');
define('LOGGED_IN_SALT',   ' JVVm#@s$<Z[<t{`6aC_NQa*lZqhZAS=O<JI l?9$G+x!D L`/5rgOKj]Bw4D::(');
define('NONCE_SALT',       '91A.4e}%c%b9Nzh lj;Mpo`R+u}jd?MS+X>.6J<6h*XtM@IK~>yz>kuY6g,7U2u{');

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
