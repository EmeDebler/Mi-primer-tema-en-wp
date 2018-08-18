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
define('DB_NAME', 'Mi_tema');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Nof}Tg#!P>G{]I_o)Ue06ZD&k&P8p8k/ON#{t<O]&cbX:6mo31FD7%g0#3I1lZ|.');
define('SECURE_AUTH_KEY',  ',oH.XAgu+W(dtfq1CA.^QK=M&W<~d!z#jwZ}Vjqt1r+skX:&^I}#QW4jEDPVcd=/');
define('LOGGED_IN_KEY',    'T=K}juW=j]=y:}y|AFE/1gk|4`JQ3M,=^+yrtpbO{#Ek9Mhq9{Rfe[>FAdOi)3R1');
define('NONCE_KEY',        '% 3Kxk[2~N;|:V#Wl6p-lUtTMSem^M5YI6PmqyODs(jO/5?lR*?1xu~fSvyT8!n)');
define('AUTH_SALT',        'LhqY{O`e9CNcwMHFcXK7Ae}* gBI>YuG!md9Ov^hf2Fz4U@Dpd65pQ)1~%Z:Y0SO');
define('SECURE_AUTH_SALT', 'H8=~+V9gXZ!{)HS=s=>j:6 wA+9NY1!;A3Z?:Chg<7l#R:wMYt0>w7)u^O)B|9 j');
define('LOGGED_IN_SALT',   '@zH]ttgkOiO+Z]i{&cQ?a>=YCMKY~-&b(N(@M?KUfk=9:=>Jy!J^@DI5/.Qc_OZ+');
define('NONCE_SALT',       '7S~I(96J27}e!8:|~xRf l,|*d:sU]6iz2}6L.cU3x|}@4YL!c2^{L~{9OTO|`7x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
