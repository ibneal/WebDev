<!doctype html>
<html>
    <head> 
        <meta charset="UTF-8" /> 
		<title>PHP Example</title>	
	</head>

	<body>
		<?php
			$name = "Bart Simpson";
	
			$information = <<<DATA
				<form action="heredoc.php" method="post">
				<p>
				<em>Character: </em><input type="text" name="charName" value="$name" />
				<input type="submit" name="submitB"/>
				</p>
				</form>
DATA;
			echo $information;
			if (isset($_POST['submitB'])) {
			    echo $_POST['charName'];
            }
    ?>
	</body>
</html>