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
define('DB_NAME', 'BoilerKings');

/** MySQL database username */
define('DB_USER', 'zoeyduku');

/** MySQL database password */
define('DB_PASSWORD', 'P1ckl35');

/** MySQL hostname */
define('DB_HOST', 'https://github/zoeyduku/BoilerKings.git');

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
define('AUTH_KEY',         ';hcXs{[EhiT>/|q-)^-Pw//gn-,!HR#sg}h6zFT/oH`6Ha.PK5t x+)=^T7#~7Wk');
define('SECURE_AUTH_KEY',  '+MN:A7ZJgOq1vgsGR{Qx0`+V|le:=&m`}b.xC/1/Wa_mm++lv?/pp|v|*@F~C`h|');
define('LOGGED_IN_KEY',    'F)mQ%sjwAbTrdk[+Ih|&D~:NQmDh~]!XwV4.:~y5_wQ_CV>EO}b||jm`IKP,2(BT');
define('NONCE_KEY',        'h;-E}MgT~*8E/#kb@pxtz`93bXH^if`pyV==RE`N.FmU#^Nr3-m~]/]|^Y&8Rq7B');
define('AUTH_SALT',        '`aAT4-]nvM1INXfp /2,wOIcCdFc:w|qT6Dha<edNgf*{/M.|40I891LMk(f|Q1W');
define('SECURE_AUTH_SALT', '-l9vYcqA5w|9PP_NK%$U?qhI.RQ/1|@q(HFZCD|>/~n|Ns(?N4LN9NhtZ~sgaaf=');
define('LOGGED_IN_SALT',   'kt4U]T|C&+HGX9jCpjm34+NqlRG.Ok<|U0dOf{pE,Nd$|R2jQ|,qp/xI%Rg3^cX[');
define('NONCE_SALT',       'OwlnYQ@$t8^|wmV}DBBey=O(*p[}y;QNaWO3@1G%am/NO: Bj=P.51@WM,XqGMh%');

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
