<?php

/**
 * Custom WordPress configurations on "wp-config.php" file.
 *
 * This file has the following configurations: MySQL settings, Table Prefix, Secret Keys, WordPress Language, ABSPATH and more.
 * For more information visit {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} Codex page.
 * Created using {@link http://generatewp.com/wp-config/ wp-config.php File Generator} on GenerateWP.com.
 *
 * @package WordPress
 * @generator GenerateWP.com
 */

/* MySQL settings */
// ** MySQL settings ** //
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') ?: 'wordpress' );
define( 'DB_USER', getenv('WORDPRESS_DB_USER') ?: 'devuser' );
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: 'password' );
define('DB_HOST', getenv('WORDPRESS_DB_HOST'));
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ** Authentication Unique Keys and Salts ** //
define('AUTH_KEY',         ' r7NwwF(Ki1CbS&I9s=s3t|v{s r-kS7D)4C|#L#PHFp1&[}NQaeHbISC#b4!wx0');
define('SECURE_AUTH_KEY',  '%3:T?hrPy<<}h,%ryV+sWN3JfOC-_D9?Y.=gIh*7]BP)i8cDXG)./-P^r7:+MkTR');
define('LOGGED_IN_KEY',    'OG%e}}C-v@c+2jhh,6Jz/|iTuAazdcOlspe<[|,-T+Lrv-O@S@TW(Pc6P0rDH*O9');
define('NONCE_KEY',        'oR<+jm!1O9+nthk+O3S%/75$}Zr|JivhR^D#_VO}|sy0y[:YPF2]z=UJ92RXtz`M');
define('AUTH_SALT',        'wSRd|qH5n1o?`,r:t^0lgo-m~wiB1Et{N=:M!rdk-cx>Y;kPe;$18BU[$&C,C]xa');
define('SECURE_AUTH_SALT', 'Foo^qh]Iv-<_AM-;|DQyD>9|>#xj$.bN{Uy|(;BT_&.0|7=X(.!FWP%4psdjlv#:');
define('LOGGED_IN_SALT',   '|+:sJ]Q5M*2:Y#pf*_;Xeh.Zxo--TGq6r0;,{i9CU+?!^=ZGb|X)$yWP:CaC7)]t');
define('NONCE_SALT',       'X8942(u^aQ^{|5# o< eEnZaP8=4-H|j>EuZe[lZ%XB`P<LL]4~CY|sb+exCwla{');

// ** WordPress Database Table prefix ** //
$table_prefix = 'wp_';

// ** Debugging mode ** //
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_DISPLAY', false );
define('WP_MEMORY_LIMIT', '512M');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
