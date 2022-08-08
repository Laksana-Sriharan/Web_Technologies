
<?php
	//Query String
	
	//Method 1
	/*$firstName = "John Mike";
	$age = 24;$queryString = "firstName=$firstName&amp;age=$age";
	echo "<h1> Welcome </h1>";
	echo "<p> <a href ='moreinfo.php?".$queryString."'> Find out more info on this person </a></p>";*/
	
	//Method 2
	/*$firstName = "John";
	$homePage = "http://www.example.com/";
	$favouriteSport ="Ice Hockey";
	$queryString = "firstName=".urlencode($firstName)."&amp;homePage=".urlencode($homePage)."&amp;favouriteSport=".urlencode($favouriteSport);
	echo "<p> <a href ='moreinfo.php?".$queryString."'> Find out more info on this person </a></p>";*/
	
	//Method 3
	$fields = array("firstName"=> "John", "homePage" => "http://www.example.com/" , "favouriteSport"=> "Ice Hockey");
	echo http_build_query($fields)."<br>";
	echo htmlspecialchars(http_build_query($fields))."<br>";
	
	
	echo "<p><a href ='moreinfo.php?".htmlspecialchars(http_build_query($fields))."'> Find out more info on this person </a></p>";
?>

