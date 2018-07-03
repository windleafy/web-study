<?php
/*---充值---*/
//$ret=$_GET;
session_start();



if( isset($_SESSION['userName']) && isset($_POST['charge_item'])){
	//print ($_SESSION['userName']."<br>");
	$servername = "39.106.1.194";
	$username = "root";
	$password = "wdlinux.cn";
	$dbname = "ydfdbpdo";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$x = $_POST['charge_item'];//echo($x);
		switch($x){
			case 'item1'://echo 'php item1';
				$chargeNum = 1000;
				$stmt = $conn->prepare("SELECT userName, gold FROM user where userName='".$_SESSION['userName']."'");
				$stmt->execute();//
				$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
				foreach(($stmt->fetchAll()) as $k=>$v){
					$usergold = $v; 
				}
				//echo (json_encode($usergold));
				
				$chargeNum = $usergold['gold']+$chargeNum;
				$stmt = $conn->prepare("UPDATE user SET gold=".$chargeNum." WHERE userName='".$_SESSION['userName']."'"); //处理玩家充值
				$stmt->execute();//
				echo(1);
				break;
			case 'item2'://echo 'php item2';
				$chargeNum = 2000;
				$stmt = $conn->prepare("SELECT userName, gold FROM user where userName='".$_SESSION['userName']."'");
				$stmt->execute();//
				$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
				foreach(($stmt->fetchAll()) as $k=>$v){
					$usergold = $v; 
				}
				//echo (json_encode($usergold));
				
				$chargeNum = $usergold['gold']+$chargeNum;
				$stmt = $conn->prepare("UPDATE user SET gold=".$chargeNum." WHERE userName='".$_SESSION['userName']."'"); //处理玩家充值
				$stmt->execute();//
				echo(2);
				break;
			case 'item3'://echo 'php item3';
				$chargeNum = 3000;
				$stmt = $conn->prepare("SELECT userName, gold FROM user where userName='".$_SESSION['userName']."'");
				$stmt->execute();//
				$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
				foreach(($stmt->fetchAll()) as $k=>$v){
					$usergold = $v; 
				}
				//echo (json_encode($usergold));
				
				$chargeNum = $usergold['gold']+$chargeNum;
				$stmt = $conn->prepare("UPDATE user SET gold=".$chargeNum." WHERE userName='".$_SESSION['userName']."'"); //处理玩家充值
				$stmt->execute();//
				echo(3);
				break;
			case 'item4'://echo 'php item4';
				$chargeNum = 4000;
				$stmt = $conn->prepare("SELECT userName, gold FROM user where userName='".$_SESSION['userName']."'");
				$stmt->execute();//
				$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
				foreach(($stmt->fetchAll()) as $k=>$v){
					$usergold = $v; 
				}
				//echo (json_encode($usergold));
				
				$chargeNum = $usergold['gold']+$chargeNum;
				$stmt = $conn->prepare("UPDATE user SET gold=".$chargeNum." WHERE userName='".$_SESSION['userName']."'"); //处理玩家充值
				$stmt->execute();//
				echo(4);
				break;
			case 'item5'://echo 'php item5';
				$chargeNum = 5000;
				$stmt = $conn->prepare("SELECT userName, gold FROM user where userName='".$_SESSION['userName']."'");
				$stmt->execute();//
				$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
				foreach(($stmt->fetchAll()) as $k=>$v){
					$usergold = $v; 
				}
				//echo (json_encode($usergold));
				
				$chargeNum = $usergold['gold']+$chargeNum;
				$stmt = $conn->prepare("UPDATE user SET gold=".$chargeNum." WHERE userName='".$_SESSION['userName']."'"); //处理玩家充值
				$stmt->execute();//
				echo(5);
				break;
			case 'item6'://echo 'php item6';
				$chargeNum = 6000;
				$stmt = $conn->prepare("SELECT userName, gold FROM user where userName='".$_SESSION['userName']."'");
				$stmt->execute();//
				$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
				foreach(($stmt->fetchAll()) as $k=>$v){
					$usergold = $v; 
				}
				//echo (json_encode($usergold));
				
				$chargeNum = $usergold['gold']+$chargeNum;
				$stmt = $conn->prepare("UPDATE user SET gold=".$chargeNum." WHERE userName='".$_SESSION['userName']."'"); //处理玩家充值
				$stmt->execute();//
				echo(6);
				break;
		}



	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	
	$conn = null;	
}
else{
	header("location:../login.html");
}
?>

