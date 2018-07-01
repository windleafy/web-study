<?php
/*---打印玩家下注清单---*/
//$ret=$_GET;
session_start();
//$_SESSION['userbet'] = '';
if(isset($_SESSION['userbet'])){
	$userbet = $_SESSION['userbet'];
	echo(json_encode($userbet));
}

else{//页面初始化时，无session_userbet信息
	if(isset($_SESSION['userName'])){
		$servername = "39.106.1.194";
		$username = "root";
		$password = "wdlinux.cn";
		$dbname = "ydfdbpdo";	
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
			$stmt = $conn->prepare("SELECT * FROM useraction where userName='".$_SESSION['userName']."'"."ORDER BY bettime DESC"); 
			$stmt->execute();
			$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
			foreach(($stmt->fetchAll()) as $k=>$v){
				$userbet[] = $v; 
			}
			
			//echo json_encode($_SESSION['userbet']);
			if(isset($userbet)){
				echo(json_encode($userbet));
				$_SESSION['userbet'] = $userbet;//竞猜过了，竞猜信息存入session，不再反复读数据库
			}
			else{$_SESSION['userbet']='';//还没有竞猜过，赋初值空存入session
				echo '';//返还record.php
			}	
		}
		catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
		$conn = null;
	}
	else {echo '';}//没有登录，测试用
}
?>

