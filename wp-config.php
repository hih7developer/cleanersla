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
define( 'DB_NAME', 'cleanersla' );

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
define( 'AUTH_KEY',         'e4$fpDJ?-KSedKR|Q]2Aq(uMj~H;}vHy`CnRqO%&H|e =*#U&l#kDBHVNV0PAA4#' );
define( 'SECURE_AUTH_KEY',  'V+%UG(.t[_UY!F)Ee@+WP^|$;W[v#7;(&/y+5KVJT[~BwVRtI=w*P2l f3t)1fK ' );
define( 'LOGGED_IN_KEY',    '>0XCL8cgW4+uRD%v)?c}+?agP@g$%o?(;!4 D6#<zU|^AY`T.RQBo}#)Dp~~[G/+' );
define( 'NONCE_KEY',        'nRj_%JPK+>@~r-gDnWtn4O/f>H%Cc!.^JHFIJ[)$OlG4i=a!}<9H<YP{r6SSvw8E' );
define( 'AUTH_SALT',        'B|x&-6aRxrI/jxU_V#0B_;VO1s$E*.;);EoD-rN*P1s5uVX;6w}i 0s&Y@!xura3' );
define( 'SECURE_AUTH_SALT', '/n&SNxeCJyNt8K#>9bz30hv?1,=t>/RG?$Oa.9cd+-YD]_jFsTWO$EmT~-D@p2Sz' );
define( 'LOGGED_IN_SALT',   'Gnt34tXL g? ){=npy;/cvfq,[@kW2^/60#UDVpn@`3Ni):Cz%` AwTs_nxXE)qz' );
define( 'NONCE_SALT',       's>1Gg;J0~>B9Uer(!M !VCY|N{c=w?W$b3^4hM/Xl]O7.]qc5h${}SCEuLR&%jK?' );

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
