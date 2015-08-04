<?php

	function printHeader($a = null) {
		global $default_header;
		
		if(!isset($a))
		{
			$a = $default_header;
		}
		echo $a;
	}
	function printFooter() {
		echo "I am footer";
			 
	}
	
	function htmlLink($title,$url){
		
		return "<div><a href = '$url'>$title</a></div>";
		
		
	}
	
	function multiply(&$number, $multiplier) {
		$number *= $multiplier;
	}
	function asd(){
		
	static $count = 1;
	$count *=2;
	
	echo "The value of count is:".$count;
	}
	
	
	
	
	
?>