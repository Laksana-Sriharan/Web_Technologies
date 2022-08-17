<?php

	include("connection.php");
	
	if(isset($_POST['submit']) and $_POST['submit']== "add"){
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
	
	 if(isset($_POST['submit']) and $_POST['submit']=="update"){
		
		$id = $_POST['id'];
		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$address = $_POST['address'];
		$job = $_POST['job'];
		
		
		$sql = "UPDATE member set firstname = '$firstname',lastname ='$lastname',address='$address',job= '$job' where id = '$id' ";
		
		if($con-> query($sql)){
			header("location:member.php");
			
		}
		else
			echo "Connection Failed : ".$con->connect_error ;
	}
	

?>