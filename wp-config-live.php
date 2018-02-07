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
define('DB_NAME', 'stantondev');

/** MySQL database username */
define('DB_USER', 'chawlie');

/** MySQL database password */
define('DB_PASSWORD', 'Blastoff54321');

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
define('AUTH_KEY',         '*wZ::-~sEURL7P-ZnHm4o^hoEJ+mK9SB5Chm?1B8($iOU{;:L9Vu5J?dg;hDXusP');
define('SECURE_AUTH_KEY',  '48Ap>v?}%iSy2kx4R>O+k0=)9enU(Ns4O!oiu23W`vy:)cl91f3)*Mw(Eoof^+]^');
define('LOGGED_IN_KEY',    'VZv-T}/Wb`a<+S,0w2f 9xlFo}D&/Bx2 cT+ ]Nd}JZN@.Z:qAg/]:eHF FOX}:1');
define('NONCE_KEY',        '#xBnf:-oF~gFwGX:kz) hJ(MX]c#NNwKo40Mm,+4FS8%^pY-rO+Ug|s([xci<l[|');
define('AUTH_SALT',        '|x}6!V6je*(Jw}]uuijpKRF^],v5UKXS3;l!.9()_<*HLl*g{<1c#p|q?Kpa8cl[');
define('SECURE_AUTH_SALT', 'bKW9TLDgb737x?A;!s?SXs8>]+TtsGDPT|c-ye{Yqg<}f&_d.,.?;CDJUm@o=G1F');
define('LOGGED_IN_SALT',   'K4gcFX9J0omv:w5PK==6ml_$rE5PP=g|CNhkm]%37GX ngMFZ{]Til4uyWh*eEw&');
define('NONCE_SALT',       '9+UV72P?ywO4P]~a81;-3qDeqQfVH6*UfKw(ZbdDf[TA8-843H8K0v05S+MhkQpI');

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
