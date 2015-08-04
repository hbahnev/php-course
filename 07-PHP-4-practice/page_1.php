<?php

require_once('html_functions.php');
$default_header = 'Hristo';
printHeader();
echo "<br>";


printFooter();

$a = htmlLink('Google','https://www.google.com/');
 

echo $a;

echo "<br>";

$number = 12;
	$multiplier = 3;
	
	multiply($number,$multiplier);
	echo "$number <br>";
	multiply($number,$multiplier);
	echo "$number <br>";
	multiply($number,$multiplier);
	echo "$number <br>";
	multiply($number,$multiplier);
	echo "$number <br>";
	
	echo '<br>';
	echo "1st: ";
	asd();
	echo '<br>';
	echo "2nd: ";
	asd();
	echo '<br>';
	echo "3th: ";
	asd();
	echo '<br>';
	echo "4th:";
	asd();
	
?>