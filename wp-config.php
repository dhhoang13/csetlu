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
define( 'AUTH_KEY',         'M8:^7Fv;+{n*70gyn5>tkqfH>TEE=Ps1ql~=m[rmef)9f>X*~ukcXiq|^Uju(LIM' );
define( 'SECURE_AUTH_KEY',  '!c^.AgbbYCEivpjjm81uKC=_$3oKRPkr4gz*4d%6xHI7^g]sJa_O3ecr=OAhUo.#' );
define( 'LOGGED_IN_KEY',    'ZTVOD&;8_ic={c<g`Zw#t2yyFF|F=![*rO/_0MRoYmNl! A}s] MOol| @wv%?An' );
define( 'NONCE_KEY',        '0(SbxvbJ&W]Bth- *49a)-RrZ{l;N~wHXeJ)!AJNbSJ4JhXAx3qa%x9i4w.z}l}^' );
define( 'AUTH_SALT',        'H5S|X$NXm{86/-sJCA9*;`Ld::*B.q0(rn9/7DrCO_(C[^U9^=mp5E<Yt^h+%ixn' );
define( 'SECURE_AUTH_SALT', '`7Kug}RmDXu#3}udGb,CR]|^~tzLhX[p<P-UTthmGzEDTOG{Cz)=Xo?[zH9#MEoz' );
define( 'LOGGED_IN_SALT',   '>Zki^D@G=K/V- 8$HDliysS$@itB||L=cg2:s33w(FVoiauO%-E_Eb-:>(p+Z[OP' );
define( 'NONCE_SALT',       '|~+5t?rBn@UXPgqsI.`LkdsftbSO:=Y|l|N1zn~&PB8o*zy}Z6_*.&%4sbH/v!Gj' );

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
