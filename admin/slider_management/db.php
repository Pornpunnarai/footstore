<?php
class database{
function __construct($serverName,$username,$password,$dbName){
	$con = mysqli_connect($serverName,$username,$password,$dbName);
	if(mysqli_connect_errno()){
		die("Error! Failed To Connect To Database: ".mysqli_connect_error());
	}else{
		$this->connect = $con;
	}
}
function getRows(){
	$query = mysqli_query($this->connect,"SELECT * FROM `slider` ORDER BY `order` ASC") or die(mysqli_error());
	while($row = mysqli_fetch_assoc($query))
	{
		$rows[] = $row;
	}
	return $rows;
}
function updateOrder($id_array){
	$count = 1;
	foreach ($id_array as $id){
		$update = mysqli_query($this->connect,"UPDATE `slider` SET `order` = $count WHERE id = $id");
		$count ++;	
	}
	return true;
	}
}
?>