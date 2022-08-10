<?php

    define("USERNAME","admin");
    define("PASSWORD","admin123");

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if(empty($username) or empty($password)){
            echo "username or password is empty!!";
        }

        else if($username == USERNAME and $password == PASSWORD){
            echo "Welcome ".$username;
        }

        else {
            header("location: index.php");
        }

    }
?>