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

<html lang="cn">
<head>
<title>Home</title>
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- meta tags -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/gameinfo.js"></script>  <!-- 比赛信息处理 -->

<!-- stylesheet -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/lightbox.css">  
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

<script type="text/javascript" src="php/getDbPlayers.php">
/*此处取回players的值*/
</script> 
<script type="text/javascript" src="php/getDbGames.php">
/*此处取回games的值*/
</script> 

<script>
window.onload=function (){
//	alert('hello');
//	alert(window.screen.height);
	var x = window.screen.height;

	x = x-175;

	swiperHeight.style.height=x+"px";
}
</script>

</head>
<body>
	<div class="banner1">
		<div class="banner1-image">
            <div class="banner">
                <div class="container">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">首页</a></li>
                    <li><a href="#charge" data-toggle="tab">充值</a></li>
                    <li><a href="#rules" data-toggle="tab">规则</a></li>
                    <li><a href="#mall" data-toggle="tab">商城</a></li>
                    <li><a href="#note" data-toggle="tab">记录</a></li>
                    <li><a href="#msg" data-toggle="tab">消息</a></li>
                </ul>
                
                <div class="tab-content">
                	<!--主页内容开始-->
                    <div class="tab-pane fade in active" id="home">
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
                    </div>
                	<!--主页内容结束-->
                    
                	<!--充值页面开始-->                    
                    <div class="tab-pane fade" id="charge">
                        <p>请在此页面进行<font color="#00FF00">充值</font>。</p>
                    </div>
                	<!--充值页面结束-->

                	<!--规则页面开始-->                       
                    <div class="tab-pane fade" id="rules">
                    	<font size="1">
                            <font color="#00FFFF">1&nbsp;&nbsp;玩法说明</font><br>
                            木兰战纪竞猜的主要玩法有:猜胜平负、猜是否出现KO及相应的赔率玩法。后续版本中将增加更多玩法。<br><br>
                            
                            <font color="#00FFFF">2&nbsp;&nbsp;如何获取竟猜金币?</font><br>
                            金币由银两兑换得到,兑换后可参与竞猜,中奖金币将在派奖后的一天内进入账户。当用户金币不足时也可以通过签到、完成任务等方式,获取金币。<br><br>
                            
                            <font color="#00FFFF">3&nbsp;&nbsp;如何知道有没有中奖?</font><br>
                            在竞猜记录中可以查看历史竞猜记录及其中奖状态。<br><br>
                            
                            <font color="#00FFFF">4&nbsp;&nbsp;中奖奖金如何计算?</font><br>
                            赔率玩法的奖金由用户参与游戏时的赔率决定,若用户中奖,将按照相应的赔率派奖。非赔率玩法的奖金由中奖人次和奖池积分决定,即由中奖用户平分奖池金币的90%,剩余10%将作为活动基金。奖池金币以竞猜截止时奖池的金币为准。若中奖选项的支持率大于等于89.1%,将按照1.01的固定赔率派奖。<br><br>
                            
                            <font color="#00FFFF">5&nbsp;&nbsp;取消的竞猜如何算奖?</font><br>
                            若竞猜有赛果,根据赛果进行派奖;若无赛果或比赛提前,将退还用户金币。<br><br>
                        </font>
                    </div>
                	<!--规则页面开始-->

                	<!--商城页面开始-->
                    <div class="tab-pane fade" id="mall">
                        <p>请在此页面兑换<font color="#00FF00">商品</font>。</p>
                    </div>
                	<!--商城页面结束-->

                	<!--记录页面开始-->
                    <div class="tab-pane fade" id="note">
                        <p>请在此页面查看种奖<font color="#00FF00">记录</font>。</p>
                    </div>
                	<!--记录页面结束-->

                	<!--消息页面开始-->
                    <div class="tab-pane fade" id="msg">
                        <p>请在此页面查看系统<font color="#00FF00">消息</font>。</p>
                    </div>
                	<!--消息页面结束-->
                    

                	<!--消息页面开始-->
                    <div class="tab-pane fade" id="test">
                        <p>请在此页面test<font color="#00FF00">消息</font>。</p>
                    </div>
                	<!--消息页面结束-->                    
                </div><!--container-end-->
            </div><!--banner-end-->
        </div><!--banner1-image-end-->
	</div><!--banner1-end-->
    </div>




<!--swiper-begin-->
<script src="js/idangerous.swiper.min.js"></script>
<script src="js/swiper.js"></script> 



<script>
//赋初值
createTable1();
</script>
<!--swiper-end-->

   
    
	<!-- JavaScript --> 
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="plugins/modernizr.js"></script>
	<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>
	<script type="text/javascript" src="plugins/jquery.appear.js"></script>
	<!-- Custom Scripts -->
	<script type="text/javascript" src="js/custom.js"></script>    
    
	<!-- FlexSlider -->
	  <script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
		$(window).load(function () {
			$('#carousel').flexslider({
				animation: "slide",
				controlNav: false,
				animationLoop: true,
				slideshow: false,
				itemWidth: 102,
				itemMargin: 5,
				asNavFor: '#slider'
			});

			$('#slider').flexslider({
				animation: "slide",
				controlNav: false,
				animationLoop: true,
				slideshow: true,
				sync: "#carousel",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});

	  </script>
	<!-- //FlexSlider -->
	<!-- Owl-Carousel-JavaScript -->
		<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function () {
				$("#owl-demo, #owl-demo1, #owl-demo2, #owl-demo3, #owl-demo4").owlCarousel({
					autoPlay: 3000,
					items: 1,
					itemsDesktop: [1024, 1],
					itemsDesktopSmall: [414, 1]
				});
			});
		</script>

			<!-- //Owl-Carousel-JavaScript -->
			<script src="js/SmoothScroll.min.js"></script> 

			<!-- start-smooth-scrolling --> 
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	 
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up --> 

<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>