<?php

session_start();
/*	
	if( isset($_SESSION['userName']) ){
		//print ($_SESSION['userName']."<br>");
	}
	else{
		header("location:login.html");
	}
*/
?>

<!DOCTYPE HTML> 

<html>  
<head>  
    <meta charset="utf-8">  
    <title>shopDetail</title> 
	<link href="css/style_shopDetail.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="php/getDbMall.php"></script>
	<script src="php/userExItem.php"></script>
	
	<script>
		$(document).ready(function(){
			//var cgitem;
			$("#exchange").click(function(){
				var price = document.getElementById("price").innerHTML;
				document.getElementById("itemPrice").innerHTML = price;
				var name = document.getElementById("name").innerHTML;
				document.getElementById("itemName").innerHTML = name;
			});
			
			$("#ex_cfm").click(function(){
				$("#Exchange").modal('hide');				
				var price = document.getElementById("price").innerHTML;
				var name = document.getElementById("itemName").innerHTML;
				$.post("php/userExItem.php",{//调用充值接口
					//itemPrice:price,
					itemName:name
				},
				function(data,status){
					//console.log(data);//
					switch(parseInt(data)){
						case 1 : alert('兑换成功');break;
						case 0 : alert('金币不足');break;
					}
				})				
				
			});			
			
		})
	</script>
</head>


<body style="background:transparent;">
	<div style="font-size: 12px;"><font color="#C0C0C0">
		<img id="icon" class="center-block" src="images/IPhoneX.png">	
		<div class="goldbg pull-left"><p class="itemPrice">金币<span id="price">7000</span></p></div>
		<button id="exchange" class="btn btn-primary pull-right" type="button" data-toggle="modal" data-target="#Exchange">兑换</button>
		<div class="clearfix"></div>
		<p style="color:chartreuse">
			<span class="glyphicon glyphicon-tags"></span>
			商品名称
		</p>
		<p id="name">iPhoneX亮黑色</p>
		<p style="color:chartreuse">
			<span class="glyphicon glyphicon-tags"></span>
			商品描述
		</p>
		<p id="itemDes">iPhone X是美国Apple（苹果公司）于北京时间2017年9月13日凌晨1点，在Apple Park新总部的史蒂夫·乔布斯剧院会上发布的新机型。其中“X”是罗马数字“10”的意思，代表着苹果向iPhone问世十周年致敬。</p>	
	</font></div>
	
	
	
<!-- 兑换确认（Modal） -->
<div class="modal fade" id="Exchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="position:fixed; bottom: 0; width: 70%; margin: 0 15%">
		<div class="modal-content text-center ">
			<div class="modal-body" style="padding:0">
				<p style="margin-top: 10px;">花费金币<span id="itemPrice">999</span></p>
				<p>兑换<span id="itemName">999</span></span></p>
			</div>
			<div class="mymodal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">再想想
				</button>
				<button type="button" class="btn btn-primary" id="ex_cfm">
					兑换吧
				</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>		
	
	
</body>
<script language="javascript" type="text/javascript">
	var loc = location.href;
	var n1 = loc.length;//地址的总长度
	//console.log(n1);
	var n2 = loc.indexOf("=");//取得=号的位置
	//console.log(n2);如n2小于0，说明没有从前一页赋值过来
	if(n2>0){
		var mallItem = decodeURI(loc.substr(n2+1, n1-n2));//从=号后面的内容
		//alert(id);
		//document.write(id)
		//console.log(mallItem);
		//console.log(typeof(JSON.parse(mallItem)));

		mallItem = JSON.parse(mallItem);
		//console.log(mallItem);
		//console.log(mallItem.icon);
		//console.log(document.getElementById('icon').src);
		document.getElementById('icon').src = mallItem.icon;
		document.getElementById('price').innerHTML = mallItem.price;
		document.getElementById('name').innerHTML = mallItem.name;	
		document.getElementById('itemDes').innerHTML = mallItem.des;
	}
</script>		
</html>
