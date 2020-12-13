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
define( 'DB_NAME', 'realDB' );

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
define( 'AUTH_KEY',         'DP2k4)Zqu=a<m*KQ%^ou4di-LMeTO~@SA!(-cS<J?%Kot(Y[FSMCfOi*;n,3F}Vd' );
define( 'SECURE_AUTH_KEY',  'BT 2FHU}g9_Zc,+{G:.Kq}WqnWM1cfUt3_p#Pb[R$Zg>w9RDf|$[?JIkMU6O%%$-' );
define( 'LOGGED_IN_KEY',    'Yv6![P;f3`h9$`224gbfVol*h6a4OP,y+Y:j0]BoMU|y%aW#X<MF*@2xZ/[,8%eY' );
define( 'NONCE_KEY',        '#[,KXer3#$(ulQy5?02I02Zo+`mITpf/#c,dZxz0.%9,QX9wJiS@H!Xepr* aE`{' );
define( 'AUTH_SALT',        '$,W%o$W^A!wLT`0I/BniQJ2}Gz,V(iyXWcb3wP,~[2VYQ8k+S|OIKCs:|-#8kw1v' );
define( 'SECURE_AUTH_SALT', 'EfzBk~3Um,n^^aS2m V6WzgJNi_wn5LWWowE SvCS!:GM|(wEEv&cgVWZM7Drs.z' );
define( 'LOGGED_IN_SALT',   'jp?->aD4-zGx-?02;C*[(:Wc,m{peFZHg[KDg,hv[>?C{7V3{+OY-&d[5_?I(fHB' );
define( 'NONCE_SALT',       '~SRqVpfSSF#.&f1j9VgO->7N5(%=pvC/qdNA|;GRJ|B8x5d0V`r,cUauIMh,Xoy2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'shadabdb_';

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
