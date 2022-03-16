<?php
# Database Configuration
define( 'DB_NAME', 'wp_investmentprod' );
define( 'DB_USER', 'investmentprod' );
define( 'DB_PASSWORD', 'vWeshpaB5R8mVUOroZ__' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wpia_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '${qwd&=!d.$azv0+-]UKHXZ_ad*x]II-Hv8&&PaT$Jax*=f7LALzY/f>k5V$}EBx');
define('SECURE_AUTH_KEY',  '5/t3p5--:+nR+B6bV;##(ETV^]4zhjt?8+(yJIgSxO[wv64Lm|;+`%Q?:+6LsdbW');
define('LOGGED_IN_KEY',    'H4p?,v4ZxbYCLpha22kwUM=_0{d*?yI3/MVbwVenaocieLe5?CtWO(2)nN^fxL|?');
define('NONCE_KEY',        '1|^B~ALc6p&/C,JgN}1;`XH]|#&+)[Q|&?$0p(d5U_&--KS7/%LIe/wF%g81KB/%');
define('AUTH_SALT',        '1&XO]t[*.5o{.TL_Ux{hEKg8*W(<G3{J,{+?SKvVv-@NNL|6g/Q:cLupMm-eJkNo');
define('SECURE_AUTH_SALT', '!|V<TZO<fequyjQU8x:$M`^-w_{)`3wt,Me2*B|mCesEk|AM|0f!G>9FWQ_2gFK3');
define('LOGGED_IN_SALT',   'AA0-1+cSzSBTp.zQ]-ueynpPG:R6-iRc#Z<.7XOx|@}6%hybw);dAQ|W_4RlpRlp');
define('NONCE_SALT',       ' s}hC:FQAX((vo[bWaW7K(^8Ee:?(QxaW)Uti]{V0$a:mz$=91cA8MVPt^rlaoFa');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'investmentprod' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'WPE_APIKEY', '7bb9ffc5d4a36df3052dd3258150108fa0b45f8e' );

define( 'WPE_CLUSTER_ID', '100750' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_SFTP_ENDPOINT', '' );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'investment-alpha.com', 1 => 'investmentprod.wpengine.com', 2 => 'www.investment-alpha.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100750', );

$wpe_special_ips=array ( 0 => '104.198.6.15', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
