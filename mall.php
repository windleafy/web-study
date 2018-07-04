<!DOCTYPE html>
<?php
/*session_start();
	
	if( isset($_SESSION['userName']) ){
		//print ($_SESSION['userName']."<br>");
	}
	else{
		header("location:login.html");
	}*/
?>

<head>
<meta charset="utf-8">
<!-- stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/idangerous.swiper.css">
<script src="https://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="php/getDbMall.php"></script>	
<script src="js/mallitem.js"></script>


<script>
$(document).ready(function(){
	$("td").click(function(){
	});
});
</script>		
	

<style>
	.goldbg{
	margin:0 auto;
	background:rgba(14, 255, 0, 0.23);
	width:70px;
	height:20px;
	border-radius:5px;
	text-align: center;
	line-height: 200px;
	padding-bottom: 5px;
}
	.mallItem{
		width: 40%;
		height: 154px;
		border: 0px;
		text-align: center;
		margin: 5%;
		float: left;
		background: rgba(0, 38, 49, 0.65);
	}

	.itemPrice{
		color: yellow;
	}
	.line{
		font-size:12px;
		margin-bottom: 0px;
	}
</style>
</head>
<body style="background:transparent;">
	<input id="tableId" type="hidden" value="3">
	<!--主页内容开始-->
	<div id="mall"></div>
		<div class="preloader"> Loading...</div>
		<div class="swiper-container" id="swiperHeight">
			<div class="swiper-wrapper">
				<div class="swiper-slide" id="table0">
				</div>
				<div class="swiper-slide" id="table1">
				</div>
				<div class="swiper-slide" id="table2">
				</div>                                                                
			</div>
		</div>
	<!--主页内容结束-->
<!--swiper-begin-->
<script src="js/idangerous.swiper.min.js"></script>
<script src="js/swiper.js"></script> 
<!--swiper-end-->
</body>
<script>
	createDiv();
	createTable3();
</script>

</html>