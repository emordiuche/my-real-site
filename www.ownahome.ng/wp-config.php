<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'FORCE_SSL_ADMIN', true ); // Redirect All HTTP Page Requests to HTTPS - Security > Settings > Secure Socket Layers (SSL) > SSL for Dashboard
// END iThemes Security - Do not modify or remove this line

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define( 'DB_NAME', 'morezxzd_wp32' );

/** MySQL database username */
define( 'DB_USER', 'morezxzd_wp32' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Zpi88W6.@S' );

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
define( 'AUTH_KEY',         'kivgzprcdsxk0fnccmaj78nsu3juqrra0jxyq3xrbeso2gxleois4vjzk10z1jwz' );
define( 'SECURE_AUTH_KEY',  '5tj87qvl4amvyu9s2m1tvuui5giivyxga1kkklwil0udzlyevjwtutpdrznwjqbk' );
define( 'LOGGED_IN_KEY',    'xptr7otoiusodklxyvnvemqvtss6x9linkvxh7rw215pjpjbugtkkhdibhhgwxv9' );
define( 'NONCE_KEY',        '19yrjctekgfbt3gc9ntx2d70zbtdyigknhy26qylngps9pizfzbxfksgdxwxeyck' );
define( 'AUTH_SALT',        'qvjci4norpndbiujk6ju3nkazk252biz6i97xe44gj5lbmwquq84zmkxpvc4lrir' );
define( 'SECURE_AUTH_SALT', '94n8tii0hwkqj4pe1bertntgnabclodoseyys0tchq2xvjywgprivlepihyzwqf3' );
define( 'LOGGED_IN_SALT',   '8kdbrsrprcgv6avitprdetkikfivqhf0zpeggpvafkzfwauw43qeouhihymeruc8' );
define( 'NONCE_SALT',       '2sxjt0ymhtvdfnb0qqqon2o8qiqvstnwjjjah0dknehqhdeky7o1wikv2iiqxfrp' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpec_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
