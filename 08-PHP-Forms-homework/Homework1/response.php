<?php


$name = $_POST['name'];
$old_pass = $_POST['old_pass'];
$new_pass =$_POST['new_pass'];
$repeat_pass = $_POST['repeat_pass'];

function isValid($name,$old_pass,$new_pass,$repeat_pass)
{
	if($name == 'first-user' && $old_pass=='money' && $new_pass == $repeat_pass)
	{
		return true;
	}
	else
	{
		return false;
	}


}

if (isValid($name,$old_pass,$new_pass,$repeat_pass))
{
	echo "Успешна смяна!";
}
else
{
	echo "Грешка!";
}










?>