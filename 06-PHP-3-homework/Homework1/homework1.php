<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
</head>

<body>

<?php

$Arr = array('BMW','Mercedes','Audi','Maybach','Aston Martin','Ferrari');
$size = count($Arr);
for ($i = 0; $i<$size; $i++)
{
	echo "<p>Искам да купя ".$Arr[$i]."!</p>";
}
unset($Arr[$size-1]);

for ($i = 0; $i<$size-1; $i++)
{
	echo "<p>Ще си купя ".$Arr[$i]."!</p>";
}

?>

</body>

</html>