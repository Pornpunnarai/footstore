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
    <?php include '../headpart.html'?>
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
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Add Product</div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-2">
                            ID:
                        </div>
                        <div class="col-md-10">
                            <?= $product_id;?></div>
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
                        </div>
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
    $(".add").click(function(){

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
                    alert("Record added successfully");
                }
            });

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
            'onUploadComplete' : function(file, data) { console.log(data); }
        });
    });


    function order() {
        $.get("order_product.php");
        return false;
    }

</script>


<!--uploadifive-->
<script src="uploadifive/jquery.min.js" type="text/javascript"></script>
<script src="uploadifive/jquery.uploadifive.min.js" type="text/javascript"></script>
<script src="uploadifive/jquery.uploadifive.js" type="text/javascript"></script>
<script type="text/javascript">

</script>






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
                                <li id="image_li_<?php echo $row['id']; ?>" class="ui-sortable-handle">
                                    <a href="javascript:void(0);" style="float:none;" class="image_link">
                                        <img style="width: 280px; height: 180px;" src="uploads/<?php echo $row['file_image']; ?>" alt="">
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
