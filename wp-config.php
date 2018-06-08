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
define('AUTH_KEY',         'XG1PWp4+m$^Qf=W1q-`O)Wz2At[Vqbe&<<aO  4l.8Qb,So&_x3J%~T3O;H4h[<-');
define('SECURE_AUTH_KEY',  'kcNq[mwb3<Id9$&_jSC=_7C!FgHE6Xr[J!ug4`K~l4U>[|&glE9JmKrv3V}kxO^w');
define('LOGGED_IN_KEY',    '#my^%AJN]f?EBr8H.L)jH(0VXpS8fG1lB8NXt2kYlI}EtNg|pUx)ahP=#Yz0T+Fn');
define('NONCE_KEY',        'F/*yQCx9i]YJQ13cC7(!N+cEnVr,pyy`bF_<TWSKkd=pRL)|~nMR 3ycO&}iT$Fq');
define('AUTH_SALT',        '> ZCWv7cvR<Klg_Qc}_kqK3f}#bhf1_`8GA[` ]wnnN,Ckl9?Am8=kG}qe@AcZ1b');
define('SECURE_AUTH_SALT', 'Op@!$M;Zo)c`7&QKJ!^0t4p$unw_md/Cf=]kNn=8}cHtWrnBI8}vJG+T62nCPzfk');
define('LOGGED_IN_SALT',   '$D%Go,]F+;Va*W8z2ufC5^9Q_eC5EFqcl/&@vU,t4V}M1FEra#{Z%PI#a7:5?JB}');
define('NONCE_SALT',       'y_t6taG5(U&seX}WLC*Xvn@nlv*ySW*oelVM*mHx>:ehH*hx!tfR_6H^qKwR:|8^');

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
