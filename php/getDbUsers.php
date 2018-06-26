<?php
/*---取出玩家清单---*/
//$ret=$_GET;
session_start();

if( isset($_SESSION['userName']) ){
	//print ($_SESSION['userName']."<br>");
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "ydfdbpdo";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//$stmt = $conn->prepare("SELECT id, name, nation, nationIcon, playerIcon, age FROM player"); 
		$stmt = $conn->prepare("SELECT id, userName, gold FROM user"); 
		$stmt->execute();

		// 设置结果集为关联数组
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

		//print_r($stmt);echo '</br>';
		foreach(($stmt->fetchAll()) as $k=>$v) { 
			//print_r($v);
			if ( $v['userName'] == $_SESSION['userName'] ){
				$ret = $v;
			}
		}
		$ret=json_encode($ret);
		echo 'user = '.$ret;
		//print_r($ret);
		
		//--user数据库数值修改--开始
		if (isset($_POST['user_gold'])){
		$stmt = $conn->prepare("UPDATE user SET gold=".$_POST['user_gold']." WHERE userName='admin'"); 
		$stmt->execute();
		//--user数据库数值修改--结束
		}
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}

	
	
	$conn = null;	
}
else{
	header("location:login.html");
}




?>

