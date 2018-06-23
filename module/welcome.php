<!DOCTYPE HTML>  
<html>  
<head>  
    <meta charset="utf-8">  
    <meta name="renderer" content="webkit|ie-comp|ie-stand">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />  
 
<script language="javascript" type="text/javascript">
	//接受跳转时传来的值
	var loc = location.href;
	var n1 = loc.length;//地址的总长度
	var n2 = loc.indexOf("=");//取得=号的位置
	var id = decodeURI(loc.substr(n2+1, n1-n2));//从=号后面的内容
	alert('第二页－本场比赛ID：'+id);
	document.write('第二页－本场比赛ID：'+id)
</script>
	
</head>  
<body>
<p style="color:blueviolet">hello world</p>
	
	<?php

if (isset($_POST['name'])){
	$name = $_POST['name'];	
	echo '网站名: ' . $name;
	echo "\n";
}	
	
if (isset($_POST['url'])){
	$url = $_POST['url'];
	echo 'URL 地址: ' .$url;
}

?>

	
<p></p>
<p></p>
<p></p>
</body>
</html>
