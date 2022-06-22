<html>
	<head>
		<title>Server Side Languages</title>
	</head>
	<body>
		<?php
			echo "Hello World <br>";
			#This is a single Line Comment
			
			$my_variable = 7;
			echo "The value is $my_variable";
			
			echo "<h2> PHP is fun !! </h2> <br>";
			 
			$var1 = "Web";
			$var2 = "Technology";
			echo $var1." ".$var2."<br>";
			
			$var3 = 6;
			$var4 = 4;
			$var5 = $var3 + $var4;
			echo "The sum of $var3 and $var4 is $var5 <br>";
			
			print("I am the print statement<br>");
			print "I am the print statement<br>";
		?>
		
		<?php
			#Defining a constant
			define("my_constant",44);
			
			$x = "9";
			print gettype($x)."<br>";
			settype($x,"integer");
			echo gettype($x)."<br>";
			
			echo is_int($x)."<br>"; 
			
			$marks = 89;
			$result = "";
			
			#Conditional Statements
			($marks >50) ? $result = "Pass" : $result ="Fail";
			echo "$result.<br>" ;
			
			function sum($num = 8){
				return 5 + $num ;
			}
			
			echo sum(30)."<br>";
			echo sum(),"<br>";
			
			$title = "Mr";
			
			function printName() {
				$fname = "Roy";
				$lname = "John";
				global $title;  #Global variable declaration
				print "$title $fname $lname";
			}
			
			printName();
			echo "<br>";
			
			
			function add(){
				$y =5;
				static $sum =0;
				$sum = $sum +$y;
				return $sum;
			}
			
			echo add() , "<br>";
			echo add() , "<br>";
			echo add() , "<br>";
			
			function Display(){
				$evensum = 0; $oddsum =0;
				for($i=0;$i<=30;$i++){
					if($i%2 == 0){
						$evensum += $i; 
					}
					else
						$oddsum += $i;
				}
				echo "Sum of Even numbers is $evensum <br>";
				echo "Sum of Odd Numbers is $oddsum ";
			}
			
			Display();
		?>
	</body>
</html>