<?php
session_start();
if(!isset($_SESSION["Admin"])) {
    header('Location: ../home.php');
}
include '../../connect-mysql.php';

    $sql = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = '".$dbName."' AND TABLE_NAME = 'slider'";
    $objQuery = mysqli_query($objCon, $sql);
    $result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Slider Management</title>
    <?php include '../headpart.html'?>
    <link rel="stylesheet" type="text/css" href="/finedae/finedae-admin/content_management/css/style.css">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<?php include '../nav.html'?>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="slider.php">Slider</a>
            </li>
            <li class="breadcrumb-item active">Add Slider</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card">
            <div class="card-header">
                <i class="fa fa-table"></i> Add Slider</div>

            <div class="card-body">
                <form action="check_add.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-2 text-right">
                            ID
                        </div>
                        <div class="col-md-6">
                            <?= $result["AUTO_INCREMENT"];?></div>
                        <input type="hidden" class="form-control" name="id" value="<?= $result["AUTO_INCREMENT"];?>">
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-2 text-right">
                            Description<span style="color: red"> *</span>
                        </div>
                        <div class="col-md-6">
                            <input type="input" class="form-control" name="description" required>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-2 text-right">
                            Link Address
                        </div>
                        <div class="col-md-6">
                            <input type="input" class="form-control" name="link">
                        </div>
                    </div>
                    <br>


                    <div class="row">
                        <div class="col-md-2 text-right">
                            Image/Video<span style="color: red"> *</span>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control" name="selection">
                                <option value="image">Image</option>
                                <option value="video">Video</option>
                            </select>
                        </div>
                    </div>
                    <br>

                    <div id="select-image" class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-10">
                            <img id="blah" src="img/upload.png"
                                 style="width: 600px; height: 200px;" alt="your image" />
                            <br><br>
                            <input type="file" name="image" id="image" onchange="readURL(this)" accept="image/*" required>
                        </div>
                    </div>
                    <br>

                    <div id="select-video" class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-10">
                            <video id="preview" style="width: 600px; height: 200px;" class="img-thumnail image" src="" controls></video>
                            <br><br>
                            <input type="file" name="video" id="video" onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])" accept="video/*" required>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-10">
                        <input  style="width: 20%" class="btn btn-pink" type="submit" value="Add">
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Footer-->
<?php include '../footer-admin.php'?>


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>

<?php include '../allscripts.html'?>

<script>

    var loadFile = function(event) {
        var output = document.getElementById('preview');
        output.src = URL.createObjectURL(event.target.files[0]);
    };

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(600)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>

<script>
    $("#select-video").hide();
    document.getElementById("image").required = true;
    document.getElementById("video").required = false;

    $(document).ready(function() {
        $("select").change(function() {
            var filetype = $(this).val();
            if (filetype == "image") {
                $("#select-image").show();
                document.getElementById("image").required = true;
                $("#select-video").hide();
                document.getElementById("video").required = false;
            } else if (filetype == "video") {
                $("#select-image").hide();
                document.getElementById("image").required = false;
                $("#select-video").show();
                document.getElementById("video").required = true;
            } else {
                $("#select-video").hide();
                document.getElementById("image").required = true;
                document.getElementById("video").required = false;
            }
        });
    });
</script>
</body>
</html>
