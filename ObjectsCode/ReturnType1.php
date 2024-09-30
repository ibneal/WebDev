<?php
	declare(strict_types=1);
	
	function getInfo(string $name, int $age) : string {
		if ($age > 1) {
			return "Name: $name, Age: $age";
		} else {
			return NULL;
		}
	}

	#? string allows NULL to be return
	function getInfoNull(string $name, int $age) : ?string {
		if ($age > 1) {
			return "Name: $name, Age: $age";
		} else {
			return NULL;
		}
	}
	
	echo getInfo("Mary", 34)."<br/>";
	# Invalid echo getInfo("Mary", 0);
	
	$value = getInfoNULL("Mary", 0);
	if ($value == NULL) {
		echo "NULL value returned<br/>";
	} else {
		echo "$value<br/>";
	}
	
?>