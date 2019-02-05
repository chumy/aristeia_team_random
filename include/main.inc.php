<?php


define( 'DB_HOST', 'XXXXX' ); // set database host
define( 'DB_USER', 'XXXXX' ); // set database user
define( 'DB_PASS', 'XXXXX' ); // set database password
define( 'DB_NAME', 'XXXXX' ); // set database name
define( 'SEND_ERRORS_TO', 'XXXXX@XXXX' ); //set email notification email address
define( 'DISPLAY_DEBUG', true ); //display db errors?

require_once('PDO.inc.php');

// RUTAS ABSOLUTAS
define("local","/home/chumynet/public_html/aristeia");
define('ROOT',$_SERVER['DOCUMENT_ROOT'].'/aristeia');
define('INCLUDES', ROOT.'/include');
define('JS', ROOT.'/js');
define('STYLES', ROOT.'/styles');
define('MODULES', ROOT.'/modules');
define('SCRIPTS', ROOT.'/scripts');
define('RAN_MODULES', MODULES.'/random');
define('PAN_MODULES', MODULES.'/panel');
define('GEN_MODULES', MODULES.'/general');
define("UPLOAD_DIR",local.'/uploads/');
define('ADM_MODULES', ROOT.'/admin/modules');

//RUTAS RELATIVAS
define('WROOT','/aristeia/');
define('WINCLUDES', '/include');
define('WJS', '/js');
define('WSTYLES', '/aristeia/styles');
define('WMODULES', '/modules');
define('WSCRIPTS', '/scripts');
define('WIMAGES', '/aristeia/images');
define('WUPLOADS', '/uploads');
define('WADM_MODULES', '/admin/modules');




?>