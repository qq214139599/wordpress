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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WPLANG', 'zh_CN');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'cm-`H{sz{DoF#}=haRH3%Yb&j SDe,M`T5Wgtl00]MaX<u7AT6D l5,ZQ.Yhl$No');
define('SECURE_AUTH_KEY',  '+n}i|oYwNTwRB,hqq(,3RA`8hlz8RnfK.iT4pIh-@8ggzM#{<bq9-KfMu3b)  ]u');
define('LOGGED_IN_KEY',    ')TCB_9u>4p>2jF[U(-D4]2 ^ezAHRwPcK5^J-7GV&-$RugLb!4)Mgx%^z^I%`i-<');
define('NONCE_KEY',        'D_Y7vQDy1C8@L*3d-{X(7AH8l[3KNx`#5oLd|~]qD#5OT^LJu|,vbu.O7*:u-GDr');
define('AUTH_SALT',        'hvg0;7r%srNz(oZq?k%@w0HqmBq)qhm#ovq .u8#xbbH,blz&6S*c?8WyK|mvgN#');
define('SECURE_AUTH_SALT', 'n9jL-S6(9qObsc%=|vdz@LE|UJf?/[s_gMe17A/S(]94/6>bEo3K_G2*uo7FhYj-');
define('LOGGED_IN_SALT',   'YQ&@/AXyCB4m]{pq+IDV-4KO;{3N+aH(dI?<IXM_VNhJAnmj7U# [ZXbLMDhih~B');
define('NONCE_SALT',       'AQHn=pb@Shyn8]K&YQy,u9>cjUdvbxSiswJ~W8`~w]kk*1bZTS#`Izt_7J<4yUuq');

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
