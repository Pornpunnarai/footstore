<?php
include '../connect-mysql.php';
$id = $_POST["id"];

$sql = "SELECT * FROM `activity_file` WHERE `id` = $id";

$objQuery = mysqli_query($objCon, $sql);
while($result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)){
    $name = $result["f_name"];
}

   $sql = "SELECT * FROM `activity_file` WHERE `f_name` = \"$name\"";

    $objQuery = mysqli_query($objCon, $sql);
    $result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);





            if(isset($result)){
                $type = $result['f_mime'];
                $data = $result['f_data'];
                $name = $result['f_name'];
                header('Content-Type: '.$type);
                header('Content-Length: '.strlen($data));
                header('Content-disposition: inline; filename="'.$name.'"');
                echo $result['f_data'];



        }
        ?>