<?php
	$filename = basename("C/Users/Examuser/Documents/Example/Test.txt");
	echo $filename."<br>";
	
	$dir = basename("C/Users/Examuser/Documents/Example");
	echo $dir."<br>" ;
	
	$filenm = basename("C/Users/Examuser/Documents/Example/Test.txt",".txt");
	echo $filenm."<br>" ;
	
	// Open a file
	$myfile = fopen("Sample.txt","r") or die("Cannot open the file !!");
	//Read a file
	echo fread($myfile,filesize("Sample.txt"));
	fclose($myfile);
	
	//Over write a file
	$myfile = fopen("Sample.txt","w")or die("Cannot open the file !!");
	$text = "I am John Doe...\n";
	fwrite($myfile, $text);
	$text = "Jane Doe...\n";
	fwrite($myfile, $text);
	fclose($myfile);
	
	//append a file
	$myfile = fopen("Sample.txt","a")or die("Cannot open the file !!");
	$text = "I am from Jaffna\n";
	fwrite($myfile, $text);
	$text = "I like icecream\n";
	fwrite($myfile, $text);
	fclose($myfile);
	
	echo "<br>";
	
	$handle = fopen("hello_world.txt","r");
	$txt = "";
	while(!feof($handle)){
		$txt .= fread($handle,3);
		
	}
	echo $txt."<br>";
	fclose($handle);
	
	$handle = fopen("hello_world.txt","r");
	$lineNumber =1;
	while($line = fgets($handle)){
		echo $lineNumber++."$line";
	}
	fclose($handle);
	
?>
