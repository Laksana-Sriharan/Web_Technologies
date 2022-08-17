<html>
	<head>
		<title>Member Details</title>
	</head>
	<body>
		<h1>Member Details</h1>
		<?php
			include("connection.php");
			$sql = "SELECT * from member";
			$result = $con->query($sql);
		?>
		<table border = "1px solid black">
			<tr>
				<td>ID</td>
				<td>First name</td>
				<td>Last name</td>
				<td>Address</td>
				<td>Job Title</td>
				<td colspan ="2">Action</td>
			</tr>
			
		<?php while($row = $result-> fetch_row()){?>
			<tr>
				<td><?php echo $row[0]?></td>
				<td><?php echo $row[1]?></td>
				<td><?php echo $row[2]?></td>
				<td><?php echo $row[3]?></td>
				<td><?php echo $row[4]?></td>
				<td><a href="member.php?action=edit&amp;id=<?php echo $row[0];?>">edit</a></td>
				<td><a href="member.php?action=delete&amp;id=<?php echo $row[0];?>">delete</a></td>
			</tr>
		<?php } 
			$result-> free_result();
			$firstname = "";
			$lastname ="";
			$address = "";
			$job = "";
			$id="";
			$update = false;
			
			if(isset($_GET['action']) and $_GET['action']=="edit"){
				$id = $_GET['id'];
				$update = true;
				$sql = "SELECT * from member where id = $id";
				$result = $con->query($sql);
				if($result->num_rows==1){
					$n = $result-> fetch_assoc();
					$firstname = $n["firstname"];
					$lastname =$n["lastname"];
					$address = $n['address'];
					$job = $n['job'];
				}
			}
		?>
		
		</table>
		<h2>Add Members</h2>
		<form method = "post" action = "member_action.php">
			<input type="hidden" name="id" value="<?php $_GET['id']?>"/><br><br>
			First Name:<input type="text" name="fname" value="<?php echo $firstname?>"/><br><br>
			Last Name:<input type="text" name="lname" value = "<?php echo $lastname?>"/><br><br>
			Address:<input name ="address"  value ="<?php echo $address?>"> <br><br>
			Job Title:<input type="text" name="job" value ="<?php echo $job?>"/><br><br>
			<input type ="submit" name="submit" value = "<?php if($update== true){echo "update";} else echo "add";?>"/><br><br>
		</form>
	</body>
</html>