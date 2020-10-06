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
define( 'DB_NAME', 'louisehenningsen_com_smykker' );

/** MySQL database username */
define( 'DB_USER', 'louisehenningsen_com_smykker' );

/** MySQL database password */
define( 'DB_PASSWORD', 'oijdqjhafjbuhifjnkai' );

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
define( 'AUTH_KEY',         'aS>q^^[zKruzZ`D9_^Hyui@#9pq]Owg-yxI4U?;*E3g`BmmLiZH{FwwCj +VDUG/' );
define( 'SECURE_AUTH_KEY',  '>]c`:l=6S!0n~5}=i~b_Q?Rnc{KbN+f1sHCvWMSNq15Ix_1^q=unA(09R{4n,F[?' );
define( 'LOGGED_IN_KEY',    'l,B5_}RH|]0D7 ]?ShA6):llvqdOarS__gX:O_R~E!:z5<@(.JK0l9pJAW1O/?Vb' );
define( 'NONCE_KEY',        '.=T4NM0w$A?Ro|#Zjt(&-q<^RztlwZ>E[fDjle.a7Lb/9iwRG&sJyV=>ddcq;LBI' );
define( 'AUTH_SALT',        ':0.I=WVeoq$^jtN.3&g?7*?_[WrmkpC.%:OJOw58-?3HrU$veF$248,Geep+e:BI' );
define( 'SECURE_AUTH_SALT', 'QCQt&!~xdG#Pz`793$@BI|uzuA:wD#5VU$7Xu%#{TjK{;|}((6owd(qCu{=+{cl=' );
define( 'LOGGED_IN_SALT',   'qy+/yi$;e[=LdSjNdw?oT!.koQ$MFjl%Ob(-wEi<Lc2C/pn9*Tiw3~aE0E6@oN6.' );
define( 'NONCE_SALT',       'P=!N1aSe`p@F[~HQ?LGZcxW;2tBG]`l;Op!/X&X.4z]g]eHYP+rrt<P7Mlz6=?7f' );

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
