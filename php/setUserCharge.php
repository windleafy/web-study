<?php
/*---充值---*/
//$ret=$_GET;
session_start();



if( isset($_SESSION['userName']) ){
	//print ($_SESSION['userName']."<br>");
	$servername = "39.106.1.194";
	$username = "root";
	$password = "wdlinux.cn";
	$dbname = "ydfdbpdo";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// 设置结果集为关联数组
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
		
		
		$stmt = $conn->prepare("UPDATE user SET gold=".$ret['gold']." WHERE userName='".$_SESSION['userName']."'"); //处理玩家充值
		$stmt->execute();//待处理玩家充值


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

