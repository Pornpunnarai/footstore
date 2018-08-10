<?php
session_start();
if(!isset($_SESSION["Admin"])) {
    header('Location: ../home.php');
}
include '../../connect-mysql.php';

$sql = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = '$dbName' AND TABLE_NAME = 'product'";
$objQuery = mysqli_query($objCon, $sql);
$result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
$product_id = $result["AUTO_INCREMENT"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Product</title>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/finedae/finedae-admin/js/jquery-ui.js"></script>
    <?php include '../headpart.html'?>

    <link href="../css/modal_order.css" rel="stylesheet">

    <style>
        .uploadifive-button {
            float: left;
            margin-right: 10px;
        }
        img {
            width: 30%;
        }
        #queue {
            width: 600px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="uploadifive/uploadifive.css">
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
            <li class="breadcrumb-item active">Add Product</li>
        </ol>

        <!-- Example DataTables Card-->
        <div class="card-body">
            <form method="post" action="order_product.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-2">
                        ID:
                    </div>
                    <div class="col-md-10">
                        <?=$product_id?></div>
                    <input type="hidden" class="form-control" name="product_id" value="<?=$product_id?>">
                </div>
                <br>

                <div class="row">
                    <div class="col-md-2">
                        Brand:
                    </div>
                    <div class="col-md-2">
                        <select id="brand_id" class="form-control">
                            <?php
                            $sql = "SELECT * FROM `brand`";
                            $objQuery = mysqli_query($objCon, $sql);

                            while ($result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) {
                                ?>
                                <option value="<?= $result["id"] ?>"><?= $result["name"] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-2">
                        Product Name:
                    </div>
                    <div class="col-md-7">
                        <input type="text" class="form-control" id="product_name">
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-2">
                        Type:
                    </div>
                    <div class="col-md-3">
                        <select id="product_type">
                            <option value="1st_hand">1st_Hand</option>
                            <option value="2nd_hand">2nd_Hand</option>
                        </select>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-2">
                        Price :
                    </div>
                    <div class="col-md-2">
                        <input type="number" class="form-control" id="product_price">
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-2">
                        Size :
                    </div>
                    <div class="col-md-1">

                        <input type='button' value='checkall' onclick="checkAll('size_chkbox')">
                        <br>
                        <input type='checkbox' name='size_chkbox' class ='size_chkbox' id='size_chkbox' value="4">4<br>
                        <input type='checkbox' name='size_chkbox' class ='size_chkbox' id='size_chkbox' value="4.5">4.5<br>
                        <input type='checkbox' name='size_chkbox' class ='size_chkbox' id='size_chkbox' value="5">5<br>
                        <input type='checkbox' name='size_chkbox' class ='size_chkbox' id='size_chkbox' value="5.5">5.5<br>
                    </div>
                    <div class="col-md-1">
                        <input type='button' value='uncheck' onclick="uncheckAll('size_chkbox')">
                        <br>
                        <input type='checkbox' name='size_chkbox' class ='size_chkbox' id='size_chkbox' value="6">6<br>
                        <input type='checkbox' name='size_chkbox' class ='size_chkbox' id='size_chkbox' value="6.5">6.5<br>
                        <input type='checkbox' name='size_chkbox' class ='size_chkbox' id='size_chkbox' value="7">7<br>
                        <input type='checkbox' name='size_chkbox' class ='size_chkbox' id='size_chkbox' value="7.5">7.5<br>

                    </div>
                    <div class="col-md-1">
                        <br>
                        <input type='checkbox' name='size_chkbox' class ='size_chkbox' id='size_chkbox' value="8">8<br>
                        <input type='checkbox' name='size_chkbox' class ='size_chkbox' id='size_chkbox' value="8.5">8.5<br>
                        <input type='checkbox' name='size_chkbox' class ='size_chkbox' id='size_chkbox' value="9">9<br>
                        <input type='checkbox' name='size_chkbox' class ='size_chkbox' id='size_chkbox' value="9.5">9.5<br>
                    </div>
                    <div class="col-md-1">
                        <br>
                        <input type='checkbox' name='size_chkbox' class ='size_chkbox' id='size_chkbox' value="10">10<br>
                        <input type='checkbox' name='size_chkbox' class ='size_chkbox' id='size_chkbox' value="10.5">10.5<br>
                        <input type='checkbox' name='size_chkbox' class ='size_chkbox' id='size_chkbox' value="11">11<br>
                        <input type='checkbox' name='size_chkbox' class ='size_chkbox' id='size_chkbox' value="11.5">11.5<br>
                    </div>
                    <div class="col-md-1">
                        <br>
                        <input type='checkbox' name='size_chkbox' class ='size_chkbox' id='size_chkbox' value="12">12<br>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-2">
                        Image Detail :
                    </div>
                    <div class="col-md-10">
                        <input id="file_upload" name="file_upload" type="file" accept="image/*" multiple="true">
                        <br><br><br>
                        <div id="queue"></div>
                        <!--        use to upload-->
                        <!--                            		<a style="position: relative; top: 8px;" href="javascript:$('#file_upload').uploadifive('upload')">Upload Files</a>-->
                    </div>

                </div>
                <br>

                <div class="row">
                    <div class="col-md-1">
                        <!--                            <a class="btn btn-success add" href="javascript:$('#file_upload').uploadifive('upload')">Upload Files</a>-->
                        <button class="btn btn-success add" >Upload Files</button>

                        <input id="submit" type="submit" value="Upload Files" style="display: none;">
                    </div>
                </div>
            </form>



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



</div>

<!-- Footer-->
<?php include '../footer-admin.php'?>

<!--checkbox-->
<script src="../js/upload_pic.js"></script>

<script type='text/javascript'>
    function checkAll(id)
    {
        elm=document.getElementsByTagName('input');
        for(i=0; i<elm.length ;i++){
            if(elm[i].id==id){
                elm[i].checked = true ;
            }
        }

    }

    function uncheckAll(id)
    {
        elm=document.getElementsByTagName('input');
        for(i=0; i<elm.length ;i++){
            if(elm[i].id==id){
                elm[i].checked = false ;
            }
        }
    }
</script>

<script type="text/javascript">
    $(".add").click(function(e){
    e.preventDefault()
        var brand_id = $('#brand_id').val();
        var product_name = $('#product_name').val();
        var product_type = $('#product_type').val();
        var product_price = $('#product_price').val();

        // 05/06/2018
        var size_chkbox = new Array();
        $("input:checkbox[name=size_chkbox]:checked").each(function(){
            size_chkbox.push($(this).val());
        });

        if(confirm('Are you sure to add this record ?'))
        {
            $.ajax({
                url: 'check_add.php',
                type: 'POST',
                data: {brand_id: brand_id,
                    product_name: product_name,
                    product_type: product_type,
                    product_price: product_price,
                    size_chkbox: size_chkbox,
                },
                error: function() {
                    alert('Something is wrong');
                },
                success: function(data) {
                    $('#file_upload').uploadifive('upload');
                }
            });
            alert("Record added successfully");

        }
    });

    <?php $timestamp = time();?>
    $(function() {
        $('#file_upload').uploadifive({
            'auto'             : false,
            'checkScript'      : 'uploadifive/check-exists.php',
            'formData'         : {
                'timestamp' : '<?php echo $timestamp;?>',
                'token'     : '<?php echo md5('unique_salt' . $timestamp);?>',
                'product_id'     : '<?=$product_id?>'
            },
            'queueID'          : 'queue',
            'uploadScript'     : 'uploadifive/uploadifive.php',
            'onUploadComplete' : function(file, data) { document.getElementById("submit").click(); }
        });
    });



</script>


<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->

<script src="../vendor/datatables/jquery.dataTables.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="../js/sb-admin.min.js"></script>
<!-- Custom scripts for this page-->
<script src="../js/sb-admin-datatables.min.js"></script>



<!--uploadifive-->
<script src="uploadifive/jquery.uploadifive.min.js" type="text/javascript"></script>
<script src="uploadifive/jquery.uploadifive.js" type="text/javascript"></script>

</body>

</html>
