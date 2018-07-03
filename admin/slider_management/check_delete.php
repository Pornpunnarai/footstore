<?php
session_start();
if(!isset($_SESSION["Admin"])) {
    header('Location: ../home.php');
}
include '../../connect-mysql.php';

$id = $_POST["id"];
$sql = "SELECT * FROM `slider` WHERE `id` = '".$id."'";
$objQuery = mysqli_query($objCon,$sql);
$result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
$file = $result["file"];
if(isset($id)){
    $sql = "DELETE FROM `slider` WHERE `id` = ".$id;
    $objQuery = mysqli_query($objCon, $sql);
    unlink("uploaded/$file");
}
header('Location: slider.php');

?>
