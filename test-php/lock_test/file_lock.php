<?php
header("Content-type: text/html; charset=utf-8");

$fp = fopen('./lock.txt','r');
$try = 10;  //声明一个变量表示要获取的次数，防止死循环
do{
    $lock = flock($fp, LOCK_EX | LOCK_NB);
    if(!$lock)
        usleep(500); //如果没有获取到锁，释放CPU，休息5000毫秒
}
while(!$lock && --$try >=0 );

if($lock) {
	
	$servername = "localhost";
	$username = "root";
	$password = "root";

	// 创建连接
	try {
		$conn = new PDO("mysql:host=$servername;dbname=ydfdbpdo", $username, $password);
		echo "连接成功<br>"; 
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("SELECT stock FROM warehouse"); 
		$stmt->execute();
		// 设置结果集为关联数组
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 		

		foreach(($stmt->fetchAll()) as $k=>$v) { 
			//print_r($v);
			$ret[]=$v;
			//echo '</br>';
		}
		//$ret=json_encode($ret);
		//echo $ret[0]["stock"];
		
		$stock=$ret[0]["stock"];
		if( $stock < 1) {
			die('<br>库存不足');
		}
		else{
			$new_stock = $stock - 1;
			$x=1;
			$stmt = $conn->prepare('UPDATE warehouse SET stock = '.$new_stock. " WHERE id = ".$x);
			$stmt->execute();//减库存操作
		}
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}	
	//sleep(5);//方便并发测试参数
	flock($fp, LOCK_UN);
	fclose($fp);
}
else{ 
	die('系统繁忙！'); 
}

?>