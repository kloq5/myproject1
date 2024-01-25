<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'khalid' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$N+vih3tq0K>rMSSzp<MpRaa;*lt/V8E`n`_,UZ@C1U8DWlp8-J$Jd5UfU4{5f8t' );
define( 'SECURE_AUTH_KEY',  '/8}:JmETa~Ab_/~HyX[bw/6:d7k.bk!1b5<A8&|RGRA(_rN~e!C+DH^F^aDYYG]K' );
define( 'LOGGED_IN_KEY',    ')OU]Te%nGBt~f]@WkRFL.$C8}=:q/RysSG.[!I%mQcpYFE>DvoR<)bGg0Ej%vfd.' );
define( 'NONCE_KEY',        '/L-Q]^Lxgo8}eOCmS<6QL(NxrkyrnV6X^G%yo<YmA_<!kF_m}kNr_cSb+u:}ZkUw' );
define( 'AUTH_SALT',        '5M4@H4k%d$D;E3 43.XIXG_Di?rOjGe45(s%Zo0}t.R@hhcRvDeFG8kugX]KJ[ui' );
define( 'SECURE_AUTH_SALT', '|mM8^1^m J&dYS$3U&+Je$-UM 2de?eX$N%:W^M7e#|%E]==hKY~w!J5)SVdtk}A' );
define( 'LOGGED_IN_SALT',   'qWf}$7rc,xlXoA9Ff.zAK%4:{e&G?-F`CF:Ta4*&,WZo:P,5Xn]4aSLJ6cRx`lDQ' );
define( 'NONCE_SALT',       '-G7c:<kO*D@q..9lXNB-yeE&6v|4G[#(@5t/Ja~4i{IjVG*KD0Bb.N@K;Y|0yoQ`' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
