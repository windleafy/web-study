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
