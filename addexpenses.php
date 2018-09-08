
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

if(isset($_POST['exe']))
{
	$aex = trim($_POST['item_2210']);
        $aex2 = trim($_POST['item']);
        $aex3 = trim($_POST['serv_2240']);
        $aex4 = trim($_POST['serv']);
        $aex5 = trim($_POST['long_item_3310']);
        $aex6 = trim($_POST['long_item']);
        $aex7 = trim($_POST['hit_2271']);
        $aex8 = trim($_POST['hit']);
        $aex9 = trim($_POST['water_2272']);
        $aex10 = trim($_POST['water']);
        $aex11 = trim($_POST['elect_2273']);
        $aex12 = trim($_POST['elect']);
        
	$sql = ("INSERT INTO Expenses ("
                . "expens_2210,"
                . "item_name,"
                . "expens_2240,"
                . "services_name,"
                . "expens_3110,"
                . "long_item_name,"
                . "expens_2271,"
                . "hit,"
                . "expens_2272,"
                . "water,"
                . "expens_2273,"
                . "electricity)"
                . "VALUES ("
                . "'$aex','$aex2','$aex3','$aex4','$aex5','$aex6','$aex7','$aex8','$aex9','$aex10','$aex11','$aex12')");
        
	$res = $conn->query($sql);
        
        



	("Location: main.html");
	echo "Numbers add";

	print_r($_POST);
}
?>