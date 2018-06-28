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
		if (isset($_POST['gameId'])&&($_POST['gameId']==$v['id'])){//找到玩家选择的比赛，存入slcGame
			$slcGame=$v;
		}
		
		//echo '</br>';
    }
	$gameAr = json_encode($gameAr);

	if(isset($_POST['gamedetail'])){//gamedetail.php页面在此处理
		echo json_encode($slcGame);
	}
	elseif(isset($_POST['record_userName'])){//record.php页面在此处理
		$stmt = $conn->prepare("SELECT * FROM useraction where userName='".$_POST['record_userName']."'"); 
		$stmt->execute();$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		foreach(($stmt->fetchAll()) as $k=>$v){
			$userbet[] = $v; 
		}
		echo(json_encode($userbet));		
	}
	else{
		echo 'games = '.$gameAr;
	}
	
	//print_r('<br><br>'.$gameAr);

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>

