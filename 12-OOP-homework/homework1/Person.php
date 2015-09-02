<?php

class Person
{

	private $name;
	private $age;
	private $mail;

	public function __construct($name, $age, $mail)
	{
		$this->name = $name;
		$this->age = $age;
		$this->mail = $mail;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		if (mb_strlen($name, 'UTF-8') > 3) {
			$this->name = $name;
		}
	}

	public function getAge()
	{
		return $this->age;
	}

	public function setAge($age)
	{
		if ($age < 200 && $age > 0) {
			$this->age = $age;
		}
	}

	public function getMail()
	{
		return $this->mail;
	}

	public function setMail($mail)
	{
		if (mb_strlen($mail, 'UTF-8') > 3) {
			$this->mail = $mail;
		}
	}

	function greet()
	{
		echo "<br /> Hi! My name is " . $this->name . "!";
		echo "I am " . $this->age . " years old.";
		echo "My e-mail address is " . $this->mail."<br/>";

	}
}


?>