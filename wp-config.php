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
define( 'DB_NAME', 'dental-care-wordpress_db' );

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
define( 'AUTH_KEY',         'A#GNDg$<* kZ@nq-sY3,[K~?^:&T|H*(Q5vnGe)]{Kg]B?-Ga^GK`v*|3p/q7Rrb' );
define( 'SECURE_AUTH_KEY',  '- l,?.l(!mn_w~X3uEhm!?_hjb-_M/i(4voNjToX2x=;r&$w)UEP/Jekz<0G:fyc' );
define( 'LOGGED_IN_KEY',    'Br|cd i0`zBm[i0ccinRBH~w>B!P~@85<O,YrFw2w; nIW0KhYdr3/iMDO9Tx<]J' );
define( 'NONCE_KEY',        '~lYe%@i~:eN r/^qQ$ag[9HA{N/?jz$rWz0u8LBPJ8BpQC[s;^`^9TD4~j6.9z&2' );
define( 'AUTH_SALT',        '>OF^IX@{J0CN$$|h*zH}cx4u9_jMD%T7c9y/(^>4mXbQ1b$]g7z]C|vh&`l! CdR' );
define( 'SECURE_AUTH_SALT', '%Y{~P_{e^^G~*j=&ss$Cb}k,GFC!5R@ (hF$t-7xtEd;4NQjQX/LTRiUI zMN83l' );
define( 'LOGGED_IN_SALT',   '3ZU -;Mt?b!Q^{ZQ8GGzwYIlnjogZ|WsfDJ}U@cOcE=3XT#;^wD^&tP1?OPEfcr$' );
define( 'NONCE_SALT',       '{Lj!u|QqK_!jXw->;`j1+;4nfQP$(t&T`u9]t$nWio_q$y{dUv;tmvSrGEqDdDBp' );

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
