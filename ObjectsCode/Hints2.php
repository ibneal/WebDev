<?php
	declare(strict_types=1);
	
	function processData(Array $dataarray, int $target, $exampleTitle = "Example") {
		echo "$exampleTitle<br>";
		foreach ($dataarray as $elem) {
			if ($elem == $target) {
				echo "<strong>$elem</strong><br/>";
			} else {
				echo "$elem<br/>";
			}
		}
	}
	
	function differentTypes(bool $sign, float $salary, string $header) {
		$message = sprintf("%.2f", $salary);
		
		if ($sign) { 
			$message = "$$message";
		}
		echo "$header<br/>$message";
	}
	
	$data = array(10, 30, 50);
	processData($data, 30, "FirstExample");
	# Invalid processData(10, 30);
	# Invalid processData($data, "hello");
	differentTypes(true, 45785.58, "Yearly Salary");
	# Invalid differentTypes(true, "hello", "Yearly Salary");
?>