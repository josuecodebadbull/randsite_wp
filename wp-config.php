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
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

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
define('AUTH_KEY',         '4f{tb5L!Wr]jv<2}[h5 )N[N3g=;wyr0|*LmV5RUpSn_BzkR3cqZza>hXhRXWY_j');
define('SECURE_AUTH_KEY',  '=f>;.LD3i>lQhd#ccfKB3Ye,-0u+,CeJK@K)2:jN?f^(+)ViT3vhTBd{qWm^6N>2');
define('LOGGED_IN_KEY',    't-GDS6Ze9Ywhxl5ct5KJZ1dCmDz ?3#FR=8edwL}8a114c<^)-ploH:yS>4ObrIJ');
define('NONCE_KEY',        '.0SlG<B`(dBNZ39?}b@wDkfrR>tQCKw5[%VW!a}Jdyq#?w`#L_(?idA96&PaFWCx');
define('AUTH_SALT',        '|GLA|JRom_iAg|[PaP_=/L^X<Abd}o/p=`tcrB#QJ Y./vj`AF@xsV<c<[u5G!Y8');
define('SECURE_AUTH_SALT', '-NH-YwP]xkW(NAs_!J6V%A+p[Yl!~Q>^#`p);:.1b8cQmDjvXEstPRCoYLbnEL[w');
define('LOGGED_IN_SALT',   '$hEZu5%ODN*h0o =q86 DKZySy|G<=aI/P7:WlGY3mKxo^{CH&*X|;oa@/68kR9v');
define('NONCE_SALT',       'lX@>3}^0<>Pa]ctObd).xu7nw(KGK!n3fB/a3O2v)L$LU_~V$-HHjJG~w8iF(xkT');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
