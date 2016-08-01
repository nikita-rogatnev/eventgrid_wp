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
define('DB_NAME', 'u0067857_eg_db');

/** MySQL database username */
define('DB_USER', 'u0067857_eg');

/** MySQL database password */
define('DB_PASSWORD', 'eventgrid_pass');

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
define('AUTH_KEY',         'XN^3C14I&kC@4!m?IwDz~jPc-},&5ggylq1JVk4`YZtw94@guv*3%35ewx^`B;T2');
define('SECURE_AUTH_KEY',  'zh%w4O_W|5Nn/=.[+:wndELT@u N[G#[lyO!(qEPdzv+qUJ7O_97qDtt/?I$MS=*');
define('LOGGED_IN_KEY',    'VcPnW` ?ub2be|61ghand=AQL?Os.gEk)D(5MHc5Sp_yuUx9%{gK0Cs@!&=|+HJ>');
define('NONCE_KEY',        'CO}!KL/#*b-HC@CBzo?jA$ry{T@6-3[b?5$YWLE|UJSGVQ$bALO0I)R>c6oJYY7S');
define('AUTH_SALT',        'BbsmYvl6n:$;{GbUr:[n]Jm}2`2Naq}YnHio0Rf.jyuY^(-kBOsXh^AcF;T{=kqi');
define('SECURE_AUTH_SALT', '@Pumz{DsGNR|oM;.+wqvLE6EGD;ftO(%?P:;:`J_Fj&ncO^ijJ2lC X(8];R`&UQ');
define('LOGGED_IN_SALT',   '!hBduq)vmeL08ARo-xmxYON|#`K8:5sGx_!j7G~?@~s5o{0=VEpRj3s;{CPz`I+(');
define('NONCE_SALT',       'fL~N~ZvHF@c%YJRl;~[MMd*_U2$2my+QZ/F8$y;&$q^*Yt j0q)MDmIm]FD$hK9f');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
