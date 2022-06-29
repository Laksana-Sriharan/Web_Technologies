<?php 
	$temp = array(1,5,3,4,6,9,10,7,8,2);
	
	function find_average($temp){
		$sum = 0 ;
		foreach($temp as $values){
			$sum = $sum + $values ;
		}
		$average = $sum/sizeof($temp);
		echo "The average is $average <br>";
	}
	
	function find_lowest($temp,$num){
		sort($temp);
		/*for($i = 0 ;$i<$num;$i++){
			echo $temp[$i]. ",";
		}*/
		print_r(array_slice($temp,0,$num));
		echo "<br>";
	}
	
	function find_highest($temp,$num){
		$n = sizeof($temp)-1;
		sort($temp);
		print_r(array_slice($temp,$n-$num,$n));
		echo "<br>";
	}
	
	find_average($temp);
	find_lowest($temp,3);
	find_highest($temp,3);
	
	//Pointers in PHP
	$arr = array(4,5,6,7,9);
	echo current($arr)."<br>" ;
	
	echo key($arr)."<br>" ;
	echo next($arr)."<br>" ;
	echo key($arr)."<br>" ;
	
	echo prev($arr)."<br>" ;
	echo key($arr)."<br>" ;
	
	echo end($arr)."<br>" ;
	
	echo current($arr)."<br>" ;
	reset($arr) ;
	echo current($arr)."<br>" ;
	$myBooks = array(array("title"=>"The Grapes of Wrath","author"=>"John Steinbeck","pubYear" => 1939),array("title"=>"The trial","author"=>"John Steinbeck","pubYear" =>1959));
	
	print_r($myBooks[0]);
	
	echo "Today is ".date("y/m/d")."<br>";
	echo "Today is ".date("y.m.d")."<br>";
	echo "Today is ".date("y-m-d")."<br>";
	echo "Today is ".date("I")."<br>";
	
	
?>