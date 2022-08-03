<html>
	<head>
		<title>multistep form2</title>
	</head>
	<body>
		<?php
		if ( isset( $_POST["step"]) ) {
			if($_POST["step"] == 1) {
				processStep1();
			} else if($_POST["step"] == 2){
				processStep2();
			}
		} else {
			displayStep1();
		}

			function processStep1() {
					displayStep2();
				}
			
			function processStep2() {
					if ( isset( $_POST["submitButton"] ) and $_POST["submitButton"] == "< Back" ) {
						displayStep1();
					} else {
						displayThanks();
					}
				}
			function setValue( $fieldName ) {
					if ( isset( $_POST[$fieldName] ) ) {
						echo $_POST[$fieldName];
					}
				}
				
		function displayStep1() {
					?>
					<h1>Member Signup: Step 1</h1>
					<form action="multistepform.php" method="post">
						<div style="width: 30em;">
							<input type="hidden" name="step" value="1" />
							<input type="hidden" name="photo" value="<?php setValue( "photo" ) ?>" />
							<label for="firstName">Name</label>
							<input type="text" name="name" value="<?php setValue( "name" ) ?>" />
							<br><br>
							
							<div style="clear: both;">
								<input type="submit" name="submitButton" value="Next &gt;" />
							</div>
						</div>
					</form>
					<?php
					}
					function displayStep2() {
					?>
						<h1>Member Signup: Step 2</h1>
						<form action="multistepform.php" method="post">
							<div style="width: 30em;">
								<input type="hidden" name="step" value="2" />
								<input type="hidden" name="name" value="<?php setValue( "name" ) ?>" />
								<label for="lastName">Upload Photo :</label>
								<input type="file" name="photo" value="<?php setValue( "photo" ) ?>" />
								<br><br>
								<div style="clear: both;">
									<input type="submit" name="submitButton" value="submit" />
									
								</div>
							</div>
						</form>
						<?php
						}
						function displayThanks() {
		?>
		 <h1>Thank You</h1>
		 <?php
					if(move_uploaded_file($_FILES['fileSelectedField']['tmp_name'], "C:\\xampp\htdocs\web\\fileupload\\".$_FILES['fileSelectedField']['name'])){
							echo "Your file was successfully uploaded !!";
						}
						else{
							echo "There was a problem in uploading your file-Please try again!";
						}
						?>
					 <?php echo "Name : ".$_POST["name"]; ?> <br><br>
					 <?php echo $_POST["photo"]; ?> <br><br>

		 <p>Thank you, your Full Name has been received.</p>
		<?php
		}
		?>
 </body>

</html>