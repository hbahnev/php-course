<?php

$user_name = $_POST['user_name'];
$user_name = trim($user_name);
$user_name = stripslashes($user_name);
$user_name = htmlspecialchars($user_name);

$pass = $_POST['pass'];
$pass = trim($pass);
$pass = stripslashes($pass);
$pass = htmlspecialchars($pass);


$repeat_pass = $_POST['repeat_pass'];
$repeat_pass = trim($repeat_pass);
$repeat_pass = stripslashes($repeat_pass);
$repeat_pass = htmlspecialchars($repeat_pass);


$question = $_POST['question'];
$question = trim($question);
$question = stripslashes($question);
$question = htmlspecialchars($question);


$answer = $_POST['answer'];
$answer = trim($answer);
$answer = stripslashes($answer);
$answer = htmlspecialchars($answer);


$mail = $_POST['mail'];
$mail = trim($mail);
$mail = stripslashes($mail);
$mail = htmlspecialchars($mail);


$first_name = $_POST['first_name'];
$first_name = trim($first_name);
$first_name = stripslashes($first_name);
$first_name = htmlspecialchars($first_name);


$last_name = $_POST['last_name'];
$last_name = trim($last_name);
$last_name = stripslashes($last_name);
$last_name = htmlspecialchars($last_name);

$birthdate = $_POST['birthdate'];


function Validation($user_name,$pass,$repeat_pass,$question,$answer,$mail,$first_name,$last_name,$birthdate)
{
	if ((!empty($user_name)) && (!empty($pass)) && (!empty($repeat_pass)) && (!empty($question)) && (!empty($answer)) && (!empty($mail)) && (!empty($first_name)) && (!empty($last_name)) && (!empty($birthdate)) && $pass == $repeat_pass)
	{
		return true;
	}
	else
	{
		return false;
	}
}

if(Validation($user_name,$pass,$repeat_pass,$question,$answer,$mail,$first_name,$last_name,$birthdate))
{
	
	echo "Успешна регистрация!";
}
else
{
	echo "Моля, попълнете всички данни коректно!";
}














?>