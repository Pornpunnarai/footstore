<?php
session_start();
if(!isset($_SESSION["Admin"])) {
    header('Location: ../home.php');
}

include '../../connect-mysql.php';

$uploadDir = 'uploads/';

$id = $_POST["id"];
$description = $_POST["description"];
$link = $_POST["link"];

$selection = $_POST["selection"];

if($selection=="video"){
    $_FILES["file"] = $_FILES["video"];
}
if($selection=="image"){
    $_FILES["file"] = $_FILES["image"];
}



$target_dir = "uploaded/";

//name follow file upload
//$target_file = $target_dir . basename($_FILES["image"]["name"]);
//change name

$type = strstr($_FILES["file"]["name"],'.');

$filename = "ID-".$id.$type;

$target_file = $target_dir . $filename;

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size -- Kept for 500Mb
//if ($_FILES["image"]["size"] > 500000000) {
//    echo "Sorry, your file is too large.";
//    $uploadOk = 0;
//}


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "jpeg" &&
    $imageFileType != "gif" && $imageFileType != "png" &&
    $imageFileType != "mp3" && $imageFileType != "mp4" &&
    $imageFileType != "wma" && $imageFileType != "MP4") {
    echo "Sorry, only wmv, mp4 & avi files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $date = new DateTime();
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        date_default_timezone_set('Asia/Bangkok');
        $date = date('Y-m-d H:i:s');
        $sql = "SELECT max( `order` ) AS max FROM `slider`";
        $objQuery = mysqli_query($objCon, $sql);
        $result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
        $order = $result["max"]+1;
        $sql = "INSERT INTO `slider`(`order`,`description`, `file`, `link`, `modified_date`)
        VALUES ('" . $order . "','" . $description . "','" . $filename . "','" . $link . "','" . $date . "')";
        $objQuery = mysqli_query($objCon, $sql);


        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
    } else {

        echo "Sorry, there was an error uploading your file.";
    }
}







header('Location: slider.php');


?>
