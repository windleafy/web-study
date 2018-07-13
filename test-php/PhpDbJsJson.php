
<?php
$servername = "39.106.1.194";
$username = "root";
$password = "wdlinux.cn";
$dbname = "ydfdbpdo";
//数据库取值--开始--
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$stmt = $conn->prepare("SELECT id, gamename, gameclass, bettinggame FROM games where bettinggame = '1'"); 
	$stmt = $conn->prepare("SELECT * FROM games where bettinggame = '1'"); //取出当前竞猜中的比赛
    $stmt->execute();
 
    // 设置结果集为关联数组
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach($stmt->fetchAll() as $k=>$v) { 
		$reArr[] = $v;
    }
	$conn = null;
}
catch(PDOException $e) {
echo "Error: " . $e->getMessage();
}
$reArr = json_encode($reArr);
//echo 'str1 = '.$reArr;	//输出带有变量赋值，前台js可直接用变量的值
echo $reArr;	//输出不带变量赋值，前台js需要用JSON.parse()处理
//----------------取DB数组向js传值----------------结束*/
?>