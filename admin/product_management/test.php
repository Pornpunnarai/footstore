<script type="text/javascript">
    function createCookie(name, value) {
        var date = new Date();
        date.setTime(date.getTime() + (10 * 1000));
        var expires = "; expires=" + date.toGMTString();
        document.cookie = name + "=" + value + expires + "; path=/";
    }
        //createCookie("test",50)
    if(getCookie("product_name")){
        console.log(getCookie("product_name"));
    }
    else {
        console.log("false");
    }
    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
</script>
<?php
session_start();
//echo $_COOKIE["product_name"];
var_dump($_SESSION["Check"]);
?>
