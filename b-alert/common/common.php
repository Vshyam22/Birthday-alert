<?php
if (!defined("ROOTPATH")) define("ROOTPATH",$_SERVER['DOCUMENT_ROOT'].'/b-alert/');
if (!defined("LINK_PATH")) define("LINK_PATH",'http://'.$_SERVER['HTTP_HOST'].'/b-alert/');
if (!defined("JSPATH")) define("JSPATH",'http://'.$_SERVER['HTTP_HOST'].'/b-alert/js/');
if (!defined("CSSPATH")) define("CSSPATH",'http://'.$_SERVER['HTTP_HOST'].'/b-alert/css/');
if (!defined("IMGPATH")) define("IMGPATH",'http://'.$_SERVER['HTTP_HOST'].'/b-alert/images/');

//ini_set("error_reporting", E_ALL);
//ini_set("display_errors", "On");
error_reporting(0);
#######  Include db connectivity ################
require_once(ROOTPATH."common/db.php");
#######  Include Common Files #################
require_once(ROOTPATH."common/page.php");
########### Establish DB Connection ############ 
$db_obj 	= new DB();
$page_obj 	= new PAGE();

$conn = $db_obj->Connect();


?>