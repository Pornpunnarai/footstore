<?php
session_start();
if(!isset($_SESSION["Admin"])) {
    header('Location: ../home.php');
}
include '../../connect-mysql.php';

$sql = "SELECT * FROM `slider` ORDER BY `id`";
$objQuery = mysqli_query($objCon,$sql);

//Modal
include_once("db.php");
$db = new database($serverName,$username,$password,$dbName);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>FineDae-Slider Management</title>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/finedae/finedae-admin/js/jquery-ui.js"></script>

    <?php include '../headpart.html'?>

    <script type="text/javascript">
        $(document).ready(function(){
            //$('.reorder_link').on('click',function(){
            $("ul.reorder-photos-list").sortable({ tolerance: 'pointer' });
            $('#reorder-details').slideDown('slow');
            $('.reorder_link').html('Save Shuffled Image');
            $('.reorder_link').attr("id","save");
            $('.image_link').attr("href","javascript:void(0);");
            $('.image_link').css("cursor","move");
            $("#save").click(function( e ){
                if( !$("#save i").length )
                {
                    $(this).html('').prepend('<img src="img/loading.gif"/>');
                    $("ul.reorder-photos-list").sortable('destroy');
                    var h = [];
                    $("ul.reorder-photos-list li").each(function() {  h.push($(this).attr('id').substr(9));  });
                    $.ajax({
                        type: "POST",
                        url: "update.php",
                        data: {ids: " " + h + ""},
                        success: function(html)
                        {
                            window.location.reload();
                        }
                    });

                    console.log(h);
                    return false;
                }
                e.preventDefault();
            });
            //});
        });
    </script>

    <link href="../css/modal_order.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer" id="page-top">

