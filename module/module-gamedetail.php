<!DOCTYPE HTML>  
<html>  
<head>  
    <meta charset="utf-8">  
    <meta name="renderer" content="webkit|ie-comp|ie-stand">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />  
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />  
    <title>nav</title>  
    <meta name="keywords" content="关键词,5个左右,单个8汉字以内">  
    <meta name="description" content="网站描述，字数尽量空制在80个汉字，160个字符以内！">  
  
    <link rel="stylesheet" href="../css/style.css">  
    <link rel="stylesheet" href="../css/bootstrap.css">  
	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.js"></script>  

<style>

.one,.two{
width: 20%;
height: 100px;
border:1px solid #ccc;
float: left;
box-sizing: border-box;
}
.three{
width: 60%;
height: 100px;
border:1px solid #ccc;
float: left;
box-sizing: border-box;
}

</style>
  
</head>  
<body>
<script language="javascript" type="text/javascript">
	//接受跳转时传来的值
	var loc = location.href;
	var n1 = loc.length;//地址的总长度
	var n2 = loc.indexOf("=");//取得=号的位置
	var id = decodeURI(loc.substr(n2+1, n1-n2));//从=号后面的内容
	//alert('第二页－本场比赛ID：'+id);
	//document.write('第二页－本场比赛ID：'+id)
</script>
<p style="color:blueviolet">hello world</p>

<div class="one text-center">第一个div</div>
	
<div class="three" style="text-align: center">第三个div
	
	<table width="200" border="1" style="width: 100%;margin:auto">
	  <tbody>
		<tr>
		  <td>世界巡回赛-莫斯科站</td>
		</tr>
		<tr>
		  <td>50KG</td>
		</tr>
		<tr>
		  <td>2018-07-08 19:40:58</td>
		</tr>
	  </tbody>
	</table>

</div>
	
<div class="two">第二个div</div>
	
</body>
</html>
