<?php
/*$Array = array("Cooking", "Drinking beer", "Listening to music");

$Array[] = "Cooking";
$Array[] = "Drinking beer";
$Array[] = "Listening to music"; 

$size = count($Array);
for ($i = 0; $i<$size; $i++)
{
	echo "<p>".$Array[$i]."</p>";
}

$Array[3] = "Reading books"; 

echo "<p>".$Array[3]."</p>";

unset($Array[3]);

echo "<pre>";
var_dump($Array);

*/


$UserInfo = array(
'name' =>'Hristo',
'username' =>'hbahnev'

);

//echo "<p> Name = ".$UserInfo['name']."</p>";
//echo "<p> Username = ".$UserInfo['username']."</p>";

foreach ($UserInfo as $key => $value)
{
	echo $key." = ".$value.'<br>';
}

?>