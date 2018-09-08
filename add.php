<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'baseDW';

try
{
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
}
catch (PDOException $e)
{
	echo "Wrong" . $e->getMessage();
}

if(isset($_POST['login']))
{
	$name = trim($_POST['username']);
	$pas = trim($_POST['password']);

	$sql = ("INSERT INTO users(username, password) VALUES ('$name', '$pas')");
	$res = $conn->query($sql);
        
        header("Location: main.html");
	echo "Account Created";
        
	print_r($_POST);
}
?>