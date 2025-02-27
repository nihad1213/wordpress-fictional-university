<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WPUDEMY' );

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
define( 'AUTH_KEY',         '<pR.6.dfwVliK>#a~*Tw?F%*sVTJ8nkrk!<tT1|Z}l :,TN@Q1SKbVStUuv@eJ;*' );
define( 'SECURE_AUTH_KEY',  'zkW B 9>[L#pEoYj=^BV{wkG?!ds$#v17C<+K;X7qx!ut7d(P#P6-@hGDNge0Z|?' );
define( 'LOGGED_IN_KEY',    '+zDu59R-`$vkHp#MOZ|!`k`6L$#Jit^*eZ][Is2db#]}gog9:dx*uiZiIEqQR9.H' );
define( 'NONCE_KEY',        '&..M~8G?;ra@ZJt0{M3Inx`(AV[3OXk*Wsd0j@y@Ha}6r<7n9cYJXLPU>1)9N)5?' );
define( 'AUTH_SALT',        '53^f6d:5LpM #lBMP=oq|5=#^[W2.%BTd)J @FS]`d7@LRDv/-R<H,u2j[_eyeLW' );
define( 'SECURE_AUTH_SALT', 'B+X?S.AE]fRs|+vlPRJQ,$mBMH+u#(<Y`%KmS|_?7//=#MjI0U@w:zu)Wd-~LMG$' );
define( 'LOGGED_IN_SALT',   'Cwfw&+J{Hk:VPX?%C/xKYi[V*97@AcY+T:m!MY/<FyP[vMC)t*7k}5tg_WrNUo:J' );
define( 'NONCE_SALT',       'a>/k`Ak.1jq]x}O7VRy4xvE5c5n+^39cMY$/Lu.jF7U$jEoQF!#B#<@w~n)EQf;)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
