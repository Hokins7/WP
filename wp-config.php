<?php
define('WP_CACHE', true); // Added by WP Hummingbird
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
define( 'DB_NAME', 'anatoli3_wp918' );

/** MySQL database username */
define( 'DB_USER', 'anatoli3_wp918' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S71Av!@B2p' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'bdv1nk3n26jz5s1ywcxojd0iaseb2y6kqca1pie5p12doy2bpwh45efzxuylietw' );
define( 'SECURE_AUTH_KEY',  'ytllpgcfazx7mmt7s8lrzq5ojbnfuuuymvjj3rpia1whpkjqrwjonoqxq4svlpy6' );
define( 'LOGGED_IN_KEY',    'bwzblz01oixrcgw3sjiqog1cwgjhcihxqwjvcw9yi0psw9kcoew4qp1zzgagqyk1' );
define( 'NONCE_KEY',        'lmz9p6txe6yyqzxuqkpo7v6o7rlpbphlfirqa2uv4o0b2vn4ssqciuoctewkesac' );
define( 'AUTH_SALT',        'hksultmhiassuiucyhvvxhpi1wnck3tlsen3hm6kr9q7itlaswefda3i5auqesne' );
define( 'SECURE_AUTH_SALT', 'afxk3fjlnkfhfc0ht7lalhbhagqilcjqveullzcnfxijjwccufejzb1uwmrw04su' );
define( 'LOGGED_IN_SALT',   'v2jdqktmj6banhctlmpienxeap0mgwiygkjpj5z2grbt4bm5f4cmmdj2mteqgrmx' );
define( 'NONCE_SALT',       'mos5pipsiwpocqi9tj3uvupd2z7ls9tld5ymtnx9xnpem5zoqqbaeim6ybjuvllg' );

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
