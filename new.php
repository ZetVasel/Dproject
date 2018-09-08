<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'baseDW';

try{
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
}
catch (PDOException $e){
	echo "Wrong" . $e->getMessage();
}

//$sql = $conn->prepare('SELECT username FROM users');
//$sql->execute();
//print_r($sql->fetch());


//$sql = $conn->query("INSERT INTO users(`username`, `password`) VALUES ('lol', '435')");
//$sql->exec();
//print_r($sql->fetch());

//$lol = $conn->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);
//print_r($lol);



if(isset($_POST['login'])){
	$username = trim($_POST['name']);
	$password = trim($_POST['password']);

	$sql = $conn->query("INSERT INTO users(`username`, `password`) VALUES ('$username', '$password')");

	echo "Account Created";

}