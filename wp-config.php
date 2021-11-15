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
define( 'DB_NAME', 'artheckc_interclean' );

/** MySQL database username */
define( 'DB_USER', 'artheckc_sistemasICS' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sistemasICS' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'Xj;N38RonDU1D7|i8nkX#Sv25zp6J*M-R3q59!xmIU38CvF(F]O5w8#/2|)j)UJJ');
define('SECURE_AUTH_KEY', 'Bw36#nOI:|g0Nt7MdW0yWp55e&kYw(*2Y2tZXmOx:152~czC2_L0q/m3#Jy&ht1)');
define('LOGGED_IN_KEY', '7f_Q+nU40-+JU[4[xS|kN@EkBBI3dOGg38kQR_263o+%]+87v*[MsqQi;Lq#p]w1');
define('NONCE_KEY', 'TrcOZ*A0F&8O[G!&~l(rM_9~7@]PITP_0iUEwc~DD6D(#;G3&)%3i@V&T~*96*qD');
define('AUTH_SALT', 'R3f12Tc0G8bg[;kkkCxLf_9RR@+VnIkQj(64Mfg_7:Y@U!Bp)fpyEt;%#Gk4/92P');
define('SECURE_AUTH_SALT', '0Xh27nTT:tOFx/JJr~Q79MnurGnh8DHlxpn*i#E|OC#~5p+42v(+nA+nT|4Aek2S');
define('LOGGED_IN_SALT', '#tj-&A89]#9-21d3;N3]rkg(!SP/@A#54IMP~%Q10c7;S3N4a5#2|*TQu5QA)ZLT');
define('NONCE_SALT', '4GV(1#9RH*H6oF1P)VWZ*5k3Nuj51%q5p2B|6/3i0(7E%kc8Q/Ov64T1Ond&92if');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
