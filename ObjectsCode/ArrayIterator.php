<?php
	declare(strict_types=1);
	
	function createOrderedList($iterator, $header) : string {
		$result = "<h2>$header</h2>";
		$result .= "<ol>";
		
		while($iterator->valid()) {
			$entry = $iterator->current();
			$result .= "<li>".$entry."</li>";
			$iterator->next();
		}
		$result .= "</ol>";
		
		return $result;
	}
	
	$elements = Array("John", "Mary", "Peter");
	echo createOrderedList(new ArrayIterator($elements), "Example1");
	
	# Using append 
	$iterator = new ArrayIterator();
	$iterator->append("Robert");
	$iterator->append("Melissa");
	$iterator->append("Dora");
	
	echo "Second List<br>";
	echo createOrderedList($iterator, "Example1");
	
?>