<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wp_distribuidora_isotex');

/** MySQL database username */
define('DB_USER', 'UserIsotex');

/** MySQL database password */
define('DB_PASSWORD', '5LCQ5Yqb6n7LUhBj');

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
define('AUTH_KEY',         '_wxRSV^|u0#_6etmv+?7I^/<#KM;:#L#DGp}$CmL|j@5p&2n~OEH@i(@!~1Pf-;;');
define('SECURE_AUTH_KEY',  'x%}[D#>RD$~LmJ`(aC/^NDXGw8 *Nt;_X4U[q)+nt*@xjt|+!9CWUX3-sIVk91=Z');
define('LOGGED_IN_KEY',    '9W{ocM@zxi@E|I#-N=z009u]]F+>70BHv_pxd/0z]+X)um{OPqQ{wqC#}C,?eO+U');
define('NONCE_KEY',        ':?)#@P-!X(3-8d~sDR]Yf.E^V(0aXNE}1w&k2X2AmMSnh;zQ{ Dt>GSeeG!:RfR;');
define('AUTH_SALT',        'FH|Mo+-aEEkCd~kRA,Y@U-I}^w2^/vt[:O&WSuZB`o)Qm< ^AGo[lTPrurcu/bh%');
define('SECURE_AUTH_SALT', 'O_gA,HQ.Z+_c5y_yZZ;ng3TbTQ6,R<R~@i[h,ok&^NAJL&R>m/Z6 y|*SVl#zy-t');
define('LOGGED_IN_SALT',   '0Ref!}FaDHoDva.;f/j>-N7V(4$x|ct+^%EVYTV@u%v:m``WX0tTz}f0*Jbk@p_,');
define('NONCE_SALT',       'IhJSu|;--+=jH(2:t65)>6*k=h+BhJ^Fa%Gh[$g5K ,7,(YcV7W)w8yg/|)C`Hq5');

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
