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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '$kF-Y}3p?^J]?}V}{KL#l];]gEpg<&:sm#NMNCKSXbcBv=j72Q+-lu<WL~|4FnT?' );
define( 'SECURE_AUTH_KEY',  'AiVX3m4THD.|h^2r4!#AP+TI!Q2tQ`b*k>90d15MOHZTZw/}>B*ZK?b)nR6R~~D-' );
define( 'LOGGED_IN_KEY',    'N3Aw`^qI.EFP$a{zP`#ftb7+J(=or0[WoZq8%slXT.E)#+zM=dfqIbV`Dx~_Cs{(' );
define( 'NONCE_KEY',        ']J6_t@U:Z]h.K{a!Ow:L9oacR4Br*)3V;._!tF`,ATEM.JPa%ut q(_@rvqoIen+' );
define( 'AUTH_SALT',        '~,pW#AI:S/O~JoEj /,x9}=3) = u(R|v_u|RW8.y&}ywJG>(=~O{qKd(W:LKO6i' );
define( 'SECURE_AUTH_SALT', 'JqUf@eon@=(MOzb*Jm0oQu1eVoYepBN}(UG47d!}Hs!~pj{qUbjfC9XZ ?Dk@[/P' );
define( 'LOGGED_IN_SALT',   'HEe>5g?TB.ju4(F02>%b!<Q,8!ms3jr%2JBH0nzbZNs+GTn)?GR52NTVTABBB<qT' );
define( 'NONCE_SALT',       '^ErwK@t&_8dQf^h|S(%Z327soi~TJz?:0{]q|($D~t&i99n/^J&EBkCa)0xU:j8K' );

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
