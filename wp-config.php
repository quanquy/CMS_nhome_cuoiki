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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cms_nhome' );

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
define( 'AUTH_KEY',         'Z]PzCcNkxo~SeX=mGCr+K$LvfthDTZbM65)@fls:#$*Mex6slBd1yANIe_tnB;p7' );
define( 'SECURE_AUTH_KEY',  '@oG ,36wMpDvaWWLi,MhoA`/[D}U{9MN@zGr#O|PA ]@&RG27Ie6k,38ys~wi)bo' );
define( 'LOGGED_IN_KEY',    'N`XA=gGcn<D*s@W)0$;m`1b8v@RXPX/uGNi1USiSc$165us0p9VsyHD^7~[.C~GE' );
define( 'NONCE_KEY',        '^Uaa^~,O7Bo%1qw?4F`-V`yx8Mtp)ra7?8~p:;|];S7v;~=uMg>=ll!Hc01FaK8{' );
define( 'AUTH_SALT',        'MP+|B68KZ+i8>h[xU`vEKtxss9_1Dy<J%EA8^=aXvLyIz}EcVH&=Vb7czDMdmSd1' );
define( 'SECURE_AUTH_SALT', 'guybW$-i|L9^EV8>?HPg9x|m<9GlB2==3D[VGRrrJXB9zQ}Nx9{/|R)bBH_-&LyI' );
define( 'LOGGED_IN_SALT',   'g)@@+*1sWvO{.40Iu9q+4ny^#>;TirfH{Fr~/j/Pi8%.}wCG;GKukQ$/JT[5uwFp' );
define( 'NONCE_SALT',       '799jysG@ce4c[>EI%)(rJ%-bCOG=K4vc5Ab2]z=1V@~XjL:+%#8Y%Cj(s AI)r8Y' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
