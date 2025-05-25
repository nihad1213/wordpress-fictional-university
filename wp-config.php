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
define( 'DB_NAME', 'wordpres_fic_uni' );

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
define( 'AUTH_KEY',         '|A5Z7RQS7MWsece<_$M@(6wCNK+<b;YQly[ObxM!WCw !yB4A4=)d{QPYeV95]Qc' );
define( 'SECURE_AUTH_KEY',  ' A/lyzBF&Y|KbgYX/UN?#1;+DFm*5 l,d)Se|MZ`d)%/#8N6HpE0BX|5r|2g6K>V' );
define( 'LOGGED_IN_KEY',    ' I|kP3PoH}=qU$J$,MTO#H28 dj,Els!6nSS~rE5EI6SIU}x-UVq$c;V~si.EkP+' );
define( 'NONCE_KEY',        'E4p]jJ<=R=2*f-,?s/>C1S;v/{kPek$K]RX*`I]L9-*E/[!Sn&~yLVfNf?/0h0ei' );
define( 'AUTH_SALT',        '8@8%xQiJ>1kb%cw3F<K-1R]sv#SFV!?!=W9/;QIR:tYM;C6p^D6bRTvN%59AJ`hW' );
define( 'SECURE_AUTH_SALT', '|d8v0m-3,O6|x2?mcD/wKqyESS#RZ.|O?KCQe4+6{`HItr.cW*vG7oDZbN+c?h-V' );
define( 'LOGGED_IN_SALT',   '[dCq ~*MZK>8_oNYZ|SzP!YkB5-MOOOT7`1ed)s 4a]}.N7a(n_|tm:?_SukBFs8' );
define( 'NONCE_SALT',       'nJ!{}zA(i)ryl.WewQwTE^z7ZFgD,pZ`@|%]]8]e{ampa:b;mdD<:dgq|jkxj/ET' );

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
