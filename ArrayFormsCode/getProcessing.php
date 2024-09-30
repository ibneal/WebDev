<!doctype html>
<html>
    <head> 
        <meta charset="utf-8" /> 
		<title>PHP Example</title>	
	</head>

	<body>
		<?php 
			$nameSubmitted = $_GET['name'];
			if ($nameSubmitted === "Mary")
				echo "<strong>Welcome Mary, my friend!!</strong>";
			else 
				echo "<strong>Welcome $nameSubmitted</strong>";
		?>		
   </body>
</html>