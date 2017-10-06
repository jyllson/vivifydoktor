<?php

class BankAccount{
	public $balance;
	public $isBlocked;
}

class User{
	public $firstName;
	public $lastName;
	public $bankAccount;
	
	public function __construct($firstName, $lastName, $balance = 0, $isBlocked = false){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->bankAccount = new BankAccount();
		$this->bankAccount->balance = $balance;
		$this->bankAccount->isBlocked = $isBlocked;
	}
	
	public function print($object){
		echo "<br>First name: $this->firstName<br>";
		echo "Last name:  $this->lastName<br>";
		echo "Balance:    {$this->bankAccount->balance}<br>";
		echo "Blocked:    ";
		echo $blocked = $this->bankAccount->isBlocked===true?"Yes":"No" . "<br>";
	}
	
	public function deposit($amount){
		$this->bankAccount->balance += $amount;
		echo "Pera has deposited USD$amount <br>";
		$this->bankAccount->isBlocked = $this->bankAccount->balance>=0?false:true;
	}
	
	public function withdraw($amount){
		$this->bankAccount->balance -= $amount;
		echo "Pera has withdrawed USD$amount <br>";
		$this->bankAccount->isBlocked = $this->bankAccount->balance<200?true:false;
	}
}

$pera = new User("Petar", "Petrovic");

$pera->print($pera);

$pera->deposit(200);
$pera->print($pera);
$pera->withdraw(500);
$pera->print($pera);
$pera->deposit(300);
$pera->print($pera);