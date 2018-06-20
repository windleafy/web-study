<?php
/*---取出运动员清单---*/
//$ret=$_GET;

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ydfdbpdo";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, name, nation, nationIcon, playericon, age FROM player"); 
    $stmt->execute();
 
    // 设置结果集为关联数组
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

	//print_r($stmt);echo '</br>';
	foreach(($stmt->fetchAll()) as $k=>$v) { 
		//print_r($v);
		$ret[]=$v;
		//echo '</br>';
    }
	$ret=json_encode($ret);
	echo 'players = '.$ret;
	//print_r($ret);
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>

