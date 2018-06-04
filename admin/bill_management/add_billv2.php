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



$sql = "SELECT COUNT(activity_id) AS count_activity_id FROM bill WHERE activity_id = $activity_id";
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
    <title>Add Bill</title>
    <?php include '../headpart.html'?>
    <script>
        /*
        This script is identical to the above JavaScript function.
        */




        var num=1;
        function new_link()
        {
            for (var i = 0; i < 5; i++) {

                    var table = document.getElementById("add");
                    var row = table.insertRow(num);
                    var cell1 = row.insertCell(0);
                    var cell2 = row.insertCell(1);
                    var cell3 = row.insertCell(2);
                    var cell4 = row.insertCell(3);
                    var cell5 = row.insertCell(4);

                    cell1.innerHTML = num;
                    cell2.innerHTML = "<input type=\"input\" class=\"form-control\" placeholder=\"List name\" name=\"list[]\">";
                    cell3.innerHTML = "<input id=\"quantity"+num+"\" type=\"number\" placeholder=\"Quantity\" class=\"form-control\" name=\"quantity[]\" onblur=\"calculate\("+num+")\">\n";
                    cell4.innerHTML = "<input id=\"price"+num+"\" type=\"number\" placeholder=\"Price\" class=\"form-control\" name=\"price[]\" onblur=\"calculate\("+num+")\">\n";
                    cell5.innerHTML = "<p id=\"total_price"+num+"\"></p>";
                    num++;

            }
        }





    </script>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>
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
            <li class="breadcrumb-item active">Add Bill</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header" >
                <i class="fa fa-table"></i> Add Bill</div>
            <div class="card-body">
                <form action="check_add.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-2">
                            Project Name :
                        </div>
                        <div class="col-md-10">
                            <?= $result2["project_name"];?></div>
                    </div>
                    <br>


                    <input type="hidden" name="activity_id" value="<?=$activity_id?>">
                    <input type="hidden" name="project_id" value="<?=$project_id?>">
                    <div class="row">
                        <div class="col-md-2">
                            Activity Name :
                        </div>
                        <div class="col-md-10">
                            <?=$result3["activity_name"]?>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-2">
                            Bill Number :
                        </div>
                        <div class="col-md-10">
                            <?= $result["count_activity_id"]+1;?></div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-1">
                            Bill Name :
                        </div>
                        <div class="col-md-7">
                            <input type="input" class="form-control" placeholder="Bill Name" name="bill_name">
                        </div>

                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-1">
                            Company :
                        </div>
                        <div class="col-md-7">
                            <input type="input" class="form-control" placeholder="Company" name="company">
                        </div>

                    </div>
                    <br>


                    <div class="row">
                        <div class="col-md-1">
                            Date:
                        </div>
                        <div class="col-md-2">
                            <input type="date" class="form-control" name="date">
                        </div>
                        <div class="col-md-1">
                            I/V :
                        </div>
                        <div class="col-md-2">
                            <input type="input" class="form-control" placeholder="Invoice Number" name="invoice_id">
                        </div>

                    </div>
                    <br>
                    <br>


                    <div class="row">
                    <table style="width:100%" id="add">
                        <tr>
                            <th>No.</th>
                            <th>List Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total Price</th>
                        </tr>
                        <tr>
<!--                            <td><input type="input" class="form-control" name="list[]"></td>-->
<!--                            <td> <input id="quantity1" type="number" class="form-control" name="quantity[]" onblur="calculate(1)"></td>-->
<!--                            <td>  <input id="price1" type="number" class="form-control" name="price[]" onblur="calculate(1)"></td>-->
<!--                            <td style="text-align:center">  <p id="total_price1"></p></td>-->
                            <?php
                            echo '<script type="text/javascript">',
                            'javascript:new_link();',
                            '</script>'
                            ;
                            ?>
                        </tr>
                        <tr id="newlink" >
                        </tr>
                    </table>
                    </div>



                    <div class="row" id="addnew">
                        <div class="col-md-2">
                            <a href="javascript:new_link()">+ Add More Rows </a>
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
                        <div class="col-md-2">
                            <input class="btn btn-secondary" type="submit" value="Add">
                        </div>
                    </div>







            </div>
            </form>
        </div>
    </div>
</div>


<!--<div id="newlinktpl" style="display:none">-->
<!---->
<!--        <div class="col-md-1">-->
<!--            List :-->
<!--        </div>-->
<!--        <div class="col-md-2">-->
<!--            <input type="input" class="form-control" name="list[]">-->
<!--        </div>-->
<!--        <div class="col-md-1">-->
<!--            Quantity :-->
<!--        </div>-->
<!--        <div class="col-md-2">-->
<!--            <input type="number" class="form-control" name="quantity[]">-->
<!--        </div>-->
<!--        <div class="col-md-1">-->
<!--            Price :-->
<!--        </div>-->
<!--        <div class="col-md-2">-->
<!--            <input type="number" class="form-control" name="price[] onblur="calculate()">-->
<!--        </div>-->
<!--</div>-->

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
<script>
    calculate = function(x)
    {

        var id = x;
        var quantity = document.getElementById('quantity'+id).value;
        var price = document.getElementById('price'+id).value;
        var result = parseInt(quantity)*parseInt(price);



        if(price!=0&&quantity!=0){
            document.getElementById("total_price"+id).innerHTML = result;
        }else{
            result = null
            document.getElementById("total_price"+id).innerHTML = result;
        }
        // else if(price!=""||quantity!=""){
        //     result = null;
        //
        //    console.log(x);
        //     document.getElementById("total_price"+id).innerHTML = result;
        // }

    }

</script>
</body>
</html>

