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
define( 'AUTH_KEY',          ')!2>O206>%s(}h>ty>{>G77J#0]<+xMR;2ps-=+CTL,)qkuv3uW}C;N}L {PQ-QI' );
define( 'SECURE_AUTH_KEY',   '>$j=vCa!Y~f BiHz#j@uz{y^I%YOv/F3X%x*[q|c+l;)mYI,xK~R1GDkK3R42$!8' );
define( 'LOGGED_IN_KEY',     'DFi6O]V||1E^Z{25PM3[*TDfqe<CUT/8DLDGp,#M0kLqexJZPMit/BQ&9Q8UmY~ ' );
define( 'NONCE_KEY',         '<BH:M04UIVuQ77VyHU~,v:(J=![_.w%LV!/x]jIc>ag?:p^J,b(N<*R|9C6B$^H#' );
define( 'AUTH_SALT',         '|&K/a/6i+J)9_Qc#d@J~dz/z@Rse:wM3tnt0I;+6.*qEl54_MUDYn^Sq/GyVplQX' );
define( 'SECURE_AUTH_SALT',  'hY2.Jo3Q%qkEc2&/UvR->2HZL+tf[&]-:H6//R2z7hOo@5$J~ps9x ^UE%71*au9' );
define( 'LOGGED_IN_SALT',    'g9rxpR=`hgs`;)acYegcXQ Oe+9E(=1r|WN%(s34[]H<hey]RYWt3o?/8|Kdob(n' );
define( 'NONCE_SALT',        'b*ztLy{!Ofs<{^GB=TUR lNT5p3fFqbw-2r(i&yIQ|(x#jkiIH|ec~UdyiJwaTW8' );
define( 'WP_CACHE_KEY_SALT', '>;)~FjdiI0d:cg}Ai9!o=h9i8(prJa?wwNRb$;n?c k4_+V#;yX0_J/tC5lwXs.L' );


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
