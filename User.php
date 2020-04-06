<?php

class User{
	public $name = "User Name";

	public function __construct()
	{
		echo "This is from constructor<br>";
	}

	public function __destruct()

	{
		echo "This is from destructor <br>";
	}

	public function greet()
	{

		echo "Welcome to OOP <br>";
	}
}

$admin = new User();

$admin->greet();



?>