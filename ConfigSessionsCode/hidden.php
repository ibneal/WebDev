<?php
	require_once("support.php");

	$bottomPart = "";
	if (isset($_POST["submitInfoButton"])) {
		$attempts = $_POST["attempts"] + 1;
		$nameValue = trim($_POST["name"]);
		$passwordValue = trim($_POST["password"]);
		
		if ($nameValue === "") 
			$bottomPart .= "<strong>Name Value Missing</strong><br />";
		if ($passwordValue === "" || ($passwordValue !== "terps"))
			$bottomPart .= "<strong>Error: Invalid Password Value Provided</strong><br />";
			$passwordValue = "";
		if ($bottomPart == "") {
			$bottomPart .= "<strong>Welcome to the our system $nameValue</strong><br />";
		}
		$bottomPart.= "<strong>Attempts: $attempts</strong>";
	} else {
		$nameValue = "";
		$passwordValue = "";
		$attempts = 0;
	}
	
	$topPart = <<<EOBODY
		<form action="{$_SERVER["PHP_SELF"]}" method="post">
			<strong>Name: </strong><input type="text" name="name" value="$nameValue" /><br><br>
			<strong>Password: </strong><input type="password" name="password" value="$passwordValue"/><br><br>
			<input type="submit" name="submitInfoButton" />
			<input type="hidden" name="attempts" value="$attempts" />
		</form>		
EOBODY;
	$body = $topPart.$bottomPart;
	
	$page = generatePage($body);
	echo $page;
?>