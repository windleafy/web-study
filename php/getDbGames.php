<?php
/*---取出当前竞猜中的比赛---*/
session_start();

$servername = "39.106.1.194";
$username = "root";
$password = "wdlinux.cn";
$dbname = "ydfdbpdo";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT * FROM games where bettinggame='1'"); 
    $stmt->execute();
 
    // 设置结果集为关联数组--否则各字段会重复一次
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

	//print_r($stmt);echo '</br>';
	foreach(($stmt->fetchAll()) as $k=>$v) { 
		//print_r($v);
		$gameAr[]=$v;
		//echo '</br>';
    }
	$gameAr = json_encode($gameAr);
		echo 'games = '.$gameAr;//games数据库取值在此处理
	}
	//print_r('<br><br>'.$gameAr);


catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>

