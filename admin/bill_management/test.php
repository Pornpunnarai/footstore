<html>
<head>
    <script>
        var num=1;
        function addrow(){

            for(var i = 0;i<5;i++){
            var table = document.getElementById("add");
            var row = table.insertRow(num);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);

            cell1.innerHTML = "NEW CELL"+num;
            cell2.innerHTML = "NEW CELL"+num;
            num++;
            }
        }
    </script>
    <title>Add new row with js</title>
</head>
<body>

<table id="add">
    <tr><td colspan="2">Content_1</td></tr>
    <tr><td>Content_End</td><td><button onclick="addrow()">+</button></td></tr>
</table>
</body>
</body>
</html>