<!-- Navigation-->
<?php include '../nav.html'?>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="slider.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Slider Management</li>
        </ol>

        <!-- Example DataTables Card-->
        <div class="card">
            <div class="card-header">
                <i class="fa fa-table"></i>Slider Management</div>

            <div class="card-body">
                <div class="row pull-right" style="margin-bottom: 10px; margin-right: -40px; margin-top: -30px;">
                    <div class="col-md-3">
                        <form action="add_slider.php" method="post">
                            <input type="hidden" name="id" value="<?=$result["id"]?>"><br>
                            <input class="btn btn-success" type="submit" value="Add">
                        </form>
                    </div>
                    <div class="col-md-3" style="margin-top: 25px; margin-left: 10px;">
                        <button href="#" class="btn btn-primary js-show-modal1">
                            Order
                        </button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th width="5%">Order</th>
                            <th width="10%">Image/Video</th>
                            <th width="10%">1st Field</th>
                            <th width="10%">2nd Field</th>
                            <th width="15%">Button Name</th>
                            <th width="15%">Modified Date</th>
                            <!--                            <th width="5%">Detail</th>-->
                            <th width="5%">Status</th>
                            <th width="5%">Edit</th>
                            <th width="5%">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while ($result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC))
                        {
                            ?>
                            <tr id="<?php echo $result["id"] ?>">
                                <input type="hidden" name="id" value="<?=$result["id"];?>">
                                <td><?=$result["order"]?></td>
                                <?php
                                $mime = mime_content_type("uploaded/".$result["file"]);
                                if(strstr($mime, "video/")){
                                    ?>
                                    <td>
                                        <video width="100%" controls>
                                            <source src="uploaded/<?=$result["file"]?>" type="video/mp4">
                                        </video>
                                    </td>
                                <?php
                                }else if(strstr($mime, "image/")){
                                   ?>
                                    <td><img style="width:100%" src="uploaded/<?=$result["file"]?>"></td>
                                <?php
                                }
                                ?>
                                <td><?=$result["first_field"]?></td>
                                <td><?=$result["second_field"]?></td>
                                <td><?=$result["btn_name"]?></td>
                                <td><?=$result["modified_date"]?></td>
                                <td>
                                    <br>
                                    <?php
                                    if ($result["status"] == "Hide") {
                                        ?>
                                        <button class="btn btn-success enable">Show</button>
                                        <?php
                                    } else{
                                        ?>
                                        <button class="btn btn-danger enable">Hide</button>
                                        <?php
                                    }
                                    ?>
                                </td>

                                <td>
                                    <form action="edit_slider.php" method="post">
                                        <input type="hidden" name="id" value="<?=$result["id"]?>"><br>
                                        <input class="btn btn-warning" type="submit" value="Edit">
                                    </form>
                                </td>
                                <td>
                                    <br>
                                    <button class="btn btn-danger remove">Delete</button>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php

            $sql = "SELECT (CASE WHEN modified_date IS NULL THEN created_date ELSE modified_date END) AS update_date 
                    FROM slider ORDER BY modified_date DESC LIMIT 1";
            $objQuery = mysqli_query($objCon, $sql);

            while ($result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC))
            {
                $datetime = date_create($result["update_date"]);
                $dateformat = date_format($datetime,"l, d M Y");
                $timeformat = date_format($datetime,"H:i A");

                ?>

                <div class="card-footer small text-muted">Updated <?= $dateformat ?> at <?= $timeformat ?></div>

            <?php } ?>
        </div>
        <br>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                </div>

                <div class="modal-body">
                    <p>You are about to delete one track, this procedure is irreversible.</p>
                    <p>Do you want to proceed?</p>
                    <p class="debug-url"></p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger btn-ok" href="check_delete.php">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <!--Modal-->
    <div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
        <div class="overlay-modal1 js-hide-modal1"></div>
        <div class="container">
            <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
                <div class="row" style="margin-top: 50px">
                    <div>
                        <div class="col-md-12 text-center">
                            <a href="javascript:void(0);" class="btn btn-saveinfo reorder_link" id="save">SHUFFLE & REORDER PHOTOS</a>
                        </div>
                        <button class="how-pos3 js-hide-modal1">
                            <img src="/finedae/images/icons/icon-close.png" alt="CLOSE">
                        </button>

                        <div class="gallery">
                            <ul class="reorder_ul reorder-photos-list">
                                <?php
                                $rows = $db->getRows();
                                foreach($rows as $row):?>
                                    <?php
                                    $mime = mime_content_type("uploaded/".$row['file']);
                                    if(strstr($mime, "video/")){
                                        ?>
                                        <li id="image_li_<?php echo $row['id']; ?>" class="ui-sortable-handle">
                                            <a href="javascript:void(0);"style="float:none;" class="image_link">
                                                <video controls style="width: 280px; height: 180px;"><source src="uploaded/<?php echo $row['file']; ?>" type="video/mp4"></video>
                                            </a>
                                        </li>
                                        <?php
                                    }else if(strstr($mime, "image/")){
                                        ?>
                                        <li id="image_li_<?php echo $row['id']; ?>" class="ui-sortable-handle">
                                            <a href="javascript:void(0);" style="float:none;" class="image_link">
                                                <img style="width: 280px; height: 180px;" src="uploaded/<?php echo $row['file']; ?>" alt="">
                                            </a>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Footer-->
<?php include '../footer-admin.php'?>

<script>
    $(".enable").click(function(){
        var id = $(this).parents("tr").attr("id");

        if(confirm('Are you sure to change status in this record ?'))
        {
            $.ajax({
                url: 'check_enable.php',
                type: 'POST',
                data: {id: id},
                error: function() {
                    alert('Something is wrong');
                },
                success: function(data) {
                    //$("#"+id).remove();
                    alert("Record changed successfully");
                    location.reload();
                }
            });
        }
    });

</script>

<script>
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");

        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
                url: 'check_delete.php',
                type: 'POST',
                data: {id: id},
                error: function() {
                    alert('Something is wrong');
                },
                success: function(data) {
                    $("#"+id).remove();
                    alert("Record removed successfully");
                }
            });
        }
    });

</script>


<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->

<!--<script src="../vendor/datatables/jquery.dataTables.js"></script>-->
<!--<script src="../vendor/datatables/dataTables.bootstrap4.js"></script>-->
<!--<!-- Custom scripts for all pages-->-->
<!--<script src="../js/sb-admin.min.js"></script>-->
<!--<!-- Custom scripts for this page-->-->
<!--<script src="../js/sb-admin-datatables.min.js"></script>-->

<!--Modal-->
<!--===============================================================================================-->
<script src="/finedae/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/finedae/vendor/bootstrap/js/popper.js"></script>
<!--===============================================================================================-->
<script src="/finedae/js/main.js"></script>

</body>

</html>
