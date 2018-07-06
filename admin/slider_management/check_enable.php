<?php
session_start();
if(!isset($_SESSION["Admin"])) {
    header('Location: ../home.php');
}
include '../../connect-mysql.php';

$id = $_POST["id"];

$sql = "SELECT `status` FROM `slider` WHERE `id` = '".$id."'";
$objQuery = mysqli_query($objCon,$sql);
$result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
if($result["status"]=="Show"){
    $enable = "Hide";

}else{
    $enable = "Show";
}


$sql = "UPDATE `slider` SET `status` = '".$enable."'  WHERE `id` = '".$id."'";
$objQuery = mysqli_query($objCon,$sql);



header('Location: slider.php');

?>
