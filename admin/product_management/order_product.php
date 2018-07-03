<?php
session_start();
if(!isset($_SESSION["Admin"])) {
    header('Location: ../home.php');
}

include '../../connect-mysql.php';

//$sql = "SELECT * FROM `image_detail` WHERE `project_id` =(SELECT id from product WHERE name= '" . $_COOKIE["product_name"] . "')";
$sql = "SELECT * FROM `image_detail` WHERE `product_id` = (SELECT id from product WHERE name='" . $_COOKIE["product_name"] . "')";
$objQuery = mysqli_query($objCon, $sql);
//echo $sql;
$i = 1;
while ($result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) {

    $sql = "UPDATE `image_detail` SET `order` = '" . $i . "' WHERE product_id = '" . $result["product_id"] . "' AND id = '" . $result["id"] . "'";

        echo $sql."<br>";
    $objQuery1 = mysqli_query($objCon, $sql);
    $i++;
}
$i=0;