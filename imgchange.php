<html>
	<head>
		<title>Random Shape Game </title>
	</head>
	
	<body align = "center">
	
		<div style = "height:350px"><?php
			echo "<h1>Random Shape Game </h1>";
			$shapes = array("circle.jpg" ,"square.jpg" ,"star.jpg" ,"heart.jpg");
			
			if(isset($_GET["shape"])){
				echo "<img src =sqimg\\".$_GET['shape'].">";
			}
		?>
		</div>
		<p>
		<h2><a href = "imgchange.php?shape=<?php
			echo $shapes[array_rand($shapes,1)];?>">
			<?php if(isset($_GET['shape'])){echo "Change shape";}
				else echo "Create Shape";?></a></h2>
		</p>
	</body>
</html>