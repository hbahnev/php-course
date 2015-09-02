<?php
require_once "Employee.php";
require_once "Policeman.php";
require_once "Doctor.php";

$doctor1 = new Doctor(8,160,"1000 euro",10,12);

$doctor1->workingStatus();
$doctor1->showShifts();

$policeman1 = new Policeman(10,20,"700 euro","sergeant");

$policeman1->workingStatus();
$policeman1->showRank();