<!DOCTYPE HTML>  
<html>  
<head>  
    <meta charset="utf-8">  
    <meta name="renderer" content="webkit|ie-comp|ie-stand">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />  
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />  
    <title>nav</title>  
    <meta name="keywords" content="关键词,5个左右,单个8汉字以内">  
    <meta name="description" content="网站描述，字数尽量空制在80个汉字，160个字符以内！">  
  
    <link rel="stylesheet" href="/mytest/web-study-git/test-base/iframe/css/style.css">  
    <link rel="stylesheet" href="/mytest/web-study-git/test-base/iframe/css/bootstrap.css">  
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script src="/mytest/web-study-git/test-base/iframe/js/bootstrap.js"></script>  
    <style>  
        body{  
  
        }  
    </style>  
  
  
  
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
