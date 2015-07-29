<?php
		define ("COLS","4");
		define ("ROWS","5");
		echo "<table border='1px solid black' style='width:25%;'>";
		for ($r=1;$r<=ROWS;$r++)
		{
			echo "<tr></tr>";
			for ($c=1;$c<=COLS;$c++)
			{
				echo "<td>$r,$c</td>";
			}
		}
		echo "</table>";
		
		
		
		
?>
