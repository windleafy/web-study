<?php
/*---取出当前竞猜中的比赛---*/

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ydfdbpdo";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM games where bettinggame='1'"); 
    $stmt->execute();
 
    // 设置结果集为关联数组
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

	//print_r($stmt);echo '</br>';
	foreach(($stmt->fetchAll()) as $k=>$v) { 
		//print_r($v);
		$gameAr[]=$v;
		if (isset($_POST['gameId'])&&($_POST['gameId']==$v['id'])){//找到玩家选择的比赛，存入slcGame
			$slcGame=$v;
		}
		//echo '</br>';
    }
	$gameAr=json_encode($gameAr);
	if(isset($_POST['gamedetail'])){
		echo json_encode($slcGame);
	}
	else {echo 'games = '.$gameAr;}
	
	//print_r($ret);
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>

