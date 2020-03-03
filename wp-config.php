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
define( 'DB_NAME', 'examen2' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '002dba29b91c59b5f309f15a968b957d020aee2f72d86276' );

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
define( 'AUTH_KEY',         '#)ssgkA}QoW|t0x#l[-lR|p<wrtir #D1?QuX6:}u=ytdTfZ^%L|B>5`~I)/JS(D' );
define( 'SECURE_AUTH_KEY',  '%9y7py%5RB6/h+O X~$z)J*tuw;`96/%=pnLhppd~6G~_^+718}IF /lr%K#K@IX' );
define( 'LOGGED_IN_KEY',    'MPauTbo7}nCJK{hJpix>!Z7@:OF9?LJB23l/qwq*?Dt{]/?{JX@%#ue^+W(4_@UX' );
define( 'NONCE_KEY',        'oZ~:61g>QgK4rfV3bg`sikeY>,;;P0sMkc0vkt1(;g#~zF/Y)9#&g;T/VzR?:Z2w' );
define( 'AUTH_SALT',        '(q%]-4Q?TI+VbOpmZs1~FZ*$B_~[k-gW8#x.0;l}a/ok>s>33nT[<[ qj~MBje73' );
define( 'SECURE_AUTH_SALT', 'ELb<V97A#.e0ot>Yai9#$1B?/OQ5/Hm6M%T_3rsN9._A!^7!q|!w*<(Xj(L7)kxL' );
define( 'LOGGED_IN_SALT',   '%:Wf23R6qTG$hFgqq,H-:UQ/)t{tDg+dw8AmRS~$6CIM-{_[.$J2(|Kqx+?c$j%e' );
define( 'NONCE_SALT',       '0B/qsi#1<lL,JYPe ?fwT*B_l<wSK*,~{%by+A&(qbamy}~N4C=|C9SSksK@{R8a' );

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
