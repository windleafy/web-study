<?php
header("Content-type: text/html; charset=utf-8");
date_default_timezone_set('PRC');

$mem = new Memcache();
$mem->connect('localhost',11211);
$warehouse = $mem->get('warehouse');//从memcached中读取warehouse数据
//print_r($warehouse);
//echo '<br>';

/*
*锁开始--warehouse数据库--保证并发不出错
*锁未处理完，try十次待处理
*/
$key = 'lock_warehouse';
$value = '1';
if($mem->add($key,$value)){

//写数据库操作
$dsn = 'mysql:host=localhost;dbname=ydfdbpdo';
$pdo = new PDO($dsn,'root','root');
$sql = 'select id, dbtime from warehouse;';
$st = $pdo->prepare($sql);
$st->execute();
$warehouse_db = $st->fetchAll(PDO::FETCH_ASSOC);
//print_r($warehouse_db);
foreach($warehouse_db as $k=>$v){
	if ($warehouse_db[$k]['dbtime']<$warehouse[$k]['dbtime']){
		echo '<br>hello';
		$t = $warehouse[$k]['dbtime'];echo('<br>time:'.$t);
		$id = $warehouse_db[$k]['id'];echo('<br>it:'.$id.'<br>');
		$stock = $warehouse[$k]['stock'];
		//$sql = 'update warehouse set dbtime="xxxx", stock="3" where id="1";';
		//$sql = 'update warehouse set dbtime="'.$t.'" where id="'.$id.'";';
		$sql = 'update warehouse set dbtime="'.$t.'", stock='.$stock.' where id="'.$id.'";';
		$st = $pdo->prepare($sql);
		$st->execute();			
	}
}
$mem->delete($key);
}
else{
	//告诉用户请稍后
	echo '系统繁忙！';
}

?>
