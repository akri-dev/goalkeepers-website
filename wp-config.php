<?php
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
define( 'DB_NAME', 'db_goalkeepers' );

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
define( 'AUTH_KEY',         'm/1[AyPS1IF/})3T2<1o?b!qTP}q6Q@9<EYn*n&3uPLBky?0ap:;LK{x(Yu6JyyG' );
define( 'SECURE_AUTH_KEY',  'T74Ud(ZKrR;=w@E5_gYQLw#dJFKrl4G`wDP6UFTQi]hnP}8`I3hbQuV;y0Su$yK ' );
define( 'LOGGED_IN_KEY',    'h}(,G^*f([>Y^3b-uRkt{SMZ]|h bZ5N$YZMNi.nG78{4&<0Sy(+I1`qsup^Tl.-' );
define( 'NONCE_KEY',        'P%kdW][;Cwu5,!M+7J)MWu^i&|EY3O?/^.c>3[%Z(:rY.h!9w<CfS&A85OX_0LPu' );
define( 'AUTH_SALT',        'h#I=r5oz>nmNK*@.(mM>K60ct^]!vj{1wf`THa7qA ,Y8?:1M;SvpQtS E/90<I(' );
define( 'SECURE_AUTH_SALT', 'A19|P&n8=j@Ac@|$O%9)o7b;9e<Vv6jHyS$jBX{>~ei2+sQ5(Os_FYh)h`PnOR^-' );
define( 'LOGGED_IN_SALT',   'x8ENWKlp*#`(&~S<yUqdJCht64|$h}Ai0&}/u]n.`L<MbxQ4?!c*HubyyX4KpF[9' );
define( 'NONCE_SALT',       'QmD7H3U<++T5u#C3 khtOA&uhZcC_Y rPkxV9ry/HD`*;@2^<`Ko1mzit$-GayBZ' );

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
