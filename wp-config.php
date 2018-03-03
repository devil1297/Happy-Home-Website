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
define('DB_NAME', 'sqlhappyhome');

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
define('AUTH_KEY',         '3SU@o:TGc?2<k xYP@`le|mAH61|PA#$t@+Sq %`zX]TQnI}e=0i#%F[`J#DOq!7');
define('SECURE_AUTH_KEY',  '}k$_c~%)Y8wq^J>QI|7VB$; :a,|]+|ltr~g=}9R6~U=&HX8n--ir|Vj30dK>M;f');
define('LOGGED_IN_KEY',    'Wk!|w$AiY7tF3;:qsa?hp^2RgV}7GA(-A{ifGoj.Cu}TOo]!?k?0V/r]&p(?D)3P');
define('NONCE_KEY',        '<aCI,.T>HH,=D~dsh`x=]6OBG<#K=,95X+T8di)&a8LX1A0GjbhJKlw9_@$yO#e^');
define('AUTH_SALT',        'F0(z<*tjYI$4o@@POZ-;@{l.sj6k-.L%t3~J hrA//1!`I8W(y^~J*p]:_K4HDcB');
define('SECURE_AUTH_SALT', 'IwtT^1Y6,QGdFo),vlk)>5Ny&*Gh@8Zd`l>7G{GN.ZAOC0&*qV8e[<nu7SP({42e');
define('LOGGED_IN_SALT',   '=| O2^]zMD;q(Qaf M^1~[%1I7kNqW(d!mt#k1/no_Kp;!!!OOM%0YnTv TJK7}_');
define('NONCE_SALT',       'pGCK$P`nZKsc|>HZf#=3nn,{JA.:@Q[)r&CzEMi*yf0[J~&Ul6H+wND&#yI@!-Hz');

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
