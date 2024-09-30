<?php
	require_once("support.php");

	/* Having the form at the end allow us to retain provided values (e.g., name) */
	$bottomPart = "";
	if (isset($_POST["submitInfoButton"])) {
		$nameValue = trim($_POST["name"]);
		$passwordValue = trim($_POST["password"]);
		
		if ($nameValue === "") 
			$bottomPart .= "<strong>Name Value Missing</strong><br />";
		if ($passwordValue === "" || ($passwordValue !== "terps"))
			$bottomPart .= "<strong>Error: Invalid Password Value Provided</strong><br />";
		if ($bottomPart == "") {
			$bottomPart .= "<strong>Welcome to the our system $nameValue</strong>";
		}
	} else {
		$nameValue = "";
		$passwordValue = "";
	}
	
	$topPart = <<<EOBODY
		<form action="{$_SERVER["PHP_SELF"]}" method="post">
			<strong>Name: </strong><input type="text" name="name" value="$nameValue" /><br><br>
			<strong>Password: </strong><input type="password" name="password" value="$passwordValue"/><br>
			
			<!--We need the submit button-->
			<input type="submit" name="submitInfoButton" /><br>
		</form>		
EOBODY;
	$body = $topPart.$bottomPart;
	
	$page = generatePage($body);
	echo $page;
?>