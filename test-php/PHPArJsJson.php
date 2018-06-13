
<?php
$action=$_GET;
$action = array(
'name'=>'苹果', 
'nic'=>'果果', 
'contact'=>array(
	'email'=>'apple@163.com', 
	'website'=>'www.163.com'
	)
);
//print_r ($action);
$action = json_encode($action);
echo 'str = '.$action;
?>
