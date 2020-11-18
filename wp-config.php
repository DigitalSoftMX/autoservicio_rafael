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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lealtadd_autoserv_bd' );

/** MySQL database username */
define( 'DB_USER', 'lealtadd_autoserv_bd' );

/** MySQL database password */
define( 'DB_PASSWORD', 'autoserv_bd' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b/|2:WyN?$U:L{>o[oYvc?whtl9a 9o<zDsSI$PiT%j9LR>iL%o*_&1~= ?,5HXv' );
define( 'SECURE_AUTH_KEY',  '-`>M`+=}W&|%F`4x}^LlFOW|pqm~Xw,hwE)2#PFJmWJM2%LMH;zBLATOq?r6X|Tc' );
define( 'LOGGED_IN_KEY',    'eEOf(k$a6Oz!Jb)zi9mo%9,O^kFcC__ec55TfPDVZuSSN;#(6XO3W>Z_,Z+s0mv+' );
define( 'NONCE_KEY',        'J..&:FVC@~mpO)w]ZQc^0@F;8 7_0wi1|WL~8wng}*n3P=YRf7nYL?64&#lUFeyo' );
define( 'AUTH_SALT',        'ap>Mnet$79/Uk%|nPCVl0`HM[v3`26Z :SlEwM,60g<Ns:J+R5$cXtwTi#r<X[lO' );
define( 'SECURE_AUTH_SALT', 'b8c6W$yc!C(>00Qd`*p 6A#T|2Sqqds#2Y=u>/[CnxtE c!%`2MQ~@o_TycxrWBa' );
define( 'LOGGED_IN_SALT',   'G{qp4eK64mf9/EKYesp`mEZ,<K~|U|0TQY<U8f.u*rj5Dt48yCcSs_G|CSVY0Z^/' );
define( 'NONCE_SALT',       'oLXI#Cp_~#8[y)?0FuK_)wZV?8tr@_D]ez9h1/wS0GfYa7$_)|y^|!EPb`O% p&_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rc_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
