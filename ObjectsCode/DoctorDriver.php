<?php
	declare(strict_types=1);
	
	#loading the class
	require("Health\People\Doctor.php");
	
	# accessing class in external namespace 
	use Health\People\Doctor;
	
	/**** Driver ****/
	$p1 = new Doctor("Dr.Complete", "Silver Spring");
	echo $p1;
?>