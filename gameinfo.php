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

<html lang="cn">
<head>
<title>Home-gameinfo</title>
<!-- meta tags -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- meta tags -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>


<!-- stylesheet -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="css/idangerous.swiper.css">
<!-- flexslider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!-- //flexslider -->
<!-- Owl-Carousel-CSS --> <link rel="stylesheet" href="css/owl.carousel.css"   type="text/css" media="all">
<!-- //stylesheet -->
<!-- online fonts -->
<link href="http://fonts.lug.ustc.edu.cn/css?family=Skranji:400,700" rel="stylesheet">
<link href="http://fonts.lug.ustc.edu.cn/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
<link href="http://fonts.lug.ustc.edu.cn/css?family=Norican" rel="stylesheet">
<link href="http://fonts.lug.ustc.edu.cn/css?family=PT+Sans+Narrow:400,700" rel="stylesheet">
<!-- //online fonts -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" type="text/css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
	
<script type="text/javascript" src="js/gameinfo.js">/*-- 比赛信息处理 --*/</script>
<script type="text/javascript" src="php/getDbPlayers.php">/*此处取回players的值*/</script> 
<script type="text/javascript" src="php/getDbGames.php">/*此处取回games的值*/</script> 
	
<script>/*--窗口自适应处理--*/
window.onload=function (){
	//--屏幕高度自适应处理	alert('window.screen.height：'+window.screen.height);
	var x = window.screen.height;
	x = x-175;
	swiperHeight.style.height=x+"px";
}
</script>

</head>
<body style="background:transparent;">
<input id="tableId" type="hidden" value="0">
	<!--主页内容开始-->

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

<script>
	//赋初值
	createTable1();
	//console.log(games);
	//alert(document.getElementById('allBet').innerHTML);
</script>
<!--swiper-end-->

<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>