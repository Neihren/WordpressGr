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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '&bk!7`dMd:=%iY`SU@AQ)0zwK7-2KHLp%|^f5 -T-FS:C64T1n2Md[u:uUJa)hvl' );
define( 'SECURE_AUTH_KEY',   'j7NNzZ.[NH@dq5V}M>%{:jG%[w3|-#`.=pf&8NGUTInm]Z@9B|htz-~}LX[B`/m/' );
define( 'LOGGED_IN_KEY',     'nJx4Au&1ghN;voIml7fp(F2edX}.xDxG7^> Pz!`K?^+n6LAC*xy<tT@EhI8 .DI' );
define( 'NONCE_KEY',         'n${Kj&o^fAp@u1(fG+;$$becS $mvWmpg5T<,h,iayA=,rDz0!=vf|!6!~$Gx[*[' );
define( 'AUTH_SALT',         'c0@Uz82:MlWNqMOaNRT`FzDS,F$7!P=(4i4SIRJ<6=w5^fA/H*(TZ;sy!kM2q#3l' );
define( 'SECURE_AUTH_SALT',  '9(L~4]tZm4$Ot;&9/49vG,g8!6S* $&A*~,.eMa7OM K,iBK6%in6A0D$STQj3sv' );
define( 'LOGGED_IN_SALT',    'an8#JFmR,%9AJ_zhD%wY%?6Sj<AAN(.R 4#xD_}4:K:ZAY+VPoRP4D#k~~UCv;X}' );
define( 'NONCE_SALT',        '3?.Ee__zYT!<+X~t[m}i>Nv47,3J%XbFG.^pfU$L YW)#Wu.O3kJ~r^x_Zv&N} &' );
define( 'WP_CACHE_KEY_SALT', ')Q-abC 3s_qIC;>}v8KM`fF)&1[5K]$*6i(jsR+1k!s|#d18{x UDv:N)xuoKyu$' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
