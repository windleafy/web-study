
<?php
//----------------普通数组向js传值----------------开始
/*$action = array(
'name'=>'苹果', 
'nic'=>'果果', 
'contact'=>array(
	'email'=>'apple@163.com', 
	'website'=>'www.163.com'
	)
);
echo 'str = '.$action;*/
//----------------普通数组向js传值----------------结束

//*----------------取DB数组向js传值----------------开始
$servername = "localhost";
$username = "root";
$password = "root";
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
echo 'str1 = '.$reArr;
//----------------取DB数组向js传值----------------结束*/

	
?>
