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
if($_SERVER['HTTP_HOST'] == 'localhost'){

define('DB_NAME', 'tr_california_inkd');

/** MySQL database username */
define('DB_USER', 'tr_ci_user');

/** MySQL database password */
define('DB_PASSWORD', '8EmRPwVJta2TPRYr');

define('WP_DEBUG', true);

}else{
	define('DB_NAME', 'trose04_cali_inkd');

	/** MySQL database username */
	define('DB_USER', 'trose04_caliuser');

	/** MySQL database password */
	define('DB_PASSWORD', 'nO?49n&Z!Ln]');

	define('WP_DEBUG', false);
}

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
define('AUTH_KEY',         'FuX=!W@;kCRf^@ W t2|5APcb]$gp |auzB)h=[:w0-3W?0|,}-KAD%5sZy1@u$Y');
define('SECURE_AUTH_KEY',  'tc(QFt]TyxbZowN1YK|<Z7mtf2c;-!=hXqs;QH||Y2X~(7L~g-i&Q}cJVJMa/@},');
define('LOGGED_IN_KEY',    'bTBgw@F$za6N| -q.YSz2a{ZLB`#6c!:.Wd~Xj!t`d@%e&t<Z@*0d<38e+Z-sC%Y');
define('NONCE_KEY',        'avN8$q}*Bo[CGx^@QZ]<*-OI`S*%-mwDl[FH|X96>+^uL!EsErqi`i#`YnV*`5wh');
define('AUTH_SALT',        'I!`)uvmZ|q#dactY)yf7?SBbkk!o<x+Et=-OX8+soR+V<sv}`W|V_%G7b6,y<2b@');
define('SECURE_AUTH_SALT', 'Q!GR+ LQLV)Sk-QQc3dNs`Z<+LwFSwE7$yQ<*q%DYc)C+6NLi)pY+$1F!{+(p?%6');
define('LOGGED_IN_SALT',   '_yOcy!I<[{m>&]nYs,U#=~pF+z%j3kvRFJn4CFR-vfKCeLh@wPbkwSX}3AWbL/$q');
define('NONCE_SALT',       '8o:J}Xf7;eJW[|ar*=$@Lp>_f5s.WqO|JLuZ^Wvem/m!o-=)kXd|i*Q|8k;Bbc@*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'caik_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

set_time_limit(200);