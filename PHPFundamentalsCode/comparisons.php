<!doctype html>
<html>
    <head> 
        <meta charset="utf-8" /> 
		<title>PHP Example</title>	
	</head>

	<body>
		<?php
			echo "<p>";
			$v1Int = 10;
			$v2Int = 20;
			$v1Str = "10";
			$name = "Maryland";

			echo "\$v1Int: $v1Int";  // notice the escape sequence
			echo "<hr />";
			echo "\$v2Int: $v2Int";  // notice the escape sequence
			echo "<hr />";

			echo "\$v1Int < \$v2Int: ";
			echo $v1Int < $v2Int;
			echo "<hr />";

			echo "\$v1Int > \$v2Int: ";
			echo $v1Int > $v2Int;
			echo "<hr />";

			echo "\$v1Int != \$v2Int: ";
			echo $v1Int != $v2Int;
			echo "<hr />";

			echo "\$v1Int = = \$v1Str: ";
			echo $v1Int == $v1Str;
			echo "<hr />";

			echo "\$v1Int = = =\$v1Str: ";
			echo $v1Int === $v1Str;
			echo "<hr />";

			echo "\$name equals Maryland: ";
			echo $name == "Maryland";
			echo "<hr />";
			echo "<p>";
		?>
   </body>
</html>