<!doctype html>
<html>
    <head> 
        <meta charset="utf-8" /> 
		<title>PHP Example</title>
		<link rel="stylesheet" href="cascadeStyle.css" type="text/css" />
	</head>

	<body>
    <div class="topnav">
      <a class="active" href="../">Home</a>
      <a href="#news">News</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a>
    </div>
		<?php
			echo '<h class="gradeOut">';
			for($i=0 ; $i<10 ; $i++)
			{
			print ("The value is: ".$i);
			echo '<br>';
			}
            $letterGrade = 5;
			print("Letter Grade is: $letterGrade");
			echo '</h>';
		?>
   </body>
</html>