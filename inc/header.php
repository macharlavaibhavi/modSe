<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Session.php');
	Session::init();
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../helpers/Format.php');
	
	spl_autoload_register(function($class){
		include_once "classes/".$class.".php";
	});

  $db  = new Database();
  $fm  = new Format(); 
  $usr = new User();
  $tqt = new Tecquestest();
  $lqt = new logquestest();
  $mqt = new mockquestest();
  $gqt = new gkquestest();
  $Tpro = new TecProcess();
  $Lpro = new logProcess();
  $Gpro = new gkProcess();
  $Mpro = new mockProcess();
  
	
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache"); 
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>
