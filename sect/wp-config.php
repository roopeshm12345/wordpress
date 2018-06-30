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
define('DB_NAME', 'roo_twst');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '53.Q=R0x4*ABK;Zk5^9w*^0-^N_ih`88$|dug&;H=CIMRp|=, X 6HXS4Lmig3b,');
define('SECURE_AUTH_KEY',  '}o}Uq[bGzJLzE3inhWEbaTV7vRR4o@pbY1X_HRo-_[_YY}LJze(r2 %F(=vUQ)EV');
define('LOGGED_IN_KEY',    '<A)|Uq:%EGk3F}$w-_.FZP*|GK?z5b1re(Pdk,<7[$5#bSVon9|&y;^01WLu+{C)');
define('NONCE_KEY',        'r(*ysP4$yxBAlP/*9w;zX>{>AX[q,H<<>;rW=&3l@Z$Fr|+w)ZQ0~{.pgo86rXL4');
define('AUTH_SALT',        ']#YuAU[hFn<mgI+X|9$RfDK b-&R+V>~l+R v0mYQ(sYe7QSYc[`ozqB_h:SV@!v');
define('SECURE_AUTH_SALT', '&>g-d>FSi1jQQ=Z<;F}qUSg48L|J(#>0fZItz8T^{~J*$Y1O-#Tm1p?65U/:gx# ');
define('LOGGED_IN_SALT',   '`Pa0cFL|+~j1e 3TPjXwT<^]erlM%M+pGz<0KD+l<qHEL.`Voyz|@,t&xJey_sT6');
define('NONCE_SALT',       'Hs-]mUw}DPL!YDzl-V,=W;V|J]hU8JVK=fnQc$3 e3mWDYPk|K$V8cB!@ZI1UEh|');

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
