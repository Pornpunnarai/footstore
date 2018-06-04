<?php
session_start();
if(!isset($_SESSION["Admin"])) {
    header('Location: ../home.php');
}

include '../connect-mysql.php';

$activity_id = $_POST["activity_id"];
$project_id = $_POST["project_id"];







if($_FILES['files']['tmp_name'] !=="") {




    for($i=0;$i<count($_FILES["files"]["name"]);$i++){
            $z = $i;
            $z++;
            $name = $_FILES['files']['name'][$i];
            $filenewcon = strstr($_FILES["files"]["name"][$i],'.');
            //$name = $activity_name."-".$z."$filenewcon";

            $mime = $_FILES['files']['type'][$i];
            $data = addslashes(file_get_contents($_FILES  ['files']['tmp_name'][$i]));
            $size = intval($_FILES['files']['size'][$i]);




        $sql = "SELECT * FROM `activity_file` WHERE `activity_id` = \"".$activity_id ."\" AND `f_name` = \"" .$name. "\"";
        $objQuery2 = mysqli_query($objCon, $sql);
        $result = mysqli_fetch_array($objQuery2, MYSQLI_ASSOC);

                if($result==NULL) {
                    echo "เข้า"."<br>";
                    $sql = "INSERT INTO `activity_file`(`activity_id`, `f_name`, `f_mime`, `f_size`, `f_data`)
            VALUES ('" . $activity_id . "','" . $name . "','" . $mime . "','" . $size . "','" . $data . "')";
                    $objQuery = mysqli_query($objCon, $sql);
                }
                else{
                    echo $name;
                    echo "ชื่อไฟล์ซ้ำ"."<br>";
                }

            }


}



header('Location: ../activity_management/view_activity.php?id='.$activity_id);
