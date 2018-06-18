<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ydfdbpdo";	
	
try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	// 设置 PDO 错误模式为异常
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// 预处理 SQL 并绑定参数
	$stmt = $conn->prepare("INSERT INTO games (id, gamename, gamestarttime, gameclass, bettinggame, season, game, endTime, allBet, result, playerL, playerR, playWay, odds1, odds2) 
	VALUES (:id, :gamename, :gamestarttime, :gameclass, :bettinggame, :season, :game, :endTime, :allBet, :result, :playerL, :playerR, :playWay, :odds1, :odds2)");
	$stmt->bindParam(':gamename', $gamename);
	$stmt->bindParam(':gamestarttime', $gamestarttime);
	$stmt->bindParam(':gameclass', $gameclass);
	$stmt->bindParam(':season', $season);
	$stmt->bindParam(':game', $game);
	$stmt->bindParam(':endTime', $endTime);
	$stmt->bindParam(':playerL', $playerL);
	$stmt->bindParam(':playerR', $playerR);
	
	$stmt->bindParam(':id', $id);
	$stmt->bindParam(':bettinggame', $bettinggame);
	$stmt->bindParam(':allBet', $allBet);
	$stmt->bindParam(':result', $result);
	$stmt->bindParam(':playWay', $playWay);
	$stmt->bindParam(':odds1', $odds1);
	$stmt->bindParam(':odds2', $odds2);

	// 插入一条数据
	//$id = mt_rand(0,mt_getrandmax());
	$gamename = $_POST["gamename"];
	$gamestarttime = $_POST["gamestarttime"];
	$gameclass = $_POST["gameclass"];
	$game = '2';
	$season = '201802';	//md5加密处理
	$endTime = '2018-07-08 19:40:58';
	$playerL = '1';
	$playerL = '2';
	
	$id = '12';
	$bettinggame = 0;
	$allBet = '';
	$result = '';
	$playWay = '';
	$odds1 = '';
	$odds2 = '';
	
	$stmt->execute();

	$conn = null;
	echo "<script>alert('恭喜比赛添加成功');</script>";
	//header("Refresh:0.1;url=login.php");
	exit;
}

catch(PDOException $e)
{
	echo "Error: " . $e->getMessage();
}
$conn = null;
	
?>
</body>
</html>