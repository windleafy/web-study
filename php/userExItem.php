<?php
/*---取出商城清单---*/
//$ret=$_GET;
session_start();
if( isset($_SESSION['userName']) ){
	//print ($_SESSION['userName']."<br>");
}
else{
	header("location:../login.html");
}

//$_POST['itemName']='iphone7';
if( isset($_POST['itemName']) ){
	//print ($_SESSION['userName']."<br>");

	//header("location:../login.html");



$itemName = $_POST['itemName'];
//$itemName = 'iphone7';
$userName = $_SESSION['userName'];

$servername = "39.106.1.194";
$username = "root";
$password = "wdlinux.cn";
$dbname = "ydfdbpdo";
try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//$stmt = $conn->prepare("SELECT id, name, nation, nationIcon, playerIcon, age FROM player"); 
	//$itemName = 'iphone7';//单页测试用条件
	$stmt = $conn->prepare("SELECT * FROM mall WHERE name='".$itemName."'"); //取出要兑换的物品
	$stmt->execute();

	// 设置结果集为关联数组
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

	foreach(($stmt->fetchAll()) as $k=>$v) { 
		$reItem = $v;
	}

	
	//$_SESSION['userName'] = 'admin';//单页测试用条件
	$stmt = $conn->prepare("SELECT userName, gold FROM user WHERE userName='".$_SESSION['userName']."'"); 
	$stmt->execute();//取出玩家现有金币

	// 设置结果集为关联数组
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
		foreach(($stmt->fetchAll()) as $k=>$v) { 
		$reUser = $v;
	}

	
	if ($reItem['price']<=$reUser['gold']){
		//扣钱
		$reUser['gold'] = $reUser['gold']-$reItem['price'];
		$stmt = $conn->prepare("UPDATE user set gold= ".$reUser['gold']." WHERE userName='".$_SESSION['userName']."'"); 
		$stmt->execute();

		//插入购买记录
		$userName = $_SESSION['userName'];
		$ex_id = $reItem['id'];
		$ex_name = $reItem['name'];
		date_default_timezone_set('PRC');
		$ext = date('Y-m-d H:i:s',time());
		$sql = "INSERT INTO userexchange (userName, ex_id, ex_name, ex_time)
		VALUES ('".$userName."', '".$ex_id."', '".$ex_name."', '".$ext."')";
		//--处理userexchange表--结束
		// 使用 exec() ，没有结果返回 
		$conn->exec($sql);
		//echo "新记录插入成功";		

		//返回购买成功信号
		echo('1');//购买成功
		
		//注：并未处理商城剩余道具
	}
	else{
		echo '0';//金币不够;
	}
	
	
	
	//print_r($ret);
}
catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}
$conn = null;
}
?>

