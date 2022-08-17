<?php

	include("connection.php");
	
	if(isset($_POST['submit'])){
		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$address = $_POST['address'];
		$job = $_POST['job'];
		
		$sql = "INSERT into member(firstname,lastname,address,job) VALUES('$firstname', '$lastname' ,'$address', '$job')";
		
		if($con-> query($sql)){
			header("location:member.php");
		}
		else
			echo "Connection Failed : ".$con->connect_error ;
	}
	
	

?>