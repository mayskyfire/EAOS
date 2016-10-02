<?php
session_start();

$udb = 'webideecom_eaos';
$pdb = 'xoOWjseBz';
/*$udb = 'hfc';
$pdb = 'jnfwRBGjL2snU29v';*/
$db_name = 'webideecom_eaos';
$db_host = 'localhost';
$db_type = 'mysql';
$prefix = "eaos_";

//conection: 
$con= mysql_connect($db_host,$udb,$pdb,$db_name) or die("Error: " . mysql_error()); 
//mysql_query( "SET NAME UTF8"); 
//mysql_set_charset($con, "utf8"); 
mysql_query("USE $db_name");
mysql_query("SET NAMES UTF8");
?>