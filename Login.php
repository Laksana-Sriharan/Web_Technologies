<?php
	if(isset($_POST['submit'])){
		$user = $_POST['uname'];
		$pwd = $_POST['pwd'];
		
		$conn = mysqli_connect("localhost","root","","User");
		
		if(!$conn){
			die("Connection Failed !!".mysqli_connect_error());
		}
		
		if($user == "admin" && $pwd = "admin123"){
			header("Location:Moh.html");
		}
	}
?>