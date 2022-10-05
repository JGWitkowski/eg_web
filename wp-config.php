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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'evilgenius' );

/** Database username */
define( 'DB_USER', 'evilgenius' );

/** Database password */
define( 'DB_PASSWORD', 'evilgenius' );

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
define( 'AUTH_KEY',         'jdI)NZykrEw!~G1dhj?(}m(M%lk&@E)bQ$LV)fz+BWYLHA!$ 38``b&>r<bVC8em' );
define( 'SECURE_AUTH_KEY',  'YA]}V5u,zDS2iDk1(xQtq$6 R7/8j8)R5/oh-Iqg>lW@.]+)l<vs2Wd[%cRKg9,<' );
define( 'LOGGED_IN_KEY',    'Wi5PbSm^7<+c7o#@>ZFSY xZO6`= B?^,DOv}SmY15-^u9zq~Pq?f ]j36H%e> D' );
define( 'NONCE_KEY',        'f8EuO1= 927eM$t(t:UJU~h)BO%DXegCf=u?#8~=;R017= iH)ED9?e@w9,HzZ_h' );
define( 'AUTH_SALT',        '*:(-mJ_rUp%{@f+RN_uCSQPFp)z@qo2FRYZF3|: *HzyN@%])p^<Zzu[T=zQ|Pjq' );
define( 'SECURE_AUTH_SALT', 'n:g7n,1vqy1R*f$V&yrqh73-OhKI+fN cxee68 E~.QDWV<(7bt1gB3>@}pu_DDE' );
define( 'LOGGED_IN_SALT',   'j_5*l5S2IRaC0-=Ki^y>4aO.MR@R*bB_yeoTekgmiBZ+<!mg]@+J;<%|G`wJ(H>w' );
define( 'NONCE_SALT',       '))rU(<_dvOs.=|cpqK>kf<g(<vV+{0hRlUpDolcDVQ?}[*|*?FPl69l>yMC@1I*.' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
