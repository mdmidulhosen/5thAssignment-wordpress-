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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '5thAssignment' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Kis|+X!-Fk,E)qbSq-BqQHAkKLaVpsgPxnrDsmV[F6Qrb}rD+yfRN~IIhl9FAODB' );
define( 'SECURE_AUTH_KEY',  'dA6WO9sJM5H)FB`VLAj@rP!~xXMVq,MX)LHH}XZ8#fT$P&~;m-}bN.76hM{:*xay' );
define( 'LOGGED_IN_KEY',    '<S!do<Md5b-TBk?cRSxY-)FqhZ%!wJTgq,FgjRN]z}wY=Z~b__v)Kp*&TsCkKe!{' );
define( 'NONCE_KEY',        'pRt]LMHj#UPet/z&qsLDi7}_q=z*=*sdZsy9RL1bOg>=AGl9{W|YcGb8@L?wO=n2' );
define( 'AUTH_SALT',        '|98#qSuCU/>jlaRFoI.6lE0DwR>/%hvgwmjeFPd4G<t&AnYa^QLaP{3ubJ$+|//J' );
define( 'SECURE_AUTH_SALT', 'kf*%F@M.NeAG:>V{ucA6*.?.ac[AajxI/&hirpN%s?9UG$*y/K$:k+wtqmX^@o!a' );
define( 'LOGGED_IN_SALT',   ':aBO4C}=NIF+W;h-;.4ZY6R8:OX0CRGPFD-e07?owROr/H1mjUPT/0n#,*; _rdu' );
define( 'NONCE_SALT',       'x61>O$<S;;x2`C%M|9Wt!IsPX`T0N1Nc2j.}=q<AP>Qc7p;/E#;rq:CO8EuJP^j$' );

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
