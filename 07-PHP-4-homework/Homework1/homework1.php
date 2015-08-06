<?php
for($i=0;$i<10;$i++)
{
	$a = rand(1,50);
	$h = rand(1,50);
	$s = calculateTriangleArea($a,$h);
		if ($s<10)
			{
			echo "<div style='background-color:green'>Лицето на триъгълник със страна $a см. и височина $h см. e $s см.&sup2</div>";
			}
		else if ($s>=10 && $s<=23)
			{
			echo "<div style='background-color:red'>Лицето на триъгълник със страна $a см. и височина $h см. e $s см.&sup2</div>";
			}
		else
			{
			echo "<div style='background-color:blue'>Лицето на триъгълник със страна $a см. и височина $h см. e $s см.&sup2</div>";
			}
}
function calculateTriangleArea($a,$h)
{
	$s = ($a*$h)/2;
	return $s;
}









?>