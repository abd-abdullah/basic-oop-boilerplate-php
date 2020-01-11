<?php
	spl_autoload_register(function($class){
		require_once "classes/".$class.".php";
	}); 

	$Query = new Essential_Query();


	if(isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["table"])){

		$email = $_POST["email"];
		$password = $_POST['password'];
		$table = $_POST['table'];

		if($Query->Check_password($table, $email, $password))
			echo true;
		else
			echo false;
	}

?>