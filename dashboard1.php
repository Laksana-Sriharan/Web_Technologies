
<a href ="dashboard1.php?action=logout"><button style = "float:right" type = "button" name = "logout">Logout</button></a><br><br>
<?php
    echo $_COOKIE['username']."<br>";
    if(isset($_GET['action']) and $_GET['action']=="logout"){
        setcookie("username","",time()-365*24*3600,"","",false,true);
        header("location:form_in.php");
    }
?>
