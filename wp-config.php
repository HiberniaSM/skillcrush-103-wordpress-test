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
define('DB_NAME', 'wordpress_skillcrush_1');

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
define('AUTH_KEY',         'Kpw6t2R lKa{G ][M-]+fJ3U0^OQ%2gFkVejQ/TqQj`&<pn bLu$Gpgt%>?/0_bv');
define('SECURE_AUTH_KEY',  'eB-AV)JT*-5p;*x@Fdt~i4d>le)%qB9|7Zti+X %+Z&d27h?ECM<?_3l}lB}J*9z');
define('LOGGED_IN_KEY',    '+Wj,UUo&/;vT]sxqwL4^<?&Wklq&Q[.UH9XOxYm1vvZPO?fjbF9{z0bsk*e_2)>h');
define('NONCE_KEY',        '1ixYUTaGHbLE6qDta? kj%O%bPE=pN:OG9h2DkED!+OxTf9^vDD#Vi|1eqB0_2FL');
define('AUTH_SALT',        'a`WLGr!n`=Ld,bG6xixZ*Ymo sG/z+mXjI,{@RV:b=t2d(-T=Vy`s?K/}NmB  ~n');
define('SECURE_AUTH_SALT', '>%Ilg6rpbkmV4P~izL^mO<18T[9&e%1-kMIh,&MWNxN{@K;k:Bh_qS@&1Hb>*~qj');
define('LOGGED_IN_SALT',   ';[83d{ 0Y|PTM8kOWX5D|l&uNSWTtazV&B4c87=ylq5iUJ9Nr>s2^6aG$J):(h5A');
define('NONCE_SALT',       '(a.ri@iz{!2^)kPNcYbJRA_|Ab6/UKw)xBWa]U_4<o$ib2^*V-w484h1M4[(![`M');

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
