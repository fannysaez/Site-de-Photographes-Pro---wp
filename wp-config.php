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
define( 'AUTH_KEY',          'k/F2?UC=a{m$fR:WfSae3`-98]^0)D0f_TE#ABg7+&k5oe.?dC>siXujY,; M|O*' );
define( 'SECURE_AUTH_KEY',   'SkFOf(8(`:,>mO3AB)F%r*1o)O|=|fhiOS]x+/aoRBp1[);{jf$JYRMII;i^iZVn' );
define( 'LOGGED_IN_KEY',     'H+KT:xlT:IN98c.I0mx)m h/4Ju(R5]C$,RZY/LFO5p-LTcvD.njn5O>ilEgJ5}|' );
define( 'NONCE_KEY',         's<|@BfO_]239Eg!}eD7[ fn@o.Q*}ahN@?LsEt2*2aCB6+1U~2dpEF;cSj?2rqV ' );
define( 'AUTH_SALT',         'ary-dAZWZL)tPim_+T0u3VeC]ldGkyeU%13JzN+8WM] 3_&YNl(n&WR`PQY|Pld`' );
define( 'SECURE_AUTH_SALT',  ';DCU}9yyI|.:dy6x7`fX*I<axa?r8(,#C28Q/&=1Mz)I70i*I(T:`M)Y?L?Qt:6)' );
define( 'LOGGED_IN_SALT',    '%_44$PpG(?el)Td_Rcj{z)tMXhgyNUYgX)A)3-XN=9*s$26mgW(nI[,6,SSG0}u&' );
define( 'NONCE_SALT',        'wfx3c68|Lh|3},Jn7GJL6]7>ac8o9=0WR7Bzj}04Yb[eLR]==FY6W%:GO}~+Rxs!' );
define( 'WP_CACHE_KEY_SALT', '9eP:n6gVJf/U82(Jre*v_hQE3%I5q;4c]/XjO8!%?Z71c&9$hWHh,UE^@%+Pyq}I' );


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
