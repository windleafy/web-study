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
<link href="css/style_mall.css" rel="stylesheet" type="text/css" media="all" />
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