<?php
	declare(strict_types=1);	
	
	class InvalidValue extends Exception {
	}
	
	function test1(int $value) {
		echo "Testing exception<br>";
		if ($value < 100) {
			throw new InvalidValue("My389NErrorMessage");
		}
		echo "Correct value $value provided<br>";
	}
	
	$value = 10;  // try 10 and 200
	try {
		test1($value);
	} catch (Throwable $t) {
		// For PHP7
		echo "Error message(T) ".$t."<br>";
	} catch (Exception $e) {
		// For PHP5
		echo "Error message ".$e."<br>";
	}
?>