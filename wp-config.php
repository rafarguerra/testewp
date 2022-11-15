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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testewp_db' );

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
define( 'AUTH_KEY',         '#)Hf&@];4OD!wo0=?aOU*6V5T0hNi/B,.E:]k TcnJg$<mJYP.(wQ2t_dcD2?#;z' );
define( 'SECURE_AUTH_KEY',  'jZWa5mg-}&A1Ja,R!?~Lic@!. J%du<QQt- j.GKSZ74eYq&bvG^a/b7PY=V_lN,' );
define( 'LOGGED_IN_KEY',    '-X<i]YY{L]ppy}0?/AzNY HX/!e{e;>i#(#J*Y)~cha~zA%aI#T4MVb2a|&on `?' );
define( 'NONCE_KEY',        '^OJz )~ru%g+,IS )Y!Bb+u)!yfR]rWlThmq}A ?b>939!z+MZ+rU-EQ1$T$FyRp' );
define( 'AUTH_SALT',        ' 5^}=&<BmJrhFLXQ*erC)?#1fQ6d?jhP+,_9,4nt,_JC,#PBkYK1)88r+7ogcY&)' );
define( 'SECURE_AUTH_SALT', '-k3>{g>V!wOk?ZsjpW6--.2k5_B=;&ewocb)8bS;S6HmJ3;guQytI,9U,$Ym0)%E' );
define( 'LOGGED_IN_SALT',   'wa@!+_(PD*kLykYZ]_oEp>@Twb,s&E-)MC%~<SW*s2I,dY2Jt`E(6R%;dy(Vr,D9' );
define( 'NONCE_SALT',       'sdk:EUpzP%@Q`0~u>1e&/aa=ngWJ</w9>xH_GOO9(-7cq|.fQ%t@ o~Z/D-7rYi*' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
