<?php
	require_once("support.php");

	if (isset($_POST["submitInfoButton"])) {
		if (!file_exists($_POST["filename"])) {
			$body = "<strong>File {$_POST["filename"]} does not exist.</strong>";
		} else {
			$body = "<h1>Displaying file contents of file {$_POST["filename"]}</h1>";	
			$fp = fopen($_POST["filename"], "r") or die("Could not open file");
			while (!feof($fp)) {
				$line = fgets($fp);
				$body .= "$line<br />";		
			}
			fclose($fp);
		}	
	} else {
		$body = <<<EOBODY
			<form action="{$_SERVER['PHP_SELF']}" method="post">
				<strong>Filename: </strong><input type="text" name="filename" placeholder="myData.txt"/>
				<input type="submit" name="submitInfoButton" />
			</form>		
EOBODY;
	
	}
	
	$page = generatePage($body);
	echo $page;
?>