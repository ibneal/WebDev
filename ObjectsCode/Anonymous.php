<?php
	declare(strict_types=1);
	require("Athlete.php");
	
	$anon1 = new class ("Bob", 3.7) {
	   public $name;
	   public $gpa;
	   
	   public function __construct($name, $gpa) {
	      $this->name = $name;
		  $this->gpa = $gpa;
	   }
	   
	   public function __toString() {
	      return "Name: $this->name, Gpa: $this->gpa";
	   }
    };
	
	
	$anon2 = new class ("Bob", 3.7) implements Athlete {
	   public $name;
	   public $gpa;
	   
	   public function __construct($name, $gpa) {
	      $this->name = $name;
		  $this->gpa = $gpa;
	   }
	   
	   public function __toString() {
	      return "Name: $this->name, Gpa: $this->gpa";
	   }
	   
	   public function getSport() {
		  return "Programming";
	   }
    };
	
	echo $anon2."<br>";
	echo "Sport: ".$anon2->getSport();
	
	
?>