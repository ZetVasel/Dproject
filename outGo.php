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

$result = $conn->prepare("SELECT `year_Amount_2210` FROM `Objects` ");
$result->execute();
if($result->rowCount() > 0){
    while($res = $result->fetch(PDO::FETCH_ASSOC)){
        echo '<p class = "year_Amount_2210">', $res['year_Amount_2210'] , '</p>';
            
    }
}

var_dump($res);

// Как это все вывести в таблицу ))

//if(isset($_POST['show']))
//{


//		$result = $conn->query("SELECT * FROM Objects");
//			$s = $result->fetch();
//  $s = array_column($s, 0);

//			print_r($s);
//	("Location: main.html");
//	echo "Numbers add";
//
//	print_r($_POST);
//}
?>