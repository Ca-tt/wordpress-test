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
define( 'DB_NAME', 'wordpress-test' );

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
define( 'AUTH_KEY',         '@ITt,G],9$3&_iKx U-OBbs9hY/Nk5@$Z6:@4OUKZ>FO&(?:dJlJ_gX*Rddtqho5' );
define( 'SECURE_AUTH_KEY',  '5H/?W!mM<ul>Jcq~uh.t2x60X@ m?olFl*G|HDs|IhP1hq/QYAx%9:L%8ZE=j%h{' );
define( 'LOGGED_IN_KEY',    'W//BgV{*{qzqI]AD>He3`Ru<^jV|U2^OIfy*u>6w&h@GxcZwEGXmmfKobgah=[uG' );
define( 'NONCE_KEY',        'Dbf_kvR#j`SDOhknM1 ToK{Pz4GLhIL1Q&v{-X>dzRld8:T[T-lk1*%j)hyBB&W^' );
define( 'AUTH_SALT',        '_THQS2{6|z8&N=>Q)BCt#QpJRr:3}I; TK;L1?mAh1d?j=6-#a0/:o2DBxGpzcLj' );
define( 'SECURE_AUTH_SALT', 'anK@Pj[nS~X.,:Khb;4-rtr9IXuXpfK/@Ap:O_37jPvsww !#^zu:8Kcv)xyN#v=' );
define( 'LOGGED_IN_SALT',   '3(DSz,<kn_w+sYlCxN&e)~+1R+0!:CB!5J?IC)Q%SZeN=cL[:b0)G([IAWAM)tml' );
define( 'NONCE_SALT',       '&-sjcc8S[8k?:P/uTWf@3fcj)6YXA%#oU9X>&xQU_X0/bc-+4A(!ngJ>Tg2q[}/a' );

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
