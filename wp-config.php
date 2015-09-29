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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'planette');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<kO<mZB2{n(kj1IshP^~3A>ny0?P`/{7b9q(BN?Sq>Wh+6-n9X9Vi#WjGmPwX8iF');
define('SECURE_AUTH_KEY',  ';N~m;6y%JyObs`1l3u9LsL-TcN(lZ.RmO40c^|-()+I=t*r$r4_B!I1j7jfEh<fF');
define('LOGGED_IN_KEY',    '|KtV.Zg1jl~0682+W|D^.[m*9B$Q;7Ixq&u~,r6tof}uxE6U{8:{(,zy-hMz9bu1');
define('NONCE_KEY',        'N_<-&qYcmP?9K~|5sC&]k+s!N<gyKKQ+A9N{/Jjvo6VvVkrnP9{b7~!=X9?h{y<P');
define('AUTH_SALT',        'p~+O}T-Jk5M*+Bi-.ZI1o7Wp*QB|jg!W@g%f@6dTU}-LDpJYtPS&l+^ICR[:+hL4');
define('SECURE_AUTH_SALT', 's-6u81cR!}GPtfdhK|JPKr3sbsJ|eZaJW.g]bQ`.cLeR*oMZMn(&8+/FtO^+67{{');
define('LOGGED_IN_SALT',   ')[$fb:/AxN`~p>>gDC-{aQ9lek|_T+xA.W&Ow]+G+1oAO%Z>vte|+eyn={G6D(^s');
define('NONCE_SALT',       'e]=3 Bng(_]d&S1KlLWz$2=bOkb>6p}MW=^S5!W/8KePZ?rhj(2iQ{6VbrA~:e{B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
