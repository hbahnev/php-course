<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
</head>
<body>
<?php

$Arr = array(
	'Apple' => 'https://www.apple.com/',
	'Oracle' => 'https://www.oracle.com/',
	'HP' => 'https://www.hp.com/',
	'VMware' => 'https://www.vmware.com/',
	'Samsung' => 'https://www.samsung.com/'
			);
foreach ($Arr as $key => $value)
{
	echo"<ul>";
	echo"<li><a href=".$value.">".$key."</a></li>";
	echo"</ul>";
}

?>

</table>


</body>
</html>