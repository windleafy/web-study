<?php
/*---取出玩家清单---*/
//$ret=$_GET;
session_start();

//根据POST过来的参数，拆分功能模块，放置在不同的switch case中处理
/*$_POST['stat']="0"; 
switch ($favcolor) 
{ 
case "0": 
    echo ""; 
    break; 
case "1": 
    echo ""; 
    break; 
case "2": 
    echo ""; 
    break; 
default: 
    echo ""; */



if( isset($_SESSION['userName']) ){
	//print ($_SESSION['userName']."<br>");
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "ydfdbpdo";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		//--user数据库查寻--开始
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
		
		//echo $ret['gold'];
		if (isset($_POST['betnum'])){ 
			//echo $_POST['betnum'];
			$ret['gold']=$ret['gold']-ABS($_POST['betnum']);
			//echo $ret['gold'];
			if ($ret['gold']<0){echo 0;}//钱不够
			else{
				$stmt = $conn->prepare("UPDATE user SET gold=".$ret['gold']." WHERE userName='admin'"); 
				$stmt->execute();//待处理玩家下注数据
				echo 1;//下注成功
			}
		};

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

