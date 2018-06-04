<?php
session_start();
if(!isset($_SESSION["Admin"])) {
    header('Location: ../home.php');
}

include '../connect-mysql.php';

$project_id = $_POST["project_id"];
$activity_id = $_POST["activity_id"];
$date = $_POST["date"];
//
//echo $_POST["bill_name"];
//echo "<br>";
//echo $_POST["company"];
//echo "<br>";
//echo $_POST["date"];
//echo "<br>";
//echo $_POST["invoice_id"];
//echo "<br>";
//var_dump($_POST["list"]);
//echo "<br>";
//var_dump($_POST["quantity"]);
//echo "<br>";
//var_dump($_POST["price"]);
//echo "<br>";
//echo $_FILES["files"]['tmp_name'][0];
//echo "<br>";

$bill_name = $_POST["bill_name"];
$company = $_POST["company"];
$date = $_POST["date"];
$invoice_id = $_POST["invoice_id"];
$list = $_POST["list"];
$quantity = $_POST["quantity"];
$price = $_POST["price"];
$manager_id = 1;

$sql = "INSERT INTO `bill`(`bill_name`, `date`, `activity_id`, `manager_id`)
      VALUES (\"".$bill_name."\",\"".$date."\",\"".$activity_id."\",\"".$manager_id."\")";
$objQuery = mysqli_query($objCon, $sql);
$bill_id = mysqli_insert_id($objCon);


$i = 0;
foreach ($list as $value) {

    if($list[$i]!=null){
    $sql = "INSERT INTO `expense`(`invoice_id`, `company`, `list`, `quantity`, `price`, `total_price`, `bill_id`, `date`)
      VALUES (\"" . $invoice_id . "\",\"" . $company . "\",\"" . $list[$i] . "\",\"" . $quantity[$i] . "\",\"" . $price[$i] . "\",\"" . $quantity[$i]*$price[$i] . "\",\"" . $bill_id . "\"
      ,\"" . $date . "\")";
    $objQuery = mysqli_query($objCon, $sql);
    echo $sql."<br>";
    }
    $i++;
}



if($_FILES['files']['tmp_name'] !=="") {


        for($i=0;$i<count($_FILES["files"]["name"]);$i++){
            $z = $i;
            $z++;
            $name = $_FILES['files']['name'][$i];
            $filenewcon = strstr($_FILES["files"]["name"][$i],'.');
            //$name = $activity_name."-".$z."$filenewcon";
            echo $name;
            $mime = $_FILES['files']['type'][$i];
            $data = addslashes(file_get_contents($_FILES  ['files']['tmp_name'][$i]));
            $size = intval($_FILES['files']['size'][$i]);

            //$file = addslashes(file_get_contents($_FILES['files']['tmp_name'][$i]));
            $sql = "INSERT INTO `bill_file`(`bill_id`, `f_name`, `f_mime`, `f_size`, `f_data`)
VALUES ('" . $bill_id . "','" . $name ."','" . $mime ."','" . $size ."','" . $data ."')";
            $objQuery = mysqli_query($objCon, $sql);

        }

}



//header('Location: ../project_management/view_project.php?id='.$project_id);
