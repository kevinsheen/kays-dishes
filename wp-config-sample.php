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
define('DB_NAME', 'kaysdisheswordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jxL+I1I,W|nfPJu<eN<fhsQ$-W-g&~J`n1`QIDyZAC%]VX<GQ_+s6qk(,/6LfX- ');
define('SECURE_AUTH_KEY',  'i~B[+!*|w34>01dSOn}B-&75B2E!Ak+Anr[R^gB*c tO:4gr`9pPwr)9B=6p%Hq4');
define('LOGGED_IN_KEY',    'm6PM.p%$Wmv}+jr`Cv,c5~8H)yOi%_-/b@3c-NW9$E#D|N~Jex8i@|</Xl-X4sR+');
define('NONCE_KEY',        'Q?t-p{+}>n1J%KL]Tfz15P6IGP[-9?=O+9aZ:]-A WXV#4zOTX=>X%rWvI:b7r~%');
define('AUTH_SALT',        ',:S4KBc0UX%5+lWl.c+P@4U(L+KX+F3gB2gz3H+{}t`RRE/9`S3#0(9SNf8>BzY~');
define('SECURE_AUTH_SALT', ':eJT#34Ho1O{4g;3:S_S2bD6~tn-je}wc3IJwPui69t4Qs9Rp4A+jYg0/2}J.A+(');
define('LOGGED_IN_SALT',   'mH@]nxw4kF1=iAbo}5%{Ww><9oS-$Okd~#7yT>qretIj/1*T;ENObt-+Z87u8+8T');
define('NONCE_SALT',       '>r-=]*;07/ZCXC=ggzmE_H3z&@}a;OEp](j{&.m{,)[.e_x]`<}:^*U|M&oB-|Tu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xyz77_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
