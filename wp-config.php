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
define('DB_NAME', 'wp_white');

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
define('AUTH_KEY',         'X|Gi$`&RIh!t?cJ_.6z[PO9 RF/.gL3D:w!G(Y~W$ZZt~{AN|SN+~hsgO5c)Jl.=');
define('SECURE_AUTH_KEY',  'HSeW~, A] RrtAdFnYO~Jii+xC&Wq` S4Im,Fs0YrN31RoNv0?hC63g`yY89~9gK');
define('LOGGED_IN_KEY',    '>B8HfE1|YQ4H$RU6I*^bq78O7ts._0f~=TIy[cSrNan3p=Gmd#mBdhbnO@w77G^#');
define('NONCE_KEY',        'Och+fa29@Jp)m37lAn(]q${jxlN_lO?YkL&KqHeJ9)}4[B f(TuCDSrV}ett|AD7');
define('AUTH_SALT',        'he#W}M0_Hb{e),=#Kx{,~0N`)rX#B|iEMql_=Fj3l Mb;Cz0TRv:mO$9sjPSxsU}');
define('SECURE_AUTH_SALT', 'BDrz{jf;0+au.F`Q|9p6U#lpZa!*s(z|S9iv&K+YY`0Nxn4X+<:lWqGtL.Y##!*n');
define('LOGGED_IN_SALT',   ',87SVOAenfF@# M3FX.*3p.%#e12:L26w+(Xqx@EIixx&Y_m:.}a3{_5r{g7!)rI');
define('NONCE_SALT',       '<+ki.pP[3[*c}&V!SP7G:]<@OZAc]W_Vj+&#&x/9QGujkYVP%Q7]Wj{L,FqiLW(t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'white';

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
