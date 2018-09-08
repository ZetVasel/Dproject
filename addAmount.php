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

if(isset($_POST['output']))
{
	$sum = trim($_POST['add_2210']);
        $sum2 = trim($_POST['add_2240']);
        $sum3 = trim($_POST['add_3110']);
        $sum4 = trim($_POST['add_2271']);
        $sum5 = trim($_POST['add_2272']);
        $sum6 = trim($_POST['add_2273']);
        
	$sql = ("INSERT INTO Objects ("
                . "year_Amount_2210,"
                . "year_Amount_2240,"
                . "year_Amount_3110,"
                . "year_Amount_2271,"
                . "year_Amount_2272,"
                . "year_Amount_2273)"
                . "VALUES ("
                . "'$sum','$sum2','$sum3','$sum4','$sum5','$sum6')");
        
	$res = $conn->query($sql);
        
        
//        
//	$sql2 = ("INSERT INTO Object2 (year_Amount_2240) VALUES ('$sum2')");
//	$res2 = $conn->query($sql2);
//        
//        
//        
//	$sql3 = ("INSERT INTO Object3 (year_Amount_3110) VALUES ('$sum3')");
//	$res3 = $conn->query($sql3);


	("Location: main.html");
	echo "Numbers add";

	print_r($_POST);
}
?>