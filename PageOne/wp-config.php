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
define( 'DB_NAME', 'pageone_db' );

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
define( 'AUTH_KEY',         'EyWJ2amvD o8_cFu#A,jT-j@PP[_#k=z@Agz:,|5/1r|MFJKX;g|$Dh]A6`R$+PK' );
define( 'SECURE_AUTH_KEY',  '#?*?v,;tN^ANXA=h>T_e>We%5&Yt/)fu4$`Q>Xd_&`r(g3P5zq]P6:xmCd;zR>4x' );
define( 'LOGGED_IN_KEY',    'U!t[Ba1qEv~7BOU!F`V|-=fJk&(%OtInHnZ:|o$8=@4VH,Ke4P2:a=qF;zD:9r58' );
define( 'NONCE_KEY',        'z2MO0X,<a}PAPgySqgD6hTOLzE}Ut;vI/9g*FoFjRu-*.Yn</3RrM-B~n70b^v@D' );
define( 'AUTH_SALT',        '7|7i/h7&e?{Gkt/_vb[V{_2}o#xjHFX5+b#|So9XjTK*[4Q65=p6ug@o51PbD g@' );
define( 'SECURE_AUTH_SALT', 'zeIs-(Vj;`1T0WwB{oM:=G46N6RQZS_&/fZ#zBQ8_%Lo)GfS*vZTL@H)SOb>o46_' );
define( 'LOGGED_IN_SALT',   ']9|KW]5k<aegwZA[s|glq=iR.~s^y*GfEp?g%WnpRHPcmf!xKoDD1pV~GdNd*;zZ' );
define( 'NONCE_SALT',       'A2V[`[8}0OS;I.w(Ds!C7MhFPGdy){<b40#=?[ri)(=xril*A&rL sOXPX@R&DNe' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_pageone';

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
