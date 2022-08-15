<?php
    #OOP Concepts in PHP

    class Person {
        private $name;
        private $age;
        private $gender;
		

        #Constructor in PHP
        public function __construct($n,$a,$g) {
             $this->name = $n;  # Use of this keyword
			 $this->age = $a;
			 $this->gender = $g;   
        }
		
		public function setName($n){
			$this->name = $n; 
		}
		
		public function getName(){
			return $this->name;
		}
		
    }
	
	# Object Creation in PHP 
	
	$p1 = new Person("Jeni",20,"female");
	$p2 = new Person("Raj",24,"male");
	
	echo print_r($p1)."<br>";
	echo print_r($p2)."<br>";
	
	#print($p1->name); #private member variable cannot be accessed outside the class
	
	print($p1->getName())."<br>";
?>