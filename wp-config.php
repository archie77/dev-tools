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
define('DB_NAME', 'devtoolssem2');

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
define('AUTH_KEY',         'Ib[FM3_9Zfz:_ r9tL4itxmwQI z<-ANM_s,kbj4:&>q^J);<:Y.,]HF`m!z9Enh');
define('SECURE_AUTH_KEY',  'P%M4Yd L5Z1*.O.j;N],%<./GwSG_^M#A~JG>GIIeWjA NEu8ENYG[`Gu8@<N_&I');
define('LOGGED_IN_KEY',    'IK,i]`xOkTA]Vv@FtayR%4#~-K21x$~MqA!H`0-YqtXm9=DgwrHo^j{QYR4}/Z6o');
define('NONCE_KEY',        'c:why. *QULppnZvrEB7#jw#vboZUW5/VB<l{nij@-Di0 oIZ&:G,QvuSTp6)z{h');
define('AUTH_SALT',        '`0zNvWi&[7s$4A1f+vmAgUl2CGzPO?E%;iw7>k[>T]MbIGP:i>Qx&YK>l3m3){cs');
define('SECURE_AUTH_SALT', 'bMGH0_uCBGoW;7F~MS,mI0Px4FXJuL?^S}VO*VQWQ*YKbz-SQ|T)Ce+NlC7WIfFT');
define('LOGGED_IN_SALT',   '=y2>6UExBz@`Y{baT(0$Oy&DPzDBeRGCJmH7(-vaF&[MDbybS(CK}dQUoz=G`1-p');
define('NONCE_SALT',       '5>cJG@y MPH#HwCy%]nX?vpgvsOeYi0rE}C;;t%/.G21SX^(i%-1LAce2u>+W:jk');

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
