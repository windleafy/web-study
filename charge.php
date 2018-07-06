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
<link href="css/style_charge.css" rel="stylesheet" type="text/css" media="all" />	
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/idangerous.swiper.css">
<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
	var cgitem;
	$("item").click(function(){
		cgitem = this.id//thisid == itemx
		//console.log(x.substring(4));
		var x = cgitem.substring(4);//取第5位x的值
		cgval = document.getElementById("cgval"+x).innerHTML;
		getval = document.getElementById("getval"+x).innerHTML;
		document.getElementById("cgval").innerHTML= cgval;
		document.getElementById("getval").innerHTML= getval;
	});

	$("#cg_cfm").click(function(){//console.log('hello');
		$("#myModal").modal('hide');
		$.post("php/setUserCharge.php",{//调用充值接口
			charge_item:cgitem,
		},
		function(data,status){
			console.log(data);//alert('获得金币'+getval);
			switch(parseInt(data)){
				case 1 : alert('获得金币'+getval);break;
				case 2 : alert('获得金币'+getval);break;
				case 3 : alert('获得金币'+getval);break;
				case 4 : alert('获得金币'+getval);break;
				case 5 : alert('获得金币'+getval);break;
				case 6 : alert('获得金币'+getval);break;
			}
		})
	});
	
});
</script>		

</head>
<body style="background:transparent;">

	<!--主页内容开始-->
<div id="charge">
		<div class="preloader"> Loading...</div>
		<div class="swiper-container" id="swiperHeight">
			<div class="swiper-wrapper" id="swiper-mall">
				<div class="swiper-slide swiperitem" id="table0">
					<item class="pull-left cgtr" id="item1" data-toggle="modal" data-target="#myModal">
						<img src="images/money1.png" class="cgtd">
						<p><span id="getval1">1000</span>金币</p>
						<div class="goldtip"><p class="cgfont">￥<span id="cgval1">10</span></p></div>
					</item>
					<item class="pull-left cgtr" id="item2" data-toggle="modal" data-target="#myModal">
						<img src="images/money2.png" class="cgtd">
						<p><span id="getval2">2000</span>金币</p>
						<div class="goldtip"><p class="cgfont">￥<span id="cgval2">20</p></div>
					</itme>					
					
				</div>
				<div class="swiper-slide swiperitem" id="table1">
					<item class="pull-left cgtr" id="item3" data-toggle="modal" data-target="#myModal">
						<img src="images/money3.png" class="cgtd">
						<p><span id="getval3">3000</span>金币</p>
						<div class="goldtip"><p class="cgfont">￥<span id="cgval3">30</p></div>
					</item>
					<item class="pull-left cgtr" id="item4" data-toggle="modal" data-target="#myModal">
						<img src="images/money4.png" class="cgtd">
						<p><span id="getval4">4000</span>金币</p>
						<div class="goldtip"><p class="cgfont">￥<span id="cgval4">40</p></div>
					</item>					
					
				</div>
				<div class="swiper-slide swiperitem" id="table2">
					<item class="pull-left cgtr" id="item5" data-toggle="modal" data-target="#myModal">
						<img src="images/money6.png" class="cgtd">
						<p><span id="getval5">5000</span>金币</p>
						<div class="goldtip"><p class="cgfont">￥<span id="cgval5">50</p></div>
					</item>
					<item class="pull-left cgtr" id="item6" data-toggle="modal" data-target="#myModal">
						<img src="images/money6.png" class="cgtd">
						<p><span id="getval6">6000</span>金币</p>
						<div class="goldtip"><p class="cgfont">￥<span id="cgval6">60</p></div>
					</item>					
					
				</div>				
                                                           
			</div>
		</div>	


</div>
	<!--主页内容结束-->

<!-- 充值确认（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="position:fixed; bottom: 0; width: 70%; margin: 0 15%">
		<div class="modal-content text-center ">
<!--			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h6 class="modal-title" id="myModalLabel">
					充值
				</h6>
			</div>-->
			<div class="modal-body" style="padding:0">
				<p>充值￥<span id="cgval">999</span></p>
				<p>获得金币<span id="getval">999</span></span></p>
			</div>
			<div class="mymodal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">再想想
				</button>
				<button type="button" class="btn btn-primary" id="cg_cfm">
					充值吧
				</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>	
	
<!--swiper-begin-->
<script src="js/idangerous.swiper.min.js"></script>
<script src="js/swiper.js"></script> 
<!--swiper-end-->	
	
</body>
</html>