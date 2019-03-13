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
define( 'DB_NAME', 'ghtest_db' );

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
define( 'AUTH_KEY',         '|Hut1PW2bWTvpnEx_MA4DBo31(p.<t~V9a9{{6=zAqgy3p#JJHpzb~[>GNb(r:1F' );
define( 'SECURE_AUTH_KEY',  'QFpAwGw@m8-8[-JQ07UEwhQ*U%Y%|N`yD:%CQQUYiq/#RiS#+GJ%=.Egs>1!xSU)' );
define( 'LOGGED_IN_KEY',    'S%-1IIYWDPp}7%gac88HU_Z`pW(+:a5yWDqBxHa[:fK^HEzfGzWj!9|6+a^OLi_s' );
define( 'NONCE_KEY',        'Kp/{V;o#5]Xxfq#o7sXE^bCD!A]|r>0=5m}!~W$$e=:]J}@B9MBlF*9xqo;mmqC1' );
define( 'AUTH_SALT',        ' JSC)a320@<R`28Knd!=6fP),t.SK>5.uzmZhfolN 8D=.OunNjaE5[bT<@AH*H4' );
define( 'SECURE_AUTH_SALT', 'm|bl=;{(0iZvk@5.+*KwMB;3aiB,OT61Br& )5;{+1l)h+r-tFhGHkHfB~[bCr^>' );
define( 'LOGGED_IN_SALT',   'Lj8l&gZwOB<Y~I+[+:n3PZw9c1RC)7|+@+ILIW!+ktLvn$*-`TtKE][^7Uy$u~{q' );
define( 'NONCE_SALT',       'yK2Q*:4``ujglPrJItL8]0j9,HL)O7RF)5$g9x&+7B&3*|m`QPmyzlx[C0h,>8I.' );

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
