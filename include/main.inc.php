<?php


define( 'DB_HOST', 'localhost' ); // set database host
define( 'DB_USER', 'root' ); // set database user
define( 'DB_PASS', 'realdb' ); // set database password
define( 'DB_NAME', 'aristeia_panel' ); // set database name
define( 'SEND_ERRORS_TO', 'XXXXX@XXXX' ); //set email notification email address
define( 'DISPLAY_DEBUG', true ); //display db errors?

require_once('PDO.inc.php');

// RUTAS ABSOLUTAS
define("local","/media/Datos/export/chumy/Proyectos/Aristeia/escaleta/aristeia_team_random");
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
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
define('WROOT','/');
define('WINCLUDES', '/include');
define('WJS', '/js');
define('WSTYLES', '/styles');
define('WMODULES', '/modules');
define('WSCRIPTS', '/scripts');
define('WIMAGES', '/images');
define('WUPLOADS', '/uploads');
define('WADM_MODULES', '/admin/modules');




?>