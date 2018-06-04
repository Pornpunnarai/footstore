<?php
session_start();
if(!isset($_SESSION["Admin"])) {
    header('Location: ../home.php');
}
include '../connect-mysql.php';
$project_id = $_POST["project_id"];
$id = $_POST["id"];
$activity_name = $_POST["activity_name"];
$date = $_POST["date"];

if($activity_name !=="") {

        $sql = "UPDATE `activity` SET `activity_name`=\"".$activity_name."\",`date`=\"".$date."\" WHERE `id` = ".$id;
        $objQuery = mysqli_query($objCon, $sql);
}


$sql = "SELECT * FROM `project_activity_manager` WHERE `activity_id` =".$id;
$objQuery = mysqli_query($objCon, $sql);
$result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
header('Location: ../project_management/view_project.php?id='.$project_id);


?>
