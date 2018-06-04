<?php
session_start();
if(!isset($_SESSION["Admin"])) {
    header('Location: ../home.php');
}
include '../connect-mysql.php';

if(isset($_POST["id"])) {
    $project_id  = $_POST["project_id"];
    $id = $_POST["id"];
    $sql = "SELECT * FROM `activity` WHERE id = '$id'";
    $objQuery = mysqli_query($objCon, $sql);
    $result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
}
else{
    header('Location: ../home.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Activity</title>
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
            <li class="breadcrumb-item active">Edit Activity</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Edit Activity</div>
            <div class="card-body">
                <form action="check_edit.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-2">
                            ID:
                        </div>
                        <div class="col-md-5">
                            <?=$result["id"];?><br><input type="hidden" name="id" value="<?=$result["id"];?>">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-2">
                            Activity Name:
                        </div>
                        <div class="col-md-8">
                            <input type="input" class="form-control" name="activity_name" value="<?=$result["activity_name"];?>">
                        </div>
                    </div>
                    <br>


                    <div class="row">
                        <div class="col-md-2">
                            Date:
                        </div>
                        <div class="col-md-2">
                            <input type="date" class="form-control" name="date" value="<?=$result["date"];?>">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <input type="hidden" name="project_id" value="<?=$project_id?>">
                        <input class="btn btn-secondary" type="submit" value="Edit">
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
</div>
</body>

</html>
