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
	if(isset($_POST['record_userName'])){//record.php页面在此处理
		$stmt = $conn->prepare("SELECT * FROM useraction where userName='".$_POST['record_userName']."'"."ORDER BY bettime DESC"); 
		
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		foreach(($stmt->fetchAll()) as $k=>$v){
			$userbet[] = $v; 
		}
		if(isset($userbet)){echo(json_encode($userbet));}
		else{echo '0';}//无下注信息时的处理
	}
	else{
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

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>

