<?php 
	require_once "Person.php";

$p1 = new Person("George",23,"gonzo@abv.bg");
$p2 = new Person("Peter", 44, "peter@gmail.com");
$p3 = new Person("Rachel",33,"rachel1990@yahoo.com");
echo $p1->greet();
echo $p2->greet();
echo $p3->greet();


?>