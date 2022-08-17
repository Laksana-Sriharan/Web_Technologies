<?php

	$host = "localhost";
	$user = "root";
	$password = "";
	$dbname = "member_registration";
	
	$con = mysqli_connect($host, $user, $password, $dbname);
	if($con->connect_error){
		die("Connection Failed : ".$con->connect_error);
	}
?>