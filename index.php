<!DOCTYPE html>
<html lang="cn">
<head>
<title>Home</title>
<!-- meta tags -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<!-- meta tags -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<!-- stylesheet -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/lightbox.css">  
<!-- flexslider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!-- //flexslider -->
<!-- Owl-Carousel-CSS --> 
<link rel="stylesheet" href="css/owl.carousel.css"   type="text/css" media="all">
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

</head>
<?php
session_start();
	
	if( isset($_SESSION['userName']) ){
		//print ($_SESSION['userName']."<br>");
	}
	else{
		header("location:login.html");
	}
?>
	
<body>
	<div class="banner1">
		<div class="banner1-image">
            <div class="banner">
                <div class="container">
                	<div class="tab-content">
                	<!--主页内容开始-->
                        <div class="w3_banner_info"  id="homepage1">
                            <div class="w3_banner_info_grid">
                                <h3 class="test">木兰战纪--释放生命中最荣耀的瞬间成为世界的王者</h3>
                                <h2 class="h2-title">Champion</h2>
                                <p>雄兔脚扑朔，雌兔眼迷离；<br>双兔傍地走，安能辨我是雄雌。</p>
                                <ul>
                                    <li><a href="home.php" class="w3ls_more hvr-shutter-in-vertical">开始竞猜</a></li>
                                    <li><a href="#" class="w3ls_more hvr-shutter-in-vertical">关于赛事</a></li>
                                </ul>
                            </div>
						</div>
                		<!--主页内容结束-->
					</div>
				</div>
			</div>
		</div>
	</div>



    
	<!-- JavaScript --> 
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="plugins/modernizr.js"></script>
	<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>
	<script type="text/javascript" src="plugins/jquery.appear.js"></script>
	<!-- Custom Scripts -->
	<script type="text/javascript" src="js/custom.js"></script>    

	<!-- text-effect -->
	<script type="text/javascript" src="js/jquery.textFx.js"></script> 
	<script type="text/javascript">
		$(document).ready(function() {
				$('.test').textFx({
					type: 'fadeIn',
					iChar: 100,
					iAnim: 1000
				});
		});
	</script>
	<script type="text/javascript" src="js/jquery.transit.js"></script> 
	<!-- //text-effect -->
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

</body>
</html>