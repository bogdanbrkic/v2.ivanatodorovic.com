<?php
/**
* The base configurations of the WordPress.
*
* This file has the following configurations: MySQL settings, Table Prefix,
* Secret Keys, and ABSPATH. You can find more information by visiting
* {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
* Codex page. You can get the MySQL settings from your web host.
*
* This file is used by the wp-config.php creation script during the
* installation. You don't have to use the web site, you can just copy this file
* to "wp-config.php" and fill in the values.
*
* @package WordPress
*/

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ivanatodorovic');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'molerova25AD1wanee');

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
define('AUTH_KEY',         'vNZap446QOk{c-;*tbE&qIS}RzJtyY/b8y0,H1v.7mon^kK+c8PdWT`|WhOZ)<?n');
define('SECURE_AUTH_KEY',  '/2+eSQ!s`5TR+P|CE%S(E):Z8a.-`2Ew:X#+nK=h0YCk rw;P71}%>V[f+.JBvP0');
define('LOGGED_IN_KEY',    'm[]o^[KZ$i;/^)Fz?^{qRbIz.{{;B<O9J:t/P-+`*d,_tK^a>%[rQ@}Qba|=):uR');
define('NONCE_KEY',        'I0LyKRKG$=wMHnq[WnN*gxHu(vxtej){4=r4}jn==:,#!3@m+[c1Vf}t*867CRr/');
define('AUTH_SALT',        'N0@-y*TKi32g<g|~w21tb{^U0? ETTtg1CHCzY7z**d+M^~95i;QopmknP/IH<-)');
define('SECURE_AUTH_SALT', '{E_TdQ7{*o|q(`10FQ^7D/MxM~;eZGNl|M+d:%f,K|Ks<oUb Wf|C/^S]x`(yr[0');
define('LOGGED_IN_SALT',   '$rx,Bgo8IBk!;v*cK-G[aw/|[re<oWIx#zHml< nC)o7n1l&Q%yh+{93Ay]o%U%p');
define('NONCE_SALT',       'HV;07F$L.`_e4|-F<[%.s!_=x4Ji:5zK`/i-[e8.Pk?NH{,$ngV.TB3Jn{r-8z+?');

/**#@-*/

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each a unique
* prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = 'wp_';

/**
* For developers: WordPress debugging mode.
*
* Change this to true to enable the display of notices during development.
* It is strongly recommended that plugin and theme developers use WP_DEBUG
* in their development environments.
*/
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
