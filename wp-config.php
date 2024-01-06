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
define( 'DB_NAME', 'wedding' );

/** Database username */
define( 'DB_USER', 'wedding' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

define('AUTH_KEY',         'LW-%#o6S(P9U@k8!/+-67QuRWF-WQT8;1Kr(v|5-G3*@4hlfN`c>$=XCSw)|%C<-');
define('SECURE_AUTH_KEY',  'g@KmU1-|-@8Tz]~sB4)y8 q|P$Ev|6>*H@?aNA@t_0$,{Y|LQN4lqXR[-H.AT3CF');
define('LOGGED_IN_KEY',    'xf`j/,#5elAa|::;#Oi33$82wC0s#h4-k;RF,(|nK/-jgo_:)Iyn/--G;O_j<b=_');
define('NONCE_KEY',        'c|h=fSF@vm_mp+h<KcG2T)0b&P%QkuD.8uv]F>48!*z|s]9OsnN8m7RabkNiwN:D');
define('AUTH_SALT',        'dyCpD RM-|(iQD/y037,Yd*XqmF}&eqwF2[B&z5<1;UG+jW[-DF~ O*}&U/{(n%)');
define('SECURE_AUTH_SALT', '+bboYPLCwiyg3BF87eg9Bf@qP72-xK-d3+Of@5V5qdaAIuR6.:!|u+sVURL3EMi9');
define('LOGGED_IN_SALT',   '_l4MwlI>+.J,vW QpTBL|&5ap`,3=B%7,~(K?(1?%A~yBV6I-KA --]h*N%`sX!_');
define('NONCE_SALT',       '`<RIrLT$NE3dGiI_+j-T*VJ7 xj7B4?NA2bs2ELK5ZIG7cV8W}|*_|,`} -9`|6,');

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

define( 'FS_METHOD', 'direct' );
