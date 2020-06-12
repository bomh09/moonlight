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
define( 'DB_NAME', 'wp_hotel' );

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
define( 'AUTH_KEY',         '/N*K@Hj9`8Rvg/D$Kg4e`KGp$!+YN5=W0dVywf-n031kyJ7u/qGUX*CNMc?#_a4L' );
define( 'SECURE_AUTH_KEY',  '<n9H;t>E-f{BPQg36Z5JpVdqc<oqBAdY*<i^Z4h7BIuW,RH+RJ&9v+oLB]!XzjJn' );
define( 'LOGGED_IN_KEY',    'Yzj;/ 6.`*P0DmXhQGU=!3&$@)l[)APSBA&yWH/y~l(J*@-]94[gzHv$Y/OR!LOK' );
define( 'NONCE_KEY',        '$itCx@5n+uD4ydm Yij;m7THx,19*zHj 9vgS^lC=e+3o [sL ,6>$7X)ch`MLJd' );
define( 'AUTH_SALT',        'XqjHN$&qf2}`RalOsjAy2AS)mJfUN.S4Rm;NRAKs?lvrhR?z(}2VS9z@Y;:ELbV+' );
define( 'SECURE_AUTH_SALT', 'dt#Hfo<`7DSEE:Ny?.+Zhj!&r6UZ*?B*e{/nZ(lku,$pjY-AQY+C?75z*#n%{s/?' );
define( 'LOGGED_IN_SALT',   '09,K=WOzoTxjl#>H%N1Fld[iGbB#450`9wfu[>2B0IVNARGIjem>.>!p eTk{kzL' );
define( 'NONCE_SALT',       't<BY9,{27VgBs{Us)R_{cb/44an7fXEpLe}<|~SSAoMV{v;y)WK[pP^@X$R!Q,N~' );

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
