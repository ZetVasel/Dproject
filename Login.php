<?php


try{
	$conn = new PDO("mysql:host=localhost:8888;dbname=base_dw","root", "root");

	$my = $conn->query("SELECT username FROM users");

	print_r($my);
	$login_enter = "/^[a-zA-z0-9]+$/";

	if (preg_match($login_enter, $name)){
		echo "Login correct";
	}
	else{
		echo "Login incorrect";
	}


	if($conn){
		echo "Successes";
	}

}
catch (PDOException $e){
	echo "error" . $e->getMessage();
}