<?php
	declare(strict_types=1);
	
	$providedAge = "10";  // comment out
	
	$age = $providedAge ?? 200;
	echo "\$age: $age<br>";
	
	// stacked
	$salaryOption1 = 10000; // comment out
	$salaryOption2 = 20000; 
	$salaryOption3 = 30000;
	$salary = $salaryOption1 ?? $salaryOption2 ?? $salaryOption3;
	echo "\$salary: $salary<br>";
	
?>