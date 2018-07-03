<?php
include_once('db.php');
include ('../../connect-mysql.php');

	$db = new database($serverName,$username,$password,$dbName);
	$idArray = explode(",",$_POST['ids']);
	$db->updateOrder($idArray);
?>