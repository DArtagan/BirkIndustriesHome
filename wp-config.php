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
define('DB_NAME', 'db353791986');

/** MySQL database username */
define('DB_USER', 'dbo395674312');

/** MySQL database password */
define('DB_PASSWORD', 'hK!48e4BjqeY');

/** MySQL hostname */
define('DB_HOST', 'db2758.perfora.net');

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
define('AUTH_KEY',         '|]y+5$&*@DgB|oUE7-r!2M,+B*u0i$|4=p4q[a}of<LA8QFzK+J1KxxH$;b#67t9');
define('SECURE_AUTH_KEY',  ':Y}~_Caw(((R$GXG BxlXGSF-=HtUbrJunTV.peZQOIIt;`{% .nufwHCxRs*HJq');
define('LOGGED_IN_KEY',    'Po7k*)3AFpcSiBI?H0xFafMjv9|QI|PK->XDNjNa=|8Cqi5nlSriXwdNKN#: &fn');
define('NONCE_KEY',        '_-aneSXG|h}{7r:SMQy -L8o`.b&Q%Xe&BZ=WeH{|,<3bJEgq4fi[(KK]oI0)Z4O');
define('AUTH_SALT',        'kdKeysnbzBZ=qvL9P9(AvHu@ |5kcHGl7{iuNS+YqwX_A[o1k#<`^s!Ze_$K>1Qf');
define('SECURE_AUTH_SALT', 'w,:0(]1(j8:b<8[l:_W?/;HESSvr5m5_qxzh~5ZufJOBJ6mWqM=(wz3N ~$Ye;g9');
define('LOGGED_IN_SALT',   'y*0Y*@{UgT?l-}^XB%-`pnN^1vvjX iNcg^6fy|%5Nsa<6t2Piiy:@9bd|aTw>4j');
define('NONCE_SALT',       '*WQdP-gu(UZUZ:E,P37]+}|}qHM CTcY~d-&^0Q+@./#5 %J+RA1N?q}v?;D eo#');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
