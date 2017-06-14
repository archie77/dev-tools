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
define('DB_NAME', 'wordpress1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'E J,)WEW(vBZq`1o1mnZb|6ukaTcTt*j>+/knT9s[}socp$8sVnoc|JrGiT|2}Ax');
define('SECURE_AUTH_KEY',  'ut1Mk;2UyC7I(tr(7@0kvsv%Qmbv(Vz+&dJ?+<*//:LPsw *<Ot>ON.pA 6Tr#*l');
define('LOGGED_IN_KEY',    'r5PwNm._ 1*F~2#X,rG)GvNr(%!_*;g`Ye_,I&GW[PiU`Z5>vhA0[9-gtvsBf6(D');
define('NONCE_KEY',        '7g2FbA?gTQ;%-R*5bdMS(E/WZE]G^85R}NG?p3<W.b!cK.Mx@:Blv8G-6l*p+Z 1');
define('AUTH_SALT',        'g`{Om)7{p$8(b0V/Sk]iWTrm^guLL64AmLJ4p}H+hGIj>I<wR-n%<y1.&B-}02+V');
define('SECURE_AUTH_SALT', 'b]Pfx7gan86OF&O NKA:4na9VB%yA5Wd[A!9N)i8PO@8Ls$}XFWBFGdpK(^|N`<l');
define('LOGGED_IN_SALT',   '$=W!hv2A<9Oc3b,t#;kax%zglAnft>KaxOQ^,XnIZ/Q62?)J7]48=8h,Xa+:h/DT');
define('NONCE_SALT',       'eLfS/ef+azy-wp<<Rd)%*~MVB:?ZZa?Xo2c+K{<0uiAc^jF1fCbe&:Q6$^Yq#J~W');

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
