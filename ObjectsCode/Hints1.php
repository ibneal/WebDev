<?php
	# Notice declared has been disabled; by disabling it
	# it will allow the first four call to convert to boolean
	# (not the last one).  Enabled none of them will work
	# declare(strict_types=1);
	
	function passingData(bool $elem) {
		echo "Value: \"$elem\"<br/>";		
	}
	
	passingData("Hello");
	passingData(10);
	passingData(89.56);
	passingData(0);
	$data = array(10, 30, 50);
	passingData($data);
?>