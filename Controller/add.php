<?php
//require_once 'db_connection.php';
//try{
//	$conn = new PDO("mysql:host=localhost;dbname=baseDW","root", "");
//	if (empty($_POST['username'])) exit("Поле не заполнено (имя)");
//	if (empty($_POST['password'])) exit("Поле не заполнено (пороль)");
//
//	$query = "INSERT INTO users ( :username)";
//	$login = $conn->prepare($query);
//
//	$login->execute(['username' => $_POST['username']]);
//
//	$id = $conn->lastInsertId();
//
//	$query = "INSERT INTO users ( :password )";
//	$login = $conn->prepare($query);
//
//	$login->execute(['password' => $_POST['password']]);
//
//	header("Location: /main.html");
//
//}
//catch (PDOException $e){
//	echo "error" . $e->getMessage();
//}
//
//$conn = null;
//


try{
	$conn = new PDO("mysql:host=127.0.0.1:3306;dbname=baseDW","root", "");
	if (empty($_POST['username'])) exit("Поле не заполнено (имя)");
	if (empty($_POST['password'])) exit("Поле не заполнено (пороль)");

	$query = "INSERT INTO users VALUES ( :username )";
	$login = $conn->prepare($query);

	$login->execute(['username' => $_POST['username']]);

	$query = "INSERT INTO users VALUES ( :password )";
	$login = $conn->prepare($query);

	$login->execute(['password' => $_POST['password']]);

	if($login){
		echo "lolol";
	}

	//header("Location: /main.html");

}
catch (PDOException $e){
	echo "error" . $e->getMessage();
}

$conn = null;



?>