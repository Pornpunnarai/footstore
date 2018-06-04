<?php
session_start();
if(!isset($_SESSION["Admin"])) {
    header('Location: ../home.php');
}
include '../connect-mysql.php';

if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $project_id = $id;
    $sql = "SELECT * FROM `project` WHERE id = '$id'";
    $objQuery = mysqli_query($objCon, $sql);
    $result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
if($result["id"]==null){
    header('Location: ../home.php');
}
}
else{
    header('Location: ../home.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project Management</title>
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
            <li class="breadcrumb-item active">Project Detail</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i>Project Detail</div>
            <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            Project ID:
                        </div>
                        <div class="col-md-10">
                            <p><?=$result["id"];?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                         Project Name:
                        </div>
                        <div class="col-md-10">
                            <p><?=$result["project_name"];?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            Detail:
                        </div>
                        <div class="col-md-10">
                            <p><?= nl2br(htmlspecialchars($result["detail"])); ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            Duration:
                        </div>
                        <div class="col-md-10">
                            <p><?=$result["start_date"];?> to <?=$result["end_date"];?></p>
                        </div>
                    </div>

                    <div class="row pull-right" style="padding-bottom: 1%;padding-right: 1%">
                        <div class="col-md-12">
                            <form action="../activity_management/add_activity.php" method="post">
                                <input type="hidden" name="project_id" value="<?=$result["id"]?>"><br>
                                <input class="btn btn-success" type="submit" value="Create Activity">
                            </form>
                        </div>
                    </div>

<br><br><br><br>

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr style="text-align:center">
                            <th width="5%">No.</th>
                            <th width="30%">Activity Name</th>
                            <th width="10%">Date</th>
                            <th width="10%">Status</th>
                            <th width="15%" colspan="2"">View</th>
                            <th width="5%">Edit</th>
                            <th width="5%">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(isset($_GET["id"])) {





                            $id = $_GET["id"];
                            $sql = "SELECT * from activity a 
                            LEFT JOIN project_activity_manager pam ON pam.activity_id = a.id 
                            LEFT JOIN project p on pam.project_id = p.id
                            WHERE pam.project_id = $id";
                            $objQuery = mysqli_query($objCon, $sql);


                        }
                        $activity_number =1;

                        while ($result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC))
                        {

                            ?>
                            <!--                            <tr>-->
                            <tr id="<?php echo $result["activity_id"] ?>">
                                <input type="hidden" name="id" value="<?=$result["id"];?>">
                                <td><?=$activity_number;?></td>
                                <td><?=$result["activity_name"]?></td>
                                <td><?=$result["date"]?></td>
                                <td><?=$result["status"]?></td>
                                <td>
                                    <form action="../activity_management/view_activity.php" method="get">
                                        <input type="hidden" name="id" value="<?=$result["activity_id"]?>">
                                        <input class="btn btn-info" type="submit" value="Docs">
                                    </form>
                                </td>
                                <td>
                                    <?php if($result["status"]=="approve"){?>
                                        <form action="../bill_management/bill.php" method="get">
                                            <input type="hidden" name="id" value="<?=$result["activity_id"]?>">
                                            <input class="btn btn-info" type="submit" value="Bills">
                                        </form>
                                    <?php }else{?>
                                            <input class="btn btn-default" type="submit" value="Bills">
                                    <?php } ?>
                                </td>
                                <td>
                                    <form action="../activity_management/edit_activity.php" method="post">
                                        <input type="hidden" name="project_id" value="<?=$project_id?>">
                                        <input type="hidden" name="id" value="<?=$result["activity_id"]?>">
                                        <input class="btn btn-warning" type="submit" value="Edit">
                                    </form>
                                </td>
                                <td>
                                    <button class="btn btn-danger remove">Delete</button>
                                </td>
<!--                                <td>-->
<!--                                    <form action="../activity_management/check_delete.php" method="post">-->
<!--                                        <input type="hidden" name="id" value="--><?//=$result["activity_id"]?><!--"><br>-->
<!--                                        <input class="btn btn-warning" type="submit" value="Edit">-->
<!--                                    </form>-->
<!--                                </td>-->

                            </tr>
                            <?php
                            $activity_number++;
                        }
                        ?>
                        </tbody>
                    </table>

                    <div class="row col-md-12">
                        <input class="btn btn-secondary" type="submit" value="Back">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © Your Website 2017</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <?php include '../allscripts.html'?>
</div>


<script>
    $(document).ready(function () {

        var max_fields = 150; //maximum input boxes allowed
        var wrapper = $(".input_fields_wrap"); //Fields wrapper

        var add_button = $(".add_field_button"); //Add button ID

        var x = 1; //initlal text box count


        $(add_button).click(function (e) { //on add input button click
            e.preventDefault();
            if (x &lt; max_fields) { //max input box allowed
                x++; //text box increment

                $(wrapper).append(&#039;<a href="#" rel="nofollow">Remove</a>'); //add input box
            }
        });



        $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });
</script>

</body>

</html>
