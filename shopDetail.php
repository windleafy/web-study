<?php

if (isset($_POST['name'])){
	$name = $_POST['name'];	
	echo '网站名: ' . $name;
	echo "\n";
}	
	
if (isset($_POST['url'])){
	$url = $_POST['url'];
	echo 'URL 地址: ' .$url;
}

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

</head>


<body style="background:transparent;">
	<div style="font-size: 12px;"><font color="#C0C0C0">
		<img id="icon" class="center-block" src="images/IPhoneX.png">	
		<div class="goldbg pull-left"><p class="itemPrice">￥<span id="price">7000</span></p></div>
		<button class="btn btn-primary pull-right" type="button" >兑换</button>
		<div class="clearfix"></div>
		<p style="color:chartreuse">
			<span class="glyphicon glyphicon-tags"></span>
			商品名称
		</p>
		<p id="itemName">iPhoneX亮黑色</p>
		<p style="color:chartreuse">
			<span class="glyphicon glyphicon-tags"></span>
			商品描述
		</p>
		<p id="itemDes">iPhone X是美国Apple（苹果公司）于北京时间2017年9月13日凌晨1点，在Apple Park新总部的史蒂夫·乔布斯剧院会上发布的新机型。其中“X”是罗马数字“10”的意思，代表着苹果向iPhone问世十周年致敬。</p>	
	</font></div>
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
		document.getElementById('itemName').innerHTML = mallItem.name;	
		document.getElementById('itemDes').innerHTML = mallItem.des;
	}
</script>		
</html>
