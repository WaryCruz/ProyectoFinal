<?php //security check
if( !defined( 'in_phpvibe' ) || (in_phpvibe !== true) ) {
die();
}
/* This is your phpVibe config file.
* Edit this file with your own settings following the comments next to each line
*/

/*
** MySQL settings - You can get this info from your web host
*/

/** MySQL database username */
define( 'DB_USER', 'eshos_25483429' );

/** MySQL database password */
define( 'DB_PASS', '6b7yzvgt' );

/** The name of the database */
define( 'DB_NAME', 'eshos_25483429_PromoNet' );

/** MySQL hostname */
define( 'DB_HOST', 'sql300.eshost.com.ar' );

/** MySQL tables prefix */
define( 'DB_PREFIX', 'vibe_' );

/** MySQL cache timeout */
/** For how many hours should queries be cached? **/
define( 'DB_CACHE', '12' );

/*
** Site options
*/
/** License key 
Create it in the store, under "My Licenses" **/
define( 'phpVibeKey', '' );

/** Site url (with end slash, ex: http://www.domain.com/ ) **/
define( 'SITE_URL', 'http://promonet.eshost.com.ar/' );

/** Admin folder, rename it and change it here **/
define( 'ADMINCP', 'moderator' );

/* Choose between mysqli (improved) and (old) mysql */
 define( 'cacheEngine', 'mysqli' ); 
 
/** Timezone (set your own) **/
date_default_timezone_set('Europe/Bucharest');

/** Your Paypal email **/
define( 'PPMail', 'test@gmail.com' );
/*
 ** Mail settings.
 */  
$adminMail = 'admin@domain.com';
$mvm_useSMTP = false; /* Use smtp for mails? */
/* true: Use smtp | false : uses's PHP's sendmail() function */
$mvm_host = 'mail.domain.com';  /* Main SMTP server */
$mvm_user = 'postman@domain.com'; /* SMTP username */
$mvm_pass = 'mail pass'; /* SMTP password */
$mvm_secure = 'tls'; /* Enable TLS encryption, `ssl` also accepted */
$mvm_port = '';  /* TCP port to connect to	*/
/*
 ** Full cache settings.
 */  
$killcache = false; /* true: disabled full cache (recommended for starters); false : enabled full cache */
$cachettl = 7200; /* $ttl = Expiry time in seconds for cache's static html pages */ 
/* 1 day = 86400; 1 hour = 3600; */ 
/*
** Custom settings would go after here.
*/
?>