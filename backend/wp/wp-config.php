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
define('DB_NAME', 'sa_agency');

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
define('AUTH_KEY',         ' a53v){eX@-}Tycn?eY4ezd.Jar1i3(qdr8.a `x@Bg^l8KJak*kA5D[xXT5i1gU');
define('SECURE_AUTH_KEY',  '7=E(E>3pr/V*>T9e<frb^51Ovg0OncaW>}8OIZfL0_t-&S3va__i?YV}wT(bfNx|');
define('LOGGED_IN_KEY',    'ihLIyt4X`7b&Vb,M2Dt n!8Y]/n#82O~xQtAX2:Kj*-Z$3|k0.:2kQQH@ef;0cik');
define('NONCE_KEY',        '>_0HmTNU+Q|hkA*zI2>>B3pg/$GFXZ]DVE9~VmQBkaA2]ho2g+y=4xk2Ra]19A1f');
define('AUTH_SALT',        '`pJA0| +^f5$S[4-t)-y4q)l5<~+LNb7BB]zFdkboWwD 3xhNZT-B.@Ze66Y3482');
define('SECURE_AUTH_SALT', 'PH ti95btNU?}_gQ*us <uZ{^`wTbBD@ pqEa1cbL4ZA-YuaIQ3bc#<XI{%=v4[}');
define('LOGGED_IN_SALT',   '>:QO<!oG->A(^Um:d0Y=4k=|uB+6hsLoq2~o>ichX<L=4F*ryfr,@J%4Cehz=OW$');
define('NONCE_SALT',       '[Vt8!0o/Oa.5v#9nen:/i~v/M6cE(R^21Sun@+|I,Juzo)+(;%OFAEh$>Pn:s:c?');

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
define('WP_ALLOW_REPAIR', true);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
