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


<!-- stylesheet -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/lightbox.css">  
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

<script>
$(document).ready(function(){
	$("li").click(function(){
    //console.log(this.id);
		if(this.id!='5'){//点击非“记录”页，为“记录”页赋初值空，避免闪烁
			//console.log('tab'+this.id);  
			document.getElementById("record").src='';
		}
		if(this.id!='4'){//点击非“商城”页，为“商城”页赋初值空，避免闪烁
			document.getElementById("mall").src='';
		}		
	});
});
</script>	
	
	
<script type="text/javascript">
function refreshRecord(){console.log('hello');
    //document.getElementById('record').contentWindow.location.reload(true);
	var randnum=Math.floor(Math.random()*100000);
	document.getElementById("record").src = "record.php?new="+randnum; //保证每次进入页面时刷新
	//console.log('wind1');
	//console.log("record.php?new="+randnum); 

};

function refreshMall(){console.log('hello1');
	var randnum=Math.floor(Math.random()*100000);
	document.getElementById("mall").src = "mall.php?new="+randnum; //保证每次进入页面时刷新
}
//-->
</script>	
	
</head>
<body>
	<div class="banner1">
		<div class="banner1-image">
            <div class="banner">
                <div class="container">
                <ul class="nav nav-tabs">
                    <li id="1" class="active"><a href="#home" data-toggle="tab" style="padding-left: 7px;padding-right: 7px">首页</a></li>
                    <li id="2"><a href="#charge" data-toggle="tab" style="padding-left: 7px;padding-right: 7px">充值</a></li>
                    <li id="3"><a href="#rules" data-toggle="tab" style="padding-left: 7px;padding-right: 7px">规则</a></li>
                    <li id="4"><a href="#shopmall" data-toggle="tab" style="padding-left: 7px;padding-right: 7px" onClick="refreshMall();">商城</a></li>
                    <li id="5"><a href="#note" data-toggle="tab" style="padding-left: 7px;padding-right: 7px" onClick="refreshRecord();">记录</a></li>
                    <li id="6"><a href="#msg" data-toggle="tab" style="padding-left: 7px;padding-right: 7px">消息</a></li>
                </ul>
                
                <div class="tab-content">
                	<!--主页内容开始-->
                    <div class="tab-pane fade in active" id="home">
						<iframe src="gameinfo.php" width="100%" height="450px" frameborder="0" aallowtransparency="true" scrolling="no"></iframe>
						<!--<iframe src="/mytest/web-study-git/module/module-gamedetail.php" width="100%" height="470px" frameborder="0" aallowtransparency="true" scrolling="no"></iframe>-->						
                    </div>
                	<!--主页内容结束-->
                    
                	<!--充值页面开始-->                    
                    <div class="tab-pane fade" id="charge">
						<iframe src="charge.php" width="100%" height="450px" frameborder="0" aallowtransparency="true" scrolling="no"></iframe>						
						
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
                    <div class="tab-pane fade" id="shopmall">
						<iframe id="mall" src="" width="100%" height="450px" frameborder="0" aallowtransparency="true" scrolling="no"></iframe>							
                    </div>
                	<!--商城页面结束-->

                	<!--记录页面开始-->
                    <div class="tab-pane" id="note">
                        
						<iframe id="record" src="" width="100%" height="450px" frameborder="0" aallowtransparency="true" scrolling="no"></iframe>						
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
    
	<!-- JavaScript --> 
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

<!--<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

</body>
</html>