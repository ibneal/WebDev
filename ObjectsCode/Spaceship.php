<?php
	declare(strict_types=1);
	require("Student.php");
	
	function compare($header, $x, $y) {
		echo "<br>$header: ";
		echo $x <=> $y;
	}
	
	echo "<br>Spaceship Operator";
	compare("int", 10, 20);
	compare("int", 20, 10);
	compare("string", "Al", "Bob");
	compare("string", "Bob", "Al");
	compare("arrays", [], []);
	compare("arrays", [1, 2], [1, 3]);
	compare("arrays", [1, 3], [1, 2]);

	echo "<br><br>Sorting (sort)<br>";			
	$data = ["Al", "Carlos", "Bob"];
	sort($data);
	print_r($data);

	echo "<br>Sorting (usort, name)<br>";				
	$students = [new Student("Rose", "Bethesda", 3.0),
				 new Student("Peter", "Silver Spring", 4.0)];
	usort($students, function($x, $y) {
		return $x->getName() <=> $y->getName();
	});
	
	foreach ($students as $entry) {
		echo "$entry<br>";
	}
	
	echo "<br>Sorting (usort, gpa)<br>";				
	usort($students, function($x, $y) {
		return $x->getGpa() <=> $y->getGpa();
	});
	
	foreach ($students as $entry) {
		echo "$entry<br>";
	}
?>