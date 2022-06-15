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
define( 'DB_NAME', 'codesignml' );

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
define( 'AUTH_KEY',         'D7u~L%u=8}g3XJz%+X@I-<R;q~>6R5YI-I=,>Dh&N?,}qrY_o(cV:Hr9FJg6KP!V' );
define( 'SECURE_AUTH_KEY',  's:vKOsj g]>ZF?O8,>VJjz}Hf(<cFMPo-Q:#3Lc3mT)y-!ntFo^ a,;Rumlx#t5T' );
define( 'LOGGED_IN_KEY',    '^lw*}VeFcaI)JUX&)Yy`TJe~IC]1WFY^ro|5%yoAiQq@F*:O.#!$>JbFhhz@{{~I' );
define( 'NONCE_KEY',        '$?c9U9a@]n_@[v!x&u31b5e}n(Jt}U2=rSkZ,Q4sCI[Ul1Ve(j!1-qsLW17y;EaG' );
define( 'AUTH_SALT',        '}Mue-[k=399J/{qbmhE-BE]nG9Yi(ft:sf~;u<+ ^0QfT+,+8i/.kT|t(ho3WY%)' );
define( 'SECURE_AUTH_SALT', 'T&^<D#c&^5lvDu}}]IK$bOU>bO:L}xh2yD)e`PwpF=&/DRH@y|[6QZO9[Ger${dM' );
define( 'LOGGED_IN_SALT',   '/)Ge03vg`ZNH-k!*qXw7]<h76HcwE0+eng5r5V0V~eOg-@5fUKD{>*wP@t5rS&=O' );
define( 'NONCE_SALT',       'UZMDmgzLN_TpMZhSG*T~DL`r5@9tBQ##l=u,j.)n.qB:AbLz6_Y4E$d,Dq2e~KC*' );

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
