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
	$servername = "39.106.1.194";
	$username = "root";
	$password = "wdlinux.cn";
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
		if (isset($_POST['betnum'])&&isset($_POST['bet'])){ 
			//echo 'betnum'.$_POST['betnum'];	echo 'bet'.$_POST['bet'];			
			$ret['gold']=$ret['gold']-ABS($_POST['betnum']);
			//echo $ret['gold'];
			if ($ret['gold']<0){echo 0;}//钱不够
			else{
				$stmt = $conn->prepare("UPDATE user SET gold=".$ret['gold']." WHERE userName='".$_SESSION['userName']."'"); //处理扣钱
				$stmt->execute();//待处理玩家下注数据
				
				//--处理useraction表--开始  
				date_default_timezone_set('PRC');
				$rgt = date('Y-m-d H:i:s',time());	//echo "<script>alert('".$rgt."');</script>";  
				//echo $rgt;
				$betnum = $_POST['betnum'];
				$userName = $_SESSION['userName'];
				$gameId = $_POST['gameId'];
				$bet = $_POST['bet'];
				$odds = 1.00;
				$playerL = $_POST['playerL'];
				$playerR = $_POST['playerR'];

				//处理gameId对应的odds--开始  
				//--games数据库查寻--
				//$stmt = $conn->prepare("SELECT id, name, nation, nationIcon, playerIcon, age FROM player"); 
				$stmt = $conn->prepare("SELECT id, odds1_1, odds1_2, odds2_1, odds2_2, allBet1, allBet2 FROM games"); 
				$stmt->execute();
				// 设置结果集为关联数组
				$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

				//print_r($stmt);echo '</br>';
				foreach(($stmt->fetchAll()) as $k=>$v) { 
					//print_r($v);
					if ( $v['id'] == $_POST['gameId'] ){
						$ret = $v;
					}
				}
				$allBet1 = $ret['allBet1']; 
				$allBet2 = $ret['allBet2'];

				switch ($_POST['bet']) 
				{ 
				case "0": $odds = $ret['odds1_2']; $allBet1 = $betnum+$ret['allBet1']; break; 
				case "1": $odds = $ret['odds1_1']; $allBet1 = $betnum+$ret['allBet1']; break;
				case "2": $odds = $ret['odds2_1']; $allBet2 = $betnum+$ret['allBet2']; break; 
				case "3": $odds = $ret['odds2_2']; $allBet2 = $betnum+$ret['allBet2']; 
				}
				//处理gameId对应的odds--结束

				$sql = "INSERT INTO useraction (userName, gameId, bet, odds, bettime, betnum, playerL, playerR)
				VALUES ('".$userName."', '".$gameId."', '".$bet."', '".$odds."', '".$rgt."', '".$betnum."', '".$playerL."', '".$playerR."')";
				//--处理useraction表--结束
				// 使用 exec() ，没有结果返回 
				$conn->exec($sql);
				//echo "新记录插入成功";
				echo 1;//下注成功
			

				//--处理指定比赛的总下注额--开始
				$stmt = $conn->prepare("UPDATE games SET allBet1=".$allBet1." WHERE id='".$ret['id']."'"); //处理加钱
				$stmt->execute();//
				$stmt = $conn->prepare("UPDATE games SET allBet2=".$allBet2." WHERE id='".$ret['id']."'"); //处理加钱
				$stmt->execute();//				
				//--处理指定比赛的总下注额--结束


				//用户下注后，刷新其下注清单--开始
				$stmt = $conn->prepare("SELECT * FROM useraction where userName='".$_SESSION['userName']."'"."ORDER BY bettime DESC"); 
				$stmt->execute();
				$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
				foreach(($stmt->fetchAll()) as $k=>$v){
					$userbet[] = $v; 
				}
				$_SESSION['userbet'] = $userbet;
				//用户下注后，刷新其下注清单--结束

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

