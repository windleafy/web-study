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

<script>
$(document).ready(function(){
	$("td").click(function(){
		var x = this.id//thisid == itemx
		//console.log(x.substring(4));
		x = x.substring(4);//取第5位x的值
		document.getElementById("cgval").innerHTML=document.getElementById("cgval"+x).innerHTML;
		document.getElementById("getval").innerHTML=document.getElementById("getval"+x).innerHTML;
	});
});
</script>		
	

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
	
.mymodal-footer {
  padding: 15px;
  text-align: right;
  /*border-top: 1px solid #e5e5e5;*/
}
.mymodal-footer .btn + .btn {
  margin-bottom: 0;
  margin-left: 5px;
}
.mymodal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.mymodal-footer .btn-block + .btn-block {
  margin-left: 0;
}
.mymodal-footer:before,
.mymodal-footer:after {
  display: table;
  content: " ";
}
.mymodal-footer:after {
  clear: both;
}
</style>
</head>
<body style="background:transparent;">

	<!--主页内容开始-->
<div id="charge">
	<table class="cgtb">
		<tbody>
			<tr class="cgtr">
				<td id="item1" data-toggle="modal" data-target="#myModal">
					<img src="images/money1.png" class="cgtd">
					<p><span id="getval1">1000</span>金币</p>
					<div class="goldtip"><p class="cgfont">￥<span id="cgval1">10</span></p></div>
				</td>
				<td id="item2" data-toggle="modal" data-target="#myModal">
					<img src="images/money2.png" class="cgtd">
					<p><span id="getval2">2000</span>金币</p>
					<div class="goldtip"><p class="cgfont">￥<span id="cgval2">20</p></div>
				</td>
			</tr>
			<tr class="cgtr">
				<td id="item3" data-toggle="modal" data-target="#myModal">
					<img src="images/money3.png" class="cgtd">
					<p><span id="getval3">3000</span>金币</p>
					<div class="goldtip"><p class="cgfont">￥<span id="cgval3">30</p></div>
				</td>
				<td id="item4" data-toggle="modal" data-target="#myModal">
					<img src="images/money4.png" class="cgtd">
					<p><span id="getval4">4000</span>金币</p>
					<div class="goldtip"><p class="cgfont">￥<span id="cgval4">40</p></div>
				</td>
			</tr>
			<tr class="cgtr">
				<td id="item5" data-toggle="modal" data-target="#myModal">
					<img src="images/money6.png" class="cgtd">
					<p><span id="getval5">5000</span>金币</p>
					<div class="goldtip"><p class="cgfont">￥<span id="cgval5">50</p></div>
				</td>
				<td id="item6" data-toggle="modal" data-target="#myModal">
					<img src="images/money6.png" class="cgtd">
					<p><span id="getval6">6000</span>金币</p>
					<div class="goldtip"><p class="cgfont">￥<span id="cgval6">60</p></div>
				</td>
			</tr>
		</tbody>
	</table>
</div>
	<!--主页内容结束-->

<!-- 模态框（Modal） -->
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
				<button type="button" class="btn btn-primary">
					充值吧
				</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>	
	
	
	
</body>
</html>