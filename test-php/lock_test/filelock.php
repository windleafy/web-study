<?php
header("Content-type: text/html; charset=utf-8");
$fp = fopen("lock.txt", "r");
if(flock($fp,LOCK_EX | LOCK_NB))
{
	//..处理订单
	echo "处理订单开始<br>";
	sleep(3);
	echo "处理订单结束";
	flock($fp,LOCK_UN);
}
else
{
	echo "系统繁忙，请稍后再试";
}
fclose($fp);
?>