<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/devskyg/public_html/clients.hold/lifesports/V3/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'devskyg_wrdp3');

/** MySQL database username */
define('DB_USER', 'devskyg_wrdp3');

/** MySQL database password */
define('DB_PASSWORD', 'Zlzu1t49fEVTj');

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
define('AUTH_KEY',         'JC=Vj>=9V4=!^x*$^EO)Gb-YQi4oz=?6Sv\`Mmpiq;$zMT_~Brd=Zx@><3L');
define('SECURE_AUTH_KEY',  '!$pzOz8QyZ5!JfxwchCb8W5w-$)?jdnqDtUVHRFQ\`Ya4Xb?M^U~>d*bIOaL^*sFRTFgK8a|J~Wkes<');
define('LOGGED_IN_KEY',    'fRH*Wcf<aHHsh:)h?FE5VRpx~z?BU9<zaT0BdEdPmpTfF/2eJ9IDLvvp19TwB^ED!SiG>wj=r!q');
define('NONCE_KEY',        'G|Ljf^Yexh^d4@jEA1=5h5(@6A(Pr2A_fo;vw=KEcerRzDMiK?Iu~OOu0^znKi_f^<u/Eo0$^kMI');
define('AUTH_SALT',        'yCa/mrwd/<of*10vMhH7=lRIF8aOg*Fc#rYFLUamifr^SRq@EO3FofphK=PzH~\`9ZPlct|');
define('SECURE_AUTH_SALT', '6Rk<iwq<MTCl3aM12d1g*r37hj_@K$B^9oO=Ln^);<Wh;d5_U=9YgIS2p?Ylifn0YND~gIn');
define('LOGGED_IN_SALT',   'Jkk\`|u2H>3FqP0Biz2/~a?WAk_v8s>6yoG!:q24<Yi;8x$-_4\`5Xt7giqF@8e#F\`>xDX1');
define('NONCE_SALT',       '~JpeP0cV;D\`P#d$qlJQLn>/2vrsz:z?idtf8wesD(QNW<#*s<p!L|>oKW|efk2;oz/\`2c^=SbEj*VT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('RELOCATE',true);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
