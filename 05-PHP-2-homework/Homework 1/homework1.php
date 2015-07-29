<html>
	<head>
		<meta charset="utf-8" />
		<style type="text/css">
		body
		{
			font-size:18px;
		}
		</style>
	</head>

	<body>
	<?php
		for ($i = 0;$i<=100;$i++)
		{
			
			if($i%2==0 && $i%7==0)
			{
				echo "<div style='background-color:blue'>$i bingo!</div>";
			}	
			else if($i%2==0 && !($i%7==0))
			{
				echo "<div style='background-color:blue'>$i</div>";
			}	
			else if($i%2==1 && $i%7==0)
			{
				echo "<div style='background-color:green'>$i bingo!</div>";
			}	
			else
			{
				echo "<div style='background-color:green'>$i</div>";
			}
		}	
	?>
	</body>
	
	

</html>