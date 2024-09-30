<?php
	require_once("support.php");

	session_start();
	$body = "<h1>Information provided:</h1>";
	$body .= "<b>Professor:</b>{$_POST['name']}<br />";
	$body .= "<b>Course:</b>{$_POST['course']}<br />";
	$body .= "<b>Difficulty:</b>{$_POST['difficulty']}<br />";
	$body .= "<b>Opinion:</b><br />".nl2br($_POST['opinion'])."<br /><br />";

	/* Storing session information */
	$keys = array_keys($_POST);
	foreach ($keys as $key)
		$_SESSION[$key] = $_POST[$key];

	$sid = "PHPSESSID=".session_id();
	
    // To allow the script to run with cookies disabled we replaced
    // confirmation.php with confirmationGet.php?$sid below
	$body .= <<<EOFDATA
		<form action="confirmationGet.php?$sid" method="post">
			<input type="submit" value="Submit" />
		</form>
EOFDATA;

echo generatePage($body);
?>
