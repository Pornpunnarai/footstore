<?php
session_start();
if(!isset($_SESSION["Admin"])) {
    header('Location: ../home.php');
}

include '../../connect-mysql.php';


$brand_id = $_POST["brand_id"];
$product_name = $_POST["product_name"];
$product_type = $_POST["product_type"];
$product_price = $_POST["product_price"];


$size_chkbox = implode(",",$_POST["size_chkbox"]);



//
//// Set the allowed file extensions
//$fileTypes = array('jpg', 'jpeg', 'gif', 'png'); // Allowed file extensions
//$verifyToken = md5('unique_salt' . $_POST['timestamp']);
//if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
//    $tempFile   = $_FILES['Filedata']['tmp_name'];
//
//    // Validate the filetype
//    $fileParts = pathinfo($_FILES['Filedata']['name']);
//    if (in_array(strtolower($fileParts['extension']), $fileTypes)) {
//
//        $picture = addslashes(file_get_contents($tempFile));
////        $sql = "INSERT INTO `uploadify`(`img_part`)
////            VALUES ('" . $picture . "')";
////        $objQuery = mysqli_query($objCon,$sql);
//
//    }
//}


$sql = "SELECT * FROM `product` WHERE `name` =  \"$product_name\"";
$objQuery = mysqli_query($objCon,$sql);
$result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
if($result["name"]==NULL) {

    $sql = "INSERT INTO `product`(`name`, `brand_id`, `size`, `price`, `type`)
VALUES ('" . $product_name . "','" . $brand_id . "','" . $size_chkbox . "','" . $product_price . "','" . $product_type . "')";
    $objQuery = mysqli_query($objCon, $sql);

//
//$sql = "INSERT INTO image_detail (`order`, `project_id`, `image`) VALUES
//    ('" . 1 . "',(SELECT id from product WHERE name='$product_name'),'" . $picture . "')";
//    $objQuery = mysqli_query($objCon, $sql);




}
//
//
//
//
//
//
////header('Location: project.php');
//?>
