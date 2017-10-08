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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', 'EfXwZsSulbm3oA9B');

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
define('AUTH_KEY',         '(y-H-5zb*)mc[#5,0f4U]cp^h|E;itlDEkK,o!p_Nj$:.Ei|%38bFQ+1J]xWk:i1');
define('SECURE_AUTH_KEY',  '}RgWFeCSKA2TMYWq!xrbmv`$.7B=eCo>p|-}5?L1m=;@]~KrMUl+u+-=mRF@lQT$');
define('LOGGED_IN_KEY',    'C0bK->vQBPx;,}|:u33RDOj>%*#BGi+hrlw1)1KHS|+]oH|:3!Hu@+ NnG>>Cbl,');
define('NONCE_KEY',        '1O]mu.oT h`Kdst*]1pB1P-P{L*W4Nt[#-9bHm]VZNs:p<vCW,88U*sKon;-:3$I');
define('AUTH_SALT',        'Sev+DD2/sp#B!Z!DTCY?Z1Y4=+Mbi@:gmV}+Q|u;E(XO8uW+J<?wv3SCgF?j-[ag');
define('SECURE_AUTH_SALT', ' HK7ihuE+-~sUp/Gpxe0UGgAT!,-~P_~DV0/Jyqh+hR0TbU(]u,/sU|Mb<4BBq<T');
define('LOGGED_IN_SALT',   'H+R}z6HGAdVz-V_,MK@S=Q!Q*Y .B)d6X96=cz5nRIJE-, c0RHPkO6At1`)R3~:');
define('NONCE_SALT',       ',A+c>eu;#`h)$[^[8WN:#m$21D}WSu62lmKFQJDKuOW8`&=Cv@<5P>EI+# L?>AG');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';

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
