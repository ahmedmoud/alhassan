<?php
/*856ce*/



/*856ce*/


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
define('DB_NAME', 'alhassan_c31meriTen');

/** MySQL database username */
define('DB_USER', 'alhassan_c31meri');

/** MySQL database password */
define('DB_PASSWORD', 'Bu]b=UM=O[ff');

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
define('AUTH_KEY',         't+8c}F/~hku@{x;Jo>LC!-0#s*3U>YhT+Y}%H)p?3!2OU I1c!]$in~ @uFGQ$NH');
define('SECURE_AUTH_KEY',  '+Mb5%Sa_p|6r&,~,y>wu{2-4 ]SH.~zt6_kY3q4z@sd7`w4<TI1{5@*&9 oa|! R');
define('LOGGED_IN_KEY',    'AG&_5yRt<qgso|<i8b@vDM-:`|/^{ 8VP=.d+@p/v68p5W&?4Sr$Ik18$)R3}n|/');
define('NONCE_KEY',        'I6+dW=VN^|Y=@+n&M?0]k34LiJt;EV%>-6Bz_X:KX,_Vc;}Wi%jq:xNs=D<F_Ien');
define('AUTH_SALT',        'RYi8v:v/x=sbG>l|]7%e:P$+F(Xd}+h]n{*n._%O][hXla6*xcXQ-?b-k1 l]+lV');
define('SECURE_AUTH_SALT', 'Dm0lo@x&Ao6-#:p zl8`kk4C[?WO.UxGbDp!>OzJ}y&#1]n}8IrY.]m+Siv&UX~H');
define('LOGGED_IN_SALT',   '^a!L+zQwc,lLb*T?RB3A9|&k<$ti=hkyVJ+.rAlrd(*eFq?/h{+7XF7brZ$~C#yf');
define('NONCE_SALT',       'y}VGb}2WbM9uP~#(DMFhjayiu%l~JxW8k7U/rPhgcPMa>pKI|8%>S|by0$-FF,((');
define('FS_METHOD','direct');
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
