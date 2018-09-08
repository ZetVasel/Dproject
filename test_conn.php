<?php
//$con = mysqli_connect("localhost:8888","root", "root", "base_dw") or die ("can't connect");
//if($con){
//	echo "Successes";
//};
//mysqli_close($con);
//?>
<?php
try{
	$conn = new PDO("mysql:host=localhost:3306;dbname=baseDW","root", "");
//	if (empty($_POST['username'])) exit("Поле не заполнено (имя)");
//	if (empty($_POST['password'])) exit("Поле не заполнено (пороль)");
//        
//        print_r ($_POST);
//
//	$query = "INSERT INTO users VALUES( :username)";
//   
//	$login = $conn->prepare($query);
//    
//
//	$login->execute(['username' => $_POST['username']]);
//
//	
//
//	$query = "INSERT INTO users VALUES( :password )";
//	$login = $conn->prepare($query);
//
//	$login->execute(['password' => $_POST['password']]);
//
//	//header("Location: main.html");
   
//        $res = $conn->query("SELECT * FROM users");
//        print_r ($res);
//        
//        var_dump($res);
        
        $result = $conn->query("SELECT * FROM users");
        $s = $result->fetch();
      //  $s = array_column($s, 0);
        
        print_r($s);
        
	if($conn){
		echo "Successes";
	}

}
catch (PDOException $e){
echo "error" . $e->getMessage();
}

$conn = null;

?>