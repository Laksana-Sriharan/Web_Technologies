<html>
    <head>
        <title> Login </title>
    </head>
    <body align ="center">
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
                        setcookie("username", USERNAME ,time()+ 365*24*60*60, "","",false,true);
                        header("location: dashboard1.php");
                    }

                    else {
                        header("location: form_in.php");
                    }

                }
            ?>
        <div style = "border:3px solid blue; width:300px; padding:20px">
            <h1>Login Form </h1>
            <form action="" method="post">

                User Name : <input type ="text" name = "username"><br><br>
                Password : <input type ="password" name = "password"><br><br>
                &emsp;<input type ="submit" name = "login" value = "login">

            </form>
        </div>
    </body>
</html>
