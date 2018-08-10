<?php
session_start();
if(!isset($_SESSION["Admin"])) {
    header('Location: ../home.php');
}
include '../../connect-mysql.php';

$sql = "SELECT p.*,b.name AS brand_name FROM product p LEFT JOIN brand b on p.brand_id = b.id ORDER BY p.id DESC";
$objQuery = mysqli_query($objCon,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Management</title>
    <?php include '../headpart.html'?>
    <script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script data-require="bootstrap@*" data-semver="3.1.1" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

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
            <li class="breadcrumb-item active">Product Management</li>
        </ol>

        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Product Management</div>
            <div class="card-body">

                <div class="row pull-right" style="padding-bottom: 1%;padding-right: 1%">
                    <div class="col-md-12">
                        <form action="add_product.php" method="post">
                            <input type="hidden" name="id" value="<?=$result["id"]?>"><br>
                            <input class="btn btn-success" type="submit" value="Add Product">
                        </form>
                    </div>
                </div>

                <div class="table-responsive">
                    <table align="center" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr style="text-align:center">
                            <th width="5%">No.</th>
                            <th width="30%">Preview Image</th>
                            <th width="20%">Brand</th>
                            <th width="15%">Name</th>
                            <th width="15%">Type</th>
                            <th width="15%">Price</th>
                            <th width="4%">View</th>
                            <th width="4%">Edit</th>
                            <th width="4%">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i=1;
                        while ($result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC))
                        {

                            ?>
                            <tr id="<?php echo $result["id"] ?>">
                                <input type="hidden" name="id" value="<?=$result["id"];?>">
                                <td>
                                    <?=$i;?>
                                </td>
                                <td>
                                    <?php
                                    $sql2 = "SELECT `order`,`file_image` FROM `image_detail` WHERE `product_id`= '".$result["id"]."' ORDER BY `order` ASC LIMIT 1";
                                    $objQuery2 = mysqli_query($objCon,$sql2);
                                    $result2 = mysqli_fetch_array($objQuery2, MYSQLI_ASSOC);
//                                    ?>
                                     <img style="width: 220px; height: 120px;" src="uploads/<?=$result['id']?>/<?=$result2['file_image']?>" alt="">
                                </td>
                                <td><?=$result["brand_name"]?></td>
                                <td><?= nl2br(htmlspecialchars($result["name"])); ?></td>
                                <td><?=$result["type"]?></td>
                                <td><?=$result["price"]?></td>
                                <td>
                                    <form action="view_project.php" method="get">
                                        <input type="hidden" name="id" value="<?=$result["id"]?>"><br>
                                        <input class="btn btn-info" type="submit" value="View">
                                    </form>
                                </td>
                                <td>
                                    <form action="edit_project.php" method="post">
                                        <input type="hidden" name="id" value="<?=$result["id"]?>"><br>
                                        <input class="btn btn-warning" type="submit" value="Edit">
                                    </form>
                                </td>
                                <td>
                                    <br>
                                    <button class="btn btn-danger remove">Delete</button>
                                </td>
<!--                                <td>-->
<!--                                    <form action="check_delete.php" method="post">-->
<!--                                        <input type="hidden" name="id" value="--><?//=$result["id"]?><!--"><br>-->
<!--                                        <input class="btn btn-warning" type="submit" value="Delete">-->
<!--                                    </form>-->
<!--                                </td>-->
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
                    <a class="btn btn-primary" href="login.php">Logout</a>
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
</div>

<?php include '../allscripts.html'?>

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
</body>

</html>
