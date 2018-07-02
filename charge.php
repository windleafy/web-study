<!DOCTYPE html>
<?php
session_start();
	
	if( isset($_SESSION['userName']) ){
		//print ($_SESSION['userName']."<br>");
	}
	else{
		header("location:login.html");
	}
?>

<head>
<meta charset="utf-8">
<!-- stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
	.goldtip{
	margin:0 auto;
	background:rgba(14, 255, 0, 0.23);
	width:70px;
	height:20px;
	border-radius:5px;
	text-align: center;
	line-height: 200px;
	padding-bottom: 5px;
}
	.cgtb{
		width: 300px;
		height: 500px;
		border: 0px;
		text-align: center;
		margin: auto;
		border-collapse: separate;
		border-spacing: 2rem;
	}
	.cgtr{
		background: rgba(0, 38, 49, 0.65);
	}
	.cgtd{
		border-radius: 10px;
	}
	.cgfont{
		color: yellow;
	}
</style>
</head>
<body style="background:transparent;">

	<!--主页内容开始-->
<div id="charge">
	<table class="cgtb">
	  <tbody>
		<tr class="cgtr">
		  <td><img src="images/money1.png" class="cgtd"><p>1000金币</p><div class="goldtip"><p class="cgfont">￥9999</p></div></td>
		  <td><img src="images/money2.png" class="cgtd"><p>2000金币</p><div class="goldtip"><p class="cgfont">￥20</p></div></td> 
		</tr>
		<tr class="cgtr">
		  <td><img src="images/money3.png" class="cgtd"><p>3000金币</p><div class="goldtip"><p class="cgfont">￥30</p></div></td>
		  <td><img src="images/money4.png" class="cgtd"><p>4000金币</p><div class="goldtip"><p class="cgfont">￥40</p></div></td>
		</tr>
		<tr class="cgtr">
		  <td><img src="images/money6.png" class="cgtd"><p>5000金币</p><div class="goldtip"><p class="cgfont">￥50</p></div></td>
		  <td><img src="images/money6.png" class="cgtd"><p>6000金币</p><div class="goldtip"><p class="cgfont">￥60</p></div></td>
		</tr>
	  </tbody>
	</table>
</div>
	<!--主页内容结束-->
</body>
</html>