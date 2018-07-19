<?php
header("Content-type: text/html; charset=utf-8");
date_default_timezone_set('PRC');
//处理warehouse表

$mem = new Memcache();
$mem->connect('localhost',11211);
$warehouse = $mem->get('warehouse');	//从memcached中读取warehouse数据
if(empty($warehouse)){	//memcached数据初始化
    $dsn = 'mysql:host=localhost;dbname=ydfdbpdo';
    $pdo = new PDO($dsn,'root','root');
    $sql = 'select * from warehouse;';
    $st = $pdo->prepare($sql);
    $st->execute();
    $warehouse = $st->fetchAll(PDO::FETCH_ASSOC);
    $mem->add('warehouse',$warehouse,false,0);	//将warehouse数据添加到memcached中并保存5秒
    //echo 'from mysql'.'<br/>';
	$pdo = null;
}else{
    //echo 'from cache'.'<br/>';
}

/*
*锁开始--warehouse数据库--保证并发不出错
*锁未处理完，try十次待处理
*/
$key = 'lock_warehouse';
$value = '1';
if($mem->add($key,$value)){
	foreach($warehouse as $k=>$v){
		//$v['dbtime']=$t;
		/*
		*锁内执行逻辑*逻辑结束后，删除锁*更新到数据库
		*/
		$stock = $warehouse[$k]['stock'];
		$warehouse[$k]['stock'] = $stock+1;	//此处如有数据变更，需要修订memcache数据的时间戳
		$t = date('Y-m-d H:i:s',time());	//
		$warehouse[$k]['dbtime'] = $t;		//时间戳在同步mysql时使用，见writeDb.php
	}
	$mem->set('warehouse',$warehouse,false,0);	//此处如有数据变量，需在锁内处理
	//sleep(5);
	$mem->delete($key);
}
else{
	//告诉用户请稍后
	echo '系统繁忙！';
}
/*
*锁结束
*/
	
print_r(json_encode($warehouse));		
//echo '<br>';
//$mem->flush();
//header("Location: writeDb.php");
?>
