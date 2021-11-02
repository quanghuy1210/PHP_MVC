<?php 
define('_DIR_ROOT', __DIR__);

//xử lý http root
if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on'){
	$webroot = 'https://'.$_SERVER['HTTP_HOST'];
}else{
	$webroot = 'http://'.$_SERVER['HTTP_HOST'];
}
//get url root
$dirRoot = str_replace('\\','/',_DIR_ROOT);
$documentRoot = str_replace('\\','/',$_SERVER['DOCUMENT_ROOT']);

$folder = str_replace(strtolower($documentRoot), '', strtolower($dirRoot));
$webroot = $webroot.$folder;

define('_WEB_ROOT',$webroot);



require_once 'config/routers.php';
require_once 'core/Route.php';//load base route
require_once 'app/App.php';//load các app
require_once 'core/Controller.php';//load base controller 



?>