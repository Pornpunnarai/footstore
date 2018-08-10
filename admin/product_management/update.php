<?php
include_once('db.php');
include ('../../connect-mysql.php');

	$db = new database($serverName,$username,$password,$dbName);
	$idArray = explode(",",$_POST['ids']);
	$product_id = $_POST['product_id'];
	$db->updateOrder($idArray,$product_id);
?>