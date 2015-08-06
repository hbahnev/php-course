<?php



function Parameter($i,$string)
{
	if (strlen($string)%2==0)
	{
		 $i+=12;
	}
	else
	{
		 $i-=3;
	}
	if($i>10)
	{
		$i-=22;
	}
	if($i<0)
	{
		$i+=14;
	}
	echo "The parameter is ".$i." and the word is ".$string.".<br>";
}
Parameter(1,'table');
Parameter(1,'location');
Parameter(1,'monkey');
Parameter(1,'chair');
Parameter(1,'window');
Parameter(1,'pencil');












?>