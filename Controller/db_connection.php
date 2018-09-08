<?php
class db_connection{


	function __construct() {

		try{
			$conn = new PDO("mysql:host=localhost;dbname=baseDW","root", "",
			array (PDO::ATTR_PERSISTENT => true));


		}
		catch (PDOException $e){
			echo "connection failed" . $e->getMessage();
		}
	}


}









//$server_name = "localhost";
//$username = "root";
//$password = "";
//$db_name = "baseDW";
//
//
//try{
//$conn = new PDO ("mysql:host=$server_name;dbname=$db_name", $username, $password);
////echo  "successfully";
//}
//catch(PDOException $e){
//echo "failed" . $e->getMessage();
//}
//
//
//
//
////$conn = null;
//?>