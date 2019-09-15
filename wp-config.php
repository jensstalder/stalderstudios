<?php
// local-config.php should be gitignored!
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
    define( 'WP_LOCAL_DEV', true );
    define( 'DBI_STAGING_SITE', false );
    include dirname( __FILE__ ) . '/local-config.php';
}
// elseif ( file_exists( dirname( __FILE__ ) . '/staging-config.php' ) ) {
//     define( 'WP_LOCAL_DEV', false );
//     define( 'DBI_STAGING_SITE', true );
//     include dirname( __FILE__ ) . '/staging-config.php';
// }
else {
    define( 'WP_LOCAL_DEV', false );
    define( 'DBI_STAGING_SITE', false );
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
	define( 'DB_NAME', 'stalderstudios' );

	/** MySQL database username */
	define( 'DB_USER', 'stalderstudios' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'awGPpuvEDJ4E' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );

	/** Database Charset to use in creating database tables. */
	define( 'DB_CHARSET', 'utf8' );

	/** The Database Collate type. Don't change this if in doubt. */
	define( 'DB_COLLATE', '' );

	/**
	 * Authentication Unique Keys and Salts.
	 *
	 * Change these to different unique phrases!
	 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
	 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
	 *
	 * @since 2.6.0
	 */
	define('AUTH_KEY',         'a6ul2EuRZCe4sIiHXVvOIZqknkQRGv+CP3+kVvirMOfNNJ2mfagp6NlCpfFh9hGt/IC6JH4ta6OD2EFabTOJvg==');
	define('SECURE_AUTH_KEY',  'c5WBx8oGnE2ABmvNKjbdycqU6O02aJDeMJAgcPd7q/rgmltA+W5RWbWuqqhVGKOJklpco4h90Fqn7ANDMxHLOw==');
	define('LOGGED_IN_KEY',    'nv3sYwgFPK8cYFrdWyhWLIKMNf6fXEyY4IkGJC7BfHkevtODYZ1iDq9u37giBNkySiShnzg+PF4DA7VxWovjxA==');
	define('NONCE_KEY',        'mE8/WND03EN/h8EDanrGdhf4NWphyIlcep4VsUgKqY4FWPQmnWz14R+XpqGrrqyBQL26lB92fv8BOmh4EJMvug==');
	define('AUTH_SALT',        'nx2zHKimcDOn660Mu+Ksdr08/HK+LKVSH6vvepwXI1iVwxJiJHK+KxB+aTE2bNclokdPCoDfv8mVbZr8RXBd+g==');
	define('SECURE_AUTH_SALT', 'oru/b+4adJq7wkI9JPRFkkHN3vtD9snAesyC2fR4SwmO9tcN5giu9XaHGO2t3oWU993v8KwNVfrOQohhZ/qwUg==');
	define('LOGGED_IN_SALT',   'aP54/RWjGJh2uJ/dxQ84izwIyAPDSr0dEe15yy66EIq8+/2n87uh2S+Vk7XR1O7pZFfAawI62xKwBehaJPgw+g==');
	define('NONCE_SALT',       'oQl6TJCpDn3gbirhkNMM8pm6rEroh6w0WHTi3OesFQl0m3LRMcsc4LrOui59SEONHjjZfh6reE+er+t3gNQ8KA==');

	/**
	 * WordPress Database Table prefix.
	 *
	 * You can have multiple installations in one database if you give each
	 * a unique prefix. Only numbers, letters, and underscores please!
	 */
	$table_prefix = 'ss_';




	/* That's all, stop editing! Happy publishing. */

	/** Absolute path to the WordPress directory. */
	if ( ! defined( 'ABSPATH' ) ) {
		define( 'ABSPATH', dirname( __FILE__ ) . '/' );
	}

	/** Sets up WordPress vars and included files. */
	require_once ABSPATH . 'wp-settings.php';

}