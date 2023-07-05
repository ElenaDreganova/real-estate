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
define( 'DB_NAME', 'real_estate' );

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
define( 'AUTH_KEY',         'P&Tg(pYVmk~?+#[%8ciCi(XMd`(IVdpL4`HY:/3M;^H_[.e;^)`f[9}4xrSJ$3l2' );
define( 'SECURE_AUTH_KEY',  'q`$!B#Er~R)vl&PCuEv6k>(Y,0/j@o=N#; nm+9T;RWEuo>8I|q>@Arv6pl?Z0dn' );
define( 'LOGGED_IN_KEY',    '(qca`-4WaxDcO$@{, K~sCOaN*!-vn.bvb5Ua:W zg_<jg(Mt5Kj(jm0Cd:kGOKw' );
define( 'NONCE_KEY',        '{Y(NwrX)P1x*HOkJOivp/XQ<?s-Wj<B;jMszpw&&DGvRyi*@vW.V!?2KNcr_IX>*' );
define( 'AUTH_SALT',        'asMS}mL;|d)q+`EGeJBFa MG9gx~RLoL!RwCYvnoi87oq-3Y% l=Mz^N~PWY$: Q' );
define( 'SECURE_AUTH_SALT', '.B{S=(2HwTPnv16~.D3n|:[TDWiUm0_U~Q92H=)5&YXA-7ho;)qQvkh@Z;cV`=Da' );
define( 'LOGGED_IN_SALT',   '?AA$?~jL~G7)/k}sq9Eg^yY#F#:o!54nNA).l2ed#Z.Ug_~u}=hYh)${deAR7a}=' );
define( 'NONCE_SALT',       '1-~[Z*zJXxqKbi:e?l8X;j?;ve915hRa$[*RvvQ!*?1u3c30f>?>RiS 7k?]1 m|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 're_';

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
