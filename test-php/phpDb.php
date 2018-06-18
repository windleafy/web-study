<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>数据库取值测试</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ydfdbpdo";

//数据库取值--开始--
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$stmt = $conn->prepare("SELECT id, gamename, gameclass, bettinggame FROM games where bettinggame = '1'"); 
	$stmt = $conn->prepare("SELECT * FROM games where bettinggame = '1'"); 
    $stmt->execute();
 
    // 设置结果集为关联数组
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach($stmt->fetchAll() as $k=>$v) { 
        print_r ($v);
		$reArr[] = $v;
		echo '<br>';
    }
	echo '----取值结束----<br><br>';
	$conn = null;
}
catch(PDOException $e) {
echo "Error: " . $e->getMessage();
}
//数据库取值--结束--

//返回数组值校验--开始--
print_r(json_encode($reArr));
echo "<br><br>";
print_r($reArr[0]);
echo "<br><br>";
	
foreach($reArr as $k=>$v) { 
	print_r ($v);
	echo '<br>';
}
//返回数组值校验--结束--
	
?>
	
</body>
</html>