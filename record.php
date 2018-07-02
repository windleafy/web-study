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
<link rel="stylesheet" href="css/idangerous.swiper.css">
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/gameinfo.js">/*-- 比赛信息处理 --*/</script>
<script type="text/javascript" src="php/getUserBet.php">/*此处取回games的值*/</script> 	
<script>/*--窗口自适应处理--*/
window.onload=function (){
	//--屏幕高度自适应处理	alert('window.screen.height：'+window.screen.height);
	var x = window.screen.height;
	x = x-175;
	swiperHeight.style.height=x+"px";
	//console.log('hello');
}
</script>
	
<script>
	$(document).ready(function(){
		$.post("php/getUserBet.php",{
			//record_userName:x,//查询此用户的下注清单
		},
		function(data,status){
			//alert('数据: '+data +"\n状态: " + status);
			//console.log(data);
			userbet = JSON.parse(data);
			//console.log(userbet);
			if((userbet) == ''){
				//$("#nodata").show();
				var x=document.getElementById("nodata");
				
				//console.log('wind2');
				var data='<p style="font-size:12px">你还没有过下注<font color="#00FF00">记录</font>，亲。</p>';
				x.innerHTML=data;
			}
			//console.log(userbet);
			else{createTable2();}//gameinfo.js*/
		})
	})
</script>
</head>
<body style="background:transparent;">

	<!--主页内容开始-->
	<div id="nodata"></div>
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
</html>