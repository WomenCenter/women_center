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
define( 'DB_NAME', 'womencenter_db' );

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
define( 'AUTH_KEY',         'ERo-)|SD7lsThWe?aXUNZ79{>PST n XP&g?+/P&W^Fh!f<b;5%ZP=mrS!jtM5Cr' );
define( 'SECURE_AUTH_KEY',  '75G>EHrGmhe&Rc%]W+Y_5#Fl2Mv,}O;D?ccaSEX2f+5IerS@PQ@=uPNh<L9tep*6' );
define( 'LOGGED_IN_KEY',    'F6>qwcXNx;pAu*Uh-}[!u|!i(fm6[LE^b}:=nc)t^ qJD33&w[Vn?v#DDw2y-53T' );
define( 'NONCE_KEY',        'T&kfl^~Xp5 Z+OGdlFFlGZo(2fsy6JL5Ja;nk$+e^/OQ!guIN*BM#bb>vB<y]beR' );
define( 'AUTH_SALT',        'cHY?#Hh,_SGVTg)Z9aAyS~^~Wn@WC;T,b$;a1zyXF():>e)pQ[avA,&w=D]kPpb0' );
define( 'SECURE_AUTH_SALT', '}?4BZ>Sqbad3O!_HuZiR3/20afW2pI$U:omi)0)y;mU.-pBc,YXX@IR!bi&5z.E%' );
define( 'LOGGED_IN_SALT',   'n{OiiL8oL^q5,@;<||[QhFm(;%(cFCy8YR4NQh=dg<3VA}!(koYmkMwUUlM`(mCx' );
define( 'NONCE_SALT',       ' 8C|#x5a4)85>]LdL6}ho6jiE[oA3o<SalzU)8Cu,z<erzRcDqG!g8PN47Jmxg;]' );

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
