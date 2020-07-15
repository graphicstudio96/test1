<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Test1_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'ZHte87v(hJWESrm7c]lrG,WC_?#vedz`xQVptu`xJGE@$yiAmx#[E]](QC_;Zb7j');
define('SECURE_AUTH_KEY',  'cWMGFVkMX8{X 4.ZsE]Jwa)B4v4~!u/8ZV%DV}PbjIf|8=C*MB0,DMN~v^(Ie~Ie');
define('LOGGED_IN_KEY',    'YD[j49asZxm]eOc1hy4J,+JN(!b4nY,uFl)m~BGbJR/+gQpwTidD/>lRV (bKNNv');
define('NONCE_KEY',        'mY#R+(47DI<u6yvK|dJvHO6wgWeUOdh&hnP]`v:$z%zkZ=|N_Q:)}l>#1a#Rvk7G');
define('AUTH_SALT',        'tnxm?:]q/vqNht!IgQZ%&-V;*`8:k,i~*PG7:ViK&vBSd/<aHqV/PD>a0:1WLMxI');
define('SECURE_AUTH_SALT', '?L#}/z2r7u.(0#`LBo,WBbH7mX1j7Mxm4kUi<}&EVOPbA3EGw=A}hmXn}e>?b=p8');
define('LOGGED_IN_SALT',   'b{7KYh/OY@Jv?A7pT%$&s$N`aKI/dH5+XB2<e6S4:GyrBaXy(IG#LYRx)JC@l]lK');
define('NONCE_SALT',       '=%hCS lW8/Rs_uD5Xa#~f}qPHNhuvx x^_T,R.&`wflF,s2BFm2MJPUH`$/AN&6^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
