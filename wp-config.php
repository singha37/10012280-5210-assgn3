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
define('DB_NAME', 'db5210');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

/** MySQL hostname */
define('DB_HOST', 'wp_mysql_5210');

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
define('AUTH_KEY',         '+;v__Ao3Jrk8G@|SIWlkI6EqU*!WP24p3mJfVxavfPL&ehW,t!{uE0P0x7|q=*IJ');
define('SECURE_AUTH_KEY',  'D.gi@g*Zy@>eoZ,R-3Xni~iMfac5m]Dkf;_ BUHb#o[HX@X45#.>P[)AKfvHlOfK');
define('LOGGED_IN_KEY',    'q9)>o:N%D5@8Je3jBt|XCyH L%]N/qduv-i_LHgQ#sTnsZzuX,AQKhVxL~_]D:rM');
define('NONCE_KEY',        'B{W#Y$Vr}#uo`Pis#gt7-(<e&__gpJ0vw<uiDgWKxV]Ly:Jx=VyETqfaYct1=m)[');
define('AUTH_SALT',        'H^vi#*t2xZzPPy 2IST}=D2q(7S#3i,pAQt a]M_r`>h@g$LyPQEB-YE1vE}8F|K');
define('SECURE_AUTH_SALT', 'H_.A&jP9w)wNcuI5>~C<gcD]bvsRX$hDne->Sc0e1)}@sb9MoC`^?M>6RAI;s)UX');
define('LOGGED_IN_SALT',   'JKusPt2yjL8V1vul#x>C9f 9&JvD8vE+y]4 8xvIj N] brC?}DAkZyHaW|hte4B');
define('NONCE_SALT',       'd<-S$>oO>p*0tM#J@aT !(**&<>]]*i5y1iQ?uuW+FI/B}c%z~#I#XA<2`dv7ksx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_5210';

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
