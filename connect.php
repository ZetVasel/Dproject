<?php

class DataBase{
	private $link;

	public function __construct() {
		$this->connect();
	}

	private function connect(){
		$config = require_once 'config.php';
		$dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'].'';
		$this->link = new PDO($dsn, $config['username'], $config['password']);
		return $this;
	}

	public function execute($sql){
		$sth = $this->link->prepare($sql);
		return $sth->execute();
	}

	public function query($sql){
		//$exe = $this->execute($sql);
		$sth = $this->link->prepare($sql);
		return $sth->execute();

		$result = $sth->fetch();

		if($result === false){
			return [];
		}

		return $result;
	}
}

$db = new DataBase();

$db->execute("INSERT INTO `users` SET `username`='Lol' `password`='777'");

$users = $db->query("SELECT * FROM `users`");

print_r($users);