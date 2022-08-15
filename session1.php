<?php
    # PHP Session

    session_start();
    $user = array("firstname"=>"Raj", "age"=> 26, "gender"=>"Male");
    #echo serialize($user);
    $_SESSION['user'] = $user;
    #session_write_close();
?>
    <a href ="session1.php?action=rem">Remove a session </a>
<?php
    if(isset($_GET['action']) and $_GET['action']== "rem"){
        $_SESSION = array();
        #session_destroy();
        unset($_SESSION['user']);
    }

?>