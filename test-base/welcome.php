<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<body>
<?php
	session_start();
	if( isset($_SESSION['userName']) ){
		print ($_SESSION['userName']."<br>");
	}
	else{
		header("location:login.php");
	}
?>
hello world
</body>
</html>
