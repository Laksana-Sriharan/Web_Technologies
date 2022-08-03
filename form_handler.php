<html>
	<head>
		<title>Form Handling in PHP</title>
	</head>
	<body>
		<form action = "form_handler.php" method ="post" enctype ="multipart/form-data">
			<label for ="fileSelectedField">A file selected field</label>
			<input type ="hidden" name = "MAX_FILE_SIZE" value = "10000"/>
			<input type = "file" name="fileSelectedField" id = "fileSelectedField" value = ""/><br><br>
			<input type = "submit" name = "submit" value ="submit"/>
		</form>
		<?php
			if(isset($_POST['submit'])){
				$filename = $_FILES['fileSelectedField']['name'];
				echo $filename ."<br>";
				echo $_FILES['fileSelectedField']['size']."<br>";
				echo $_FILES['fileSelectedField']['type']."<br>";
				echo $_FILES['fileSelectedField']['tmp_name']."<br>";
				
				if($_FILES['fileSelectedField']['size']>10000) die("File too big!");
				else echo "Uploaded File size is within the maximum limit.<br>";
				
				if(move_uploaded_file($_FILES['fileSelectedField']['tmp_name'], "C:\\xampp\htdocs\web\\fileupload\\".$_FILES['fileSelectedField']['name'])){
					echo "Your file was successfully uploaded !!";
				}
				else{
					echo "There was a problem in uploading your file-Please try again!";
				}
			
			
			}
		?>
	</body>
</html>