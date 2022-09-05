<?php
	
	include_once("connection.php");
	
	
	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$district = $_POST['district']; 
		$address =  $_POST['address'];
		$mobno = $_POST['mobno'];
		$pwd = $_POST['pwd'];
		
		$sql = "INSERT into MOHSTAFF(id,name,firstname,lastname,district,address,mobilenumber,password) VALUES ('$id','$name','$fname','$lname','$district','$address','$mobno','$pwd')";
		if(mysqli_query($conn,$sql)){
			 echo "Succesfully added as a MOH STAFF !!";
		}
		else  echo "MOH Registration failed";
	
		mysqli_close($conn);
	}
?>