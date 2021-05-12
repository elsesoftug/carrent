<?php
//session_start();
//Create connection credentials
$db_host = 'localhost';
$db_name = 'tax';
$db_user = 'root';
$db_pass = '';
//set default sever time
date_default_timezone_set("Africa/Kampala");


//Create mysqli object
$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);

//Error handler
if($mysqli->connect_error){
	printf("Connect failed: %s\n",$mysqli->connect_error);
	exit;
}

?>
