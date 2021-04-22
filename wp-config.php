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
define( 'DB_NAME', 'ivyswavu_cygnify' );

/** MySQL database username */
define( 'DB_USER', 'ivyswavu_cygnify' );

/** MySQL database password */
define( 'DB_PASSWORD', '8!8.SpIHY1' );

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
define( 'AUTH_KEY',         'dr8zfyx8inhmxifrkpsbsb5bsw4yy9rrqeylckxsy6mesnnlzos7nww0iqxc5of4' );
define( 'SECURE_AUTH_KEY',  '08hffva5fte4hd7a3vkyaw48gbsramtjsounebn2spp6mwwtwaeso4k2qslaodnm' );
define( 'LOGGED_IN_KEY',    'e7jce7mjuu9kzngbd3kl0ihrralhod0ipvq0gdtei7ywkzllqmfshnquydvuw94n' );
define( 'NONCE_KEY',        'eqml9vsmphe0aq5ot8twuvfn0wkyekinkxoo6ff5ulvw9cozpxvym2sh4cnu7p0j' );
define( 'AUTH_SALT',        'edvlerpzrdvo27jo0nqsotgcxyp8oaddy0yaf6mmyhk2ag0ske2ijbmglr8gnorj' );
define( 'SECURE_AUTH_SALT', '2cqp5gvsyrswcx1mr33qcnbwgviv3r9f1ssjkoirnvxf4so6nocdctjsv3wedirh' );
define( 'LOGGED_IN_SALT',   'greffioxq1qwuoqj98psj2xbltlo2nnb7ohecjedmrxtg0zk0fl8oy05vlhzbgvr' );
define( 'NONCE_SALT',       '1jze3naymxxe16oe01ny0fhi4jsnzuhikn8iibkw3rbbiggivbnssies1wagamg1' );

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
