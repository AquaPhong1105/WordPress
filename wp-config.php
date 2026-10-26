<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'V_o%/|](mGURYq:i#|dsefj|)wYS*R[xPdQ!n2`t|2~{&0Ja%94hD[Ky~J7PY[4r' );
define( 'SECURE_AUTH_KEY',  'eVW)EFSu0rskqFAB9q)jGR.|b^wQ<NAYVqW6_c7Y(H35-X&TmgM3v1yZ=N2Dohq*' );
define( 'LOGGED_IN_KEY',    'M@liT+CvxGL1m<uUaV2U?Y-no.fZ%in+yzgeF*>CZUa$3^#2aa}wz eS.SPnZBHv' );
define( 'NONCE_KEY',        'LM7|4T%}vPHA6DA-|Vnv:;f.5M&$N1Q?T53eD_o*o_R&j` (mk$RuKP^^/kDcYPH' );
define( 'AUTH_SALT',        '[CA)i0XaBn9,RY$0g~pgf{Bx_4_~oF3y){ftr%[V?W*mzy[II%2$Z5T8Gu6Lj$BO' );
define( 'SECURE_AUTH_SALT', 'QBQGK[Y4P<i;(}nhsb)hoebsOcuITsDo<`!pbM{wm?.BST-JgSzPh5+HBeP.{:ki' );
define( 'LOGGED_IN_SALT',   'U<=HfVa}SVu5Ti!Pi^|[[3Z$/wLJp8:9-5>mXDP#;W>xEF~)wfJfPSw!gRi+lv8y' );
define( 'NONCE_SALT',       'P9|v_i-o2~DpJbmSfc5[LJ$Lm Geu!1DXr8Hy<`Oz}yYiSt:h0-$nicUi/e?7|n|' );

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
