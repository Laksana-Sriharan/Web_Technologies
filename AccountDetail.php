<?php

	class Account {
		private $customer;
		private $accountNo;
		private $balance;
		public static $annualInterestRate = 0.1;
		
		public function __construct($c,$no,$bal){
			$this->customer = $c;
			$this->accountNo = $no;
			$this->balance = $bal;
		}
		
		public function setInitialBalance($bal){
			$this->balance = $bal;
		}
		
		public function deposit($amount){
			$this->balance += $amount;
		}
		
		public function withdrawal($amount){
			$this->balance -= $amount;
		}
		
		public function getBalance(){
			return $this->balance;
		}
		
		public function setBalance($bal){
			$this->balance = $bal;
		}
		
		public function getdetails(){
			echo "Customer : $this->customer .<br> AccountNo:  $this->accountNo.<br> Balance: $this->balance.<br>";
		}
		
		public function calculateMonthlyInterest(){
			#To access constant or static variable use self::variable name
			$this->balance = $this->balance +($this->balance * self::$annualInterestRate)/12;
			
		}
		
		public static function modifyInterestRate($rate){
			self::$annualInterestRate = $rate;
		}
		
	}
	
	$a1 = new Account("John",001,1000);
	$a2 = new Account("Jenny",002,2000);
	echo print_r($a1)."<br>";
	
	print($a1->getDetails());
	echo "<br>";
	
	$a1->deposit(5000);
	print($a1->getBalance());
	echo "<br>";
	$a1->withdrawal(2000);
	print($a1->getBalance())."<br>";
	
	$a1->calculateMonthlyInterest();
	print($a1->getBalance())."<br>";
	
	$a1->modifyInterestRate(0.4);
	print($a1::$annualInterestRate);
	echo "<br>";
	print($a2::$annualInterestRate);
?>