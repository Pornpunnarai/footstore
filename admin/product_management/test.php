<?php
session_start();
if(!isset($_SESSION["Admin"])) {
    header('Location: ../home.php');
}
include '../../connect-mysql.php';

$product_id = $_POST["product_id"];


//Modal
include_once("db.php");
$db = new database($serverName,$username,$password,$dbName);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Product</title>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/finedae/finedae-admin/js/jquery-ui.js"></script>

    <?php include '../headpart.html'?>

    <script type="text/javascript">
        $(document).ready(function(){
            document.getElementById("show_modal").click();
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

<body class="fixed-nav sticky-footer bg-dark" id="page-top">







        <div class="col-md-3" style="margin-top: 25px; margin-left: 10px;">
            <button href="#" id="show_modal" class="btn btn-primary js-show-modal1">
                Order
            </button>
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
                                $rows = $db->getRows($product_id);
                                foreach($rows as $row):?>
                                    <?php
                                    $mime = mime_content_type("uploads/$product_id/".$row['file_image']);
                                    if(strstr($mime, "video/")){
                                        ?>
                                        <li id="image_li_<?php echo $row['id']; ?>" class="ui-sortable-handle">
                                            <a href="javascript:void(0);"style="float:none;" class="image_link">
                                                <video controls style="width: 280px; height: 180px;"><source src="uploads/<?=$product_id?>/<?php echo $row['file_image']; ?>" type="video/mp4"></video>
                                            </a>
                                        </li>
                                        <?php
                                    }else if(strstr($mime, "image/")){
                                        ?>
                                        <li id="image_li_<?php echo $row['id']; ?>" class="ui-sortable-handle">
                                            <a href="javascript:void(0);" style="float:none;" class="image_link">
                                                <img style="width: 280px; height: 180px;" src="uploads/<?=$product_id?>/<?php echo $row['file_image']; ?>" alt="">
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
            'onUploadComplete' : function(file, data) {  location.replace("test.php?product_id=<?=$product_id?>"); }
        });
    });


    function order() {
        $.get("order_product.php");
        return false;
    }

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

<!--Modal-->
<!--===============================================================================================-->
<script src="/footstore/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/footstore/vendor/bootstrap/js/popper.js"></script>
<!--===============================================================================================-->
<script src="/footstore/js/main.js"></script>

<!--uploadifive-->
<script src="uploadifive/jquery.uploadifive.min.js" type="text/javascript"></script>
<script src="uploadifive/jquery.uploadifive.js" type="text/javascript"></script>

</body>

</html>
