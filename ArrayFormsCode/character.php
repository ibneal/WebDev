<?php
$name="cmsc198";
echo $name{2}."<br>";
$name{4} = "3";
$name{0} = "C";
$name{7} = "n"; // Going beyond the string length
echo $name;
$name[0] = 'p';
echo "<br>".$name;
?>