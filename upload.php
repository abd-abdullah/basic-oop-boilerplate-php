<?php
	spl_autoload_register(function($class){
		require_once "classes/".$class.".php";
	}); 

	$Query = new Essential_Query();


	if(isset($_POST["image"]) && isset($_POST["table"]) && isset($_POST["path"]) && isset($_POST["value"])){

		$data = $_POST["image"];
		$path = $_POST['path'];
		$table = $_POST['table'];
		$value = $_POST['value']; 

		echo $Query->Update_image($table, $data, $path , $value);
	}

?>