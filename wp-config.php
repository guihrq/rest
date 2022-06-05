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
define( 'DB_NAME', 'rest' );

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
define( 'AUTH_KEY',         '_pQ&)&#srl+)yR)&nXY#_4- x{xqxc(!(8QM]P^Hip2|VOcr2#(r6Mg=Y2ZBW*,v' );
define( 'SECURE_AUTH_KEY',  '@Y@78K|.y{)MQ-22II%9 Q1]r;!R=R8#D_:L}|fbK.5S}t$D:}~Ef+ D2Va)f@PH' );
define( 'LOGGED_IN_KEY',    'E{l?/Fl`4/_B( _cvHwBs2uPmK*z^Dlt^ =lo_TqR[jQo6^BwlPIagNM,)oPDR c' );
define( 'NONCE_KEY',        'b,jq;3AaWSi@+-I9uvYMs{KyP;[kWQIf+-=lxfc+G4io?ADK[J1E#OjdbR11$*&i' );
define( 'AUTH_SALT',        'X0t-Ti#?3tB^f_d=irgk.Fn]qpW8%y$&a5`a-[PtuFp~q(./yI+uvw4FY6Q}xWW3' );
define( 'SECURE_AUTH_SALT', 'X)}uSA(HU}_2+:FN/]_6W/[OM2f_xk)=ys[CK}o%+~qqZMV-15s(.S;lnZy|9ahG' );
define( 'LOGGED_IN_SALT',   'h1>,D{-{~`r$|lC=d9t0j4mx[};1h.=%0Qgja)LHi=Kr}Y,dmK0Q~38(i403Q[C>' );
define( 'NONCE_SALT',       '|P-[^q481pib<i3{Wbf!}Jot]sOghIhvK_-^ C}(+0`EAjaR+@E/Y&bdT gz%bI<' );

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
