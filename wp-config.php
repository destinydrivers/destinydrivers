<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'desinydrivers_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'j4b&RQ&B>LWgmyyOa1:c[At=K`s3~<]HKw9.#P%>oDbl0{qM+avf>d@vlPl/64#|' );
define( 'SECURE_AUTH_KEY',  'RW5`OI:3T[C-8k0~^vR+GtS<wKmr)/|2t$@Qt01Jv]t36lcB^(/vaA^1_W77&nY5' );
define( 'LOGGED_IN_KEY',    '{dMe?PU;Zf&fWGN{?`=iz.4TAo3z[BFShlP$:9oW{>qQjO{5VEqedS()e^}Tx$=w' );
define( 'NONCE_KEY',        'dB:|V*n*G,?&mC XwR!5bN}4ara;A=.0k=K62=/_[=b,#|y{6Jc8<:nnsc >b7h?' );
define( 'AUTH_SALT',        'P;W76XDa)t$A7;29[)#s&zW0&h@L;gP#)d.<e@?p<5VAX{~OWPln`5K}=j9&|-VO' );
define( 'SECURE_AUTH_SALT', '-8|Wtw^d}C#KH+CmYq/18.>3,u(qzm2$>S%^&l^]L/AvbHG<*T+2]v=Z,mv#Txkt' );
define( 'LOGGED_IN_SALT',   'r+Bs|JG:}w<S}%5gCa&X{3zKyh8Y]b@O8N+MP@C@gj@*%Aj+)zMY]Zg63|t~/p|X' );
define( 'NONCE_SALT',       's6^5?Hb-EOZ5D~)gnoP#4!(Kkka8gwO(&.|,T-OySB:~)v0!ZI{Q}2Nf)dfk(eEr' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
