<html>
	<head>
		<title>Thank You</title>
	</head>
	<body>
		<h1>Thank You</h1>
		<p>Thank you for registering. Here is the information you submitted. </p>
		<table border = 1; style = "border-collapse:collapse;">
			<tr><td>First Name :</td><td><?php echo $_POST['fname']?> </td></tr>
			<tr><td>Last Name :</td><td><?php echo $_POST['lname']?> </td></tr>
			<tr><td>Gender :</td><td><?php echo $_POST['gender']?> </td></tr>
			<tr><td>Following Course :</td><td><?php echo $_POST['course'] ?></td></tr>
		</table>
	</body>
</html>