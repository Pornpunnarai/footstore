<?php
include '../connect-mysql.php';
$id = $_POST["activity_id"];

$sql = "SELECT * FROM `activity` WHERE `id` = $id";
$objQuery = mysqli_query($objCon, $sql);
$result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
$activity_name = $result["activity_name"];


if (!is_dir($activity_name)) {
    $flgCreate = mkdir("$activity_name");
}



$sql = "SELECT * FROM `activity_file` WHERE `activity_id` = $id";
$objQuery = mysqli_query($objCon, $sql);



$files = array();
while ($result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC))
{
    $type = $result['f_mime'];
    $data = $result['f_data'];
    $name = $result['f_name'];
    $files[] = "$name";


    // write the BLOB Content to the file
    if ( file_put_contents("$activity_name/$name", $data) === FALSE ) {
        echo "Could not write File";
    }
}



// a temp filename containing the current unix timestamp
$zipfilename = "$activity_name/temp_" . time() . ".zip";
$zip = new ZipArchive;
$zip->open($zipfilename, ZipArchive::CREATE);
foreach ($files as $file) {
    $zip->addFile("$activity_name/".$file);
}
$zip->close();

header('Content-Type: application/zip');
header('Content-disposition: attachment; filename='.$activity_name.'.zip');
header('Content-Length: ' . filesize($zipfilename));
readfile($zipfilename);



function delete_directory($dirname) {
    if (is_dir($dirname))
        $dir_handle = opendir($dirname);
    if (!$dir_handle)
        return false;
    while($file = readdir($dir_handle)) {
        if ($file != "." && $file != "..") {
            if (!is_dir($dirname."/".$file))
                unlink($dirname."/".$file);
            else
                delete_directory($dirname.'/'.$file);
        }
    }
    closedir($dir_handle);
    rmdir($dirname);
    return true;
}
delete_directory("$activity_name");


?>