<?php
define( 'WP_CACHE', true );



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
define( 'DB_NAME', 'vfaczzes_wp533' );

/** Database username */
define( 'DB_USER', 'vfaczzes_wp533' );

/** Database password */
define( 'DB_PASSWORD', 'wb[SpH!9p--Y]693' );

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
define( 'AUTH_KEY',         'isr116cavvtmgoowucjgeek9kdz5xeed0sxs8ivfrpr4u1sfgb7q7ijst9qfrgad' );
define( 'SECURE_AUTH_KEY',  'phjunek9qtfrrdxh8pherylpueka9saysk1wqr2ox8bbiqr1s7a1fn243kky7bjh' );
define( 'LOGGED_IN_KEY',    'w3ihdc5dcrauy8eljpealqzndoeq5bwr57ekwpu663kbe6ezxkgama946ks1xp5z' );
define( 'NONCE_KEY',        'hll0sqhrfsyidbslcampy0tlqqxa10sukvmlieuto1v3dothoxz9pibf8antmrwg' );
define( 'AUTH_SALT',        'zhbbiox4fbjxzi4mvlpiiak1ca7d6abt8qej3ijospcdhjl3onzp2myivjepy2ub' );
define( 'SECURE_AUTH_SALT', 'yjlkqiowsadg78qaw4grcydd5a5o7qeem0qd3fcotx85apydfstxctob0ljmsejg' );
define( 'LOGGED_IN_SALT',   'ca8h2ist2jcwsq9m1ghvo8ujhrhnhabke1tealsnsjlmxoyati8ln1glftek8sgx' );
define( 'NONCE_SALT',       'vfx6lot40twz8n5uv29npmxwwvdze9puhuajvlpft4rbwxw9ypmddl1nyubewmwc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpd7_';

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
