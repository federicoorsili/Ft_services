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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_general_ci' );

// Allow repair
define('WP_ALLOW_REPAIR', true);

//define( 'FS_METHOD', 'direct' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qQ}1Ojj)a:O-]]w5gRmrG3>JXt)TG?I%4]2a%>/{ziMc0x?0 Th%a=47l:lQ9GQ`');
define('SECURE_AUTH_KEY',  '+o|`r&vj47M@<wUsRHsRmEX*2gRp]Ji_J.+5ic0:MlhSOBn$:47eq>BgT]<6SMZ!');
define('LOGGED_IN_KEY',    'dTT63_aIqoMYh-tQ@+F=IGg]mJ,?NmSo*$}UWQ45h{}JWUKh7eH8PeuhifxzwF+|');
define('NONCE_KEY',        '2s^b2d:%k^UE?XyqRsp-3/-_w@dPJ4.=?yi<VT*-bR_F7z|3JBr+b56GJ0WyFY%Y');
define('AUTH_SALT',        '2/&Lq 2ZgW2;Ww*$g&|FOu+%&>#-0LN~v1b9(tFJp5D33K=WIjc}ba|PKtC!ZR_t');
define('SECURE_AUTH_SALT', ':R:/h}2T7?-xQ8l%[c4iwX]W)*L9:IPM0w..Kly{rw?El|Em&Ykdxb,_$Z(/J+M;');
define('LOGGED_IN_SALT',   '563#O>Y||/,=,ZO<&XS!GgRas,um?WVt+?`13-||H8`u8^kL.{D2Qq7i9x/%h4Ja');
define('NONCE_SALT',       'KltJJTe5ohpXcQW{(=Z NzW:&3Ap:bL8d+Q&Vj|-V-Bt/E*NSl;{D(iwB{V)p@D^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );