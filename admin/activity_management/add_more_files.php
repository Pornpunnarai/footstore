<?php
session_start();
if(!isset($_SESSION["Admin"])) {
    header('Location: ../home.php');
}
include '../connect-mysql.php';

$activity_id = $_POST["activity_id"];
$sql = "SELECT * FROM `project_activity_manager` WHERE `activity_id` =".$activity_id;
$objQuery = mysqli_query($objCon, $sql);
$result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);

$project_id = $result["project_id"];



$sql = "SELECT COUNT(activity_id) AS count_activity_id FROM activity_file WHERE activity_id = $activity_id";
$objQuery = mysqli_query($objCon, $sql);
$result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);

$sql = "SELECT * FROM `project` WHERE `id` = $project_id";
$objQuery = mysqli_query($objCon, $sql);
$result2 = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);

$sql = "SELECT * FROM `activity` WHERE `id` = $activity_id";
$objQuery = mysqli_query($objCon, $sql);
$result3 = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add More Files</title>
    <?php include '../headpart.html'?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<?php include '../nav.html'?>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add More Files</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Add More Files</div>
            <div class="card-body">
                <form action="check_add_more_files.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-1">
                            Project Name:
                        </div>
                        <div class="col-md-11">
                            <?= $result2["project_name"];?></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-1">
                            File Number :
                        </div>
                        <div class="col-md-11">
                            <?= $result["count_activity_id"]+1;?></div>
                    </div>
                    <br>


                    <input type="hidden" name="activity_id" value="<?=$activity_id?>">
                    <input type="hidden" name="project_id" value="<?=$project_id?>">
                    <div class="row">
                        <div class="col-md-1">
                            Activity Name:
                        </div>
                        <div class="col-md-11">
                            <?=$result3["activity_name"]?>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-1">
                            File:
                        </div>
                        <div class="col-md-11">
                            <input type="file" style="width: 40%" multiple="" class="form-control" name="files[]" ">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <input class="btn btn-secondary" type="submit" value="Add">
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- /.content-wrapper-->
<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>Copyright © CMU.SPP Admin Website 2018</small>
        </div>
    </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>

<?php include '../allscripts.html'?>
<script src="../js/upload_pic.js"></script>
</body>
</html>
