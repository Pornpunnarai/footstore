<?php
/*
UploadiFive
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
*/


$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "cmofficial_shoesstore";

$objCon = mysqli_connect($serverName,$username,$password,$dbName);
mysqli_set_charset($objCon,"utf8");

$product_name = $_COOKIE["product_name"];

// Set the uplaod directory
$uploadDir = '/uploads/';

// Set the allowed file extensions
$fileTypes = array('jpg', 'jpeg', 'gif', 'png'); // Allowed file extensions

$verifyToken = md5('unique_salt' . $_POST['timestamp']);

if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
    $tempFile   = $_FILES['Filedata']['tmp_name'];
//	$uploadDir  = $_SERVER['DOCUMENT_ROOT'] . $uploadDir;
//	$targetFile = $uploadDir . $_FILES['Filedata']['name'];

    // Validate the filetype
    $fileParts = pathinfo($_FILES['Filedata']['name']);
    if (in_array(strtolower($fileParts['extension']), $fileTypes)) {

        // Save the file
        //move_uploaded_file($tempFile, $targetFile);

        // Save to Database as Blob
        $picture = addslashes(file_get_contents($tempFile));

        $sql = "INSERT INTO image_detail (`order`, `product_id`, `image`) VALUES
    ('" . 1 . "',(SELECT id from product WHERE name='$product_name'),'" . $picture . "')";
        $objQuery = mysqli_query($objCon, $sql);

        echo 1;

    } else {

        // The file type wasn't allowed
        echo 'Invalid file type.';

    }
}
?>