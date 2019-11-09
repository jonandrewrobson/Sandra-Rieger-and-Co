<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'ss_dbname_eflam52aln');

/** MySQL database username */
define('DB_USER', 'bPVa2ypsy1f62Ri');

/** MySQL database password */
define('DB_PASSWORD', 'rn5tRNx07LzXXEGT');

/** MySQL hostname */
define('DB_HOST', 'sandraleerieger61626.ipagemysql.com');

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
define('AUTH_KEY', 'r|y{&xnyjXm@mu&!G!$wUe}xPdEGG=S=&U(z?IUnHwSa-B<ZUP|eNd>A]!zZ<l=sT-p-<uyv>b{x%OnHpr!UQLS<HnPXt+?aqpWo+wW(H*-+yH?$>ufSkQPwWtX_c)AW');
define('SECURE_AUTH_KEY', 'bDdyomqErz]*pW=CqAG)r]x(Hqy}iZWXySDZ%U^PskonIPXAqqH[HzfiZ%brSsxc@(IBz)u@Zk|F{zZ&&oEj-T+vtIbgsUCc^_AaeI^vOP@jB}cRCfstQ%{?|z)-AktP');
define('LOGGED_IN_KEY', 'zh>&tO/sXCNYn{[^N/)rJixrhvtFGz|R)$%kWDgipWc=L!lC!rv_/BELvd<XCm*yl[)ZxPvUF@PfRkL!xI_{m)!v[hSX=OojZJf%Dwc/|qmhf<F>!jZREnyG*(meP<W&');
define('NONCE_KEY', '=XaIxtMuk@AA^>Ea;Y+VY/b{qr]zXtNXtC(NkM[aEco;[mblRsozm!BrFTwAMI^+m;A+-D{(BEyVwc/xlQnHJTp=r_EuY@LjkeTFl=({bhR%p{LXtBjKWQqBMhLuC;|d');
define('AUTH_SALT', '}>L^KJ(W-O[Gv!FOwxxjU}rl|[>f?IwHxc_xn%laFhv^>pBuZ!jhR(!QkVY{wy>c]Rp/dKW-c}D+EtV;^pjqxFFI&*Vh;KQ@+]ezjxc/rBZfuRu?zup%+tz;<rwFU-?n');
define('SECURE_AUTH_SALT', 'NPf{CEh-L$Ns<IH_@lPZfe@oYE=FYr%aEtl={beNk@Tzx+*Gi_OtZ|GP)qX^CHUIVckKnc^;R)q^D^VDaWdM(ImFL;Db*)SM^&?{WsY!v@tzLJ(fazJMHzXp&NZd(*uv');
define('LOGGED_IN_SALT', 'LdY;YJg%Y><bPC(}[*MEj_BjZ;<tY/{_Tzv__-BO/g;i-l|g?Jg(WK{j<ntidZ_lpfrQdC_<*$$I<Hh?o^p}VVHjdI|<WWlx/-ShlAc|?ux)O<{XkF=URieGh!;v%*Sp');
define('NONCE_SALT', '&]iV{akN{D{EnN<eG>QEVSOfHI$=Zs]l+xU>&&e/dQ%@+MlXd=i]Qg_dHlDnNGO;qeSn+FNz?uHx%zG(O/W|;^BEt^Ae}dU<{D[JvpDE[ev*F=HRQW[aXDsEBnXY{-cn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_vgic_';

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
