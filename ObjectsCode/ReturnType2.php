<?php
	declare(strict_types=1);
	
	function productInt(float $x, float $y) : int {
		return (int)($x * $y);  # will not work without casting
	}
	
	function createArray($x, $y) : Array {
		return Array($x, $y);
	}
	
	function printHeader() : void {
		echo "<br/>Summer is coming<br/>";
		# Invalid, function is void return 10;
	}
	
	echo productInt(2.80, 4.0)."<br/>";
	print_r(createArray(4, 5));
	printHeader();
?>