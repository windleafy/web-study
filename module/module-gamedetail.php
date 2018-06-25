<!DOCTYPE HTML>  
<html>  
<head>  
    <meta charset="utf-8">  
    <meta name="renderer" content="webkit|ie-comp|ie-stand">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />  
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" /> 
    <title>gamedetail.php</title>  
    <meta name="keywords" content="关键词,5个左右,单个8汉字以内">  
    <meta name="description" content="网站描述，字数尽量空制在80个汉字，160个字符以内！">  
  
    <link rel="stylesheet" href="../css/style.css">  
    <link rel="stylesheet" href="../css/bootstrap.css">  
	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.js"></script>  
	
<script>
$(document).ready(function(){
$('#bet').on('hidden.bs.modal', function () {
	/*console.log('hello');	console.log(document.getElementById('betnum').value);*/
	document.getElementById('betnum').value = '';
})
});
</script>	
	
  
</head>  
<body style="background:transparent;">
	<script language="javascript" type="text/javascript">
		//接受跳转时传来的值
		var loc = location.href;
		var n1 = loc.length;//地址的总长度
		var n2 = loc.indexOf("=");//取得=号的位置
		var id = decodeURI(loc.substr(n2+1, n1-n2));//从=号后面的内容
		//alert('第二页－本场比赛ID：'+id);
		//document.write('第二页－本场比赛ID：'+id)
	</script>
<p style="color:blueviolet;margin-bottom: -10px">hello world</p>

	<!---->
	<div class="text-center" style="width: 20%; height=80px; float:left">
		<img src="images/kof-1.ico" alt="" style="width: 64px"/> 
	</div>
	<div class="text-center" style="width: 60%; height=80px; float:left">
	  <table border="0" style="width: 100%; margin-top:7px">
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

<div class="text-center" style="width: 20%; height=80px; float:left">
<img src="images/kof-2.ico" alt="" style="width: 64px"/> </div>
	</div>

	<div class="clearfix"></div><!--清除之前设定的浮动，重新开始-->
	<div>
		<img src="images/CN@3x.png" alt="" style="width: 32px; margin-left: 5px"/> 
		<span>渣渣辉</span>
	  <img class="pull-right" src="images/gb@3x.png" alt="" style="width: 32px; margin-right: 5px; margin-left: 5px"/> 
		<span class="pull-right">古天乐</span>	
	</div>

	
	<div class="clearfix"></div><!--身高--清除之前设定的浮动，重新开始-->
	<div>
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: left;margin-left: 5px">身高</span>
		</div>
		<div class="text-center" style="width: 60%; height=80px; float:left">
			<div class="progress" style="margin-bottom: 1px; height: 15px">
			  <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 49%;">
					<span class="pull-left">170cm</span>
				</div>
			  <div class="progress-bar progress-bar-info" role="progressbar" style="width: 51%;">
					<span class="pull-right">180cm</span>
				</div>
			</div>
		</div>
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: right;margin-right: 5px">身高</span>
		</div>
	</div>
	<div class="clearfix"></div><!--体重--清除之前设定的浮动，重新开始-->
	<div>
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: left;margin-left: 5px">体重</span>
		</div>
		<div class="text-center" style="width: 60%; height=80px; float:left">
			<div class="progress" style="margin-bottom: 1px; height: 15px">
			  <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 49%;">
					<span class="pull-left">50KG</span>
				</div>
			  <div class="progress-bar progress-bar-info" role="progressbar" style="width: 51%;">
					<span class="pull-right">53KG</span>
				</div>
			</div>
		</div>
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: right;margin-right: 5px">体重</span>
		</div>
	</div>
	<div class="clearfix"></div><!--年龄--清除之前设定的浮动，重新开始-->
	<div>
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: left;margin-left: 5px">年龄</span>
		</div>
		<div class="text-center" style="width: 60%; height=80px; float:left">
			<div class="progress" style="margin-bottom: 1px; height: 15px">
				<div class="progress-bar progress-bar-danger" role="progressbar" style="width: 40%;">
					<span class="pull-left">20</span>
				</div>
				<div class="progress-bar progress-bar-info" role="progressbar" style="width: 60%;">
					<span class="pull-right">30</span>
				</div>
			</div>
		</div>
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: right;margin-right: 5px">年龄</span>
		</div>
	</div>
	<div class="clearfix"></div><!--获胜--清除之前设定的浮动，重新开始-->
	<div>
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: left;margin-left: 5px">获胜</span>
		</div>
		<div class="text-center" style="width: 60%; height=80px; float:left">
			<div class="progress" style="margin-bottom: 1px; height: 15px">
			  <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 5%;">
					<span class="pull-left">5</span>
				</div>
			  <div class="progress-bar progress-bar-info" role="progressbar" style="width: 95%;">
					<span class="pull-right">95</span>
				</div>
			</div>
		</div>
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: right;margin-right: 5px">获胜</span>
		</div>
	</div>
	<div class="clearfix"></div><!--失败--清除之前设定的浮动，重新开始-->
	<div>
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: left;margin-left: 5px">失败</span>
		</div>
		<div class="text-center" style="width: 60%; height=80px; float:left">
			<div class="progress" style="margin-bottom: 1px; height: 15px">
			  <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 10%;">
					<span class="pull-left">10</span>
				</div>
			  <div class="progress-bar progress-bar-info" role="progressbar" style="width: 90%;">
					<span class="pull-right">90</span>
				</div>
			</div>
		</div>
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: right;margin-right: 5px">失败</span>
		</div>
	</div>
	<div class="clearfix"></div><!--KO--清除之前设定的浮动，重新开始-->
	<div>
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: left;margin-left: 5px">KO</span>
		</div>
		<div class="text-center" style="width: 60%; height=80px; float:left">
			<div class="progress" style="margin-bottom: 1px; height: 15px">
			  <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 20%;">
					<span class="pull-left">5</span>
				</div>
			  <div class="progress-bar progress-bar-info" role="progressbar" style="width: 80%;">
					<span class="pull-right">20</span>
				</div>
			</div>
		</div>
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: right;margin-right: 5px">KO</span>
		</div>
	</div>
	
	<div class="clearfix"></div><!--玩法1--清除之前设定的浮动，重新开始-->
	<hr style="margin-bottom: 0px;margin-top: 0px">
	<div>
	  <p style="margin-bottom: -5px; margin-left: 5px">猜胜负</p>
	  <span class="pull-left" style="margin-left: 5px">下注总金额：</span><span class="pull-left">999999</span>
	  <span class="pull-right" style="margin-right: 5px">2018-06-25</span><span class="pull-right">下注截止时间：</span>
	</div>
	<div class="clearfix"></div>
		<button type="button" class="btn btn-lg btn-info" style="width: 106px; margin-left: 5px" data-toggle="modal" data-target="#bet">2.14<br>渣渣辉胜</button>
		<button type="button" class="btn btn-lg btn-info" style="width: 106px;float: right; margin-right: 5px" data-toggle="modal" data-target="#bet">1.34<br>古天乐胜</button>
	<div class="clearfix"></div>
	<br>
	<p style="margin-bottom: -5px; margin-left: 5px">是否KO</p>
	  <span class="pull-left" style="margin-left: 5px">下注总金额：</span><span class="pull-left">999999</span>
	  <span class="pull-right" style="margin-right: 5px">2018-06-25</span><span class="pull-right">下注截止时间：</span>
	</div>
	<div class="clearfix"></div>
		<button onClick="" type="button" class="btn btn-lg btn-primary" style="width: 106px; margin-left: 5px" data-toggle="modal" data-target="#bet">
			3.14<br>定会OK
		</button>
		<button type="button" class="btn btn-lg btn-primary" style="width: 106px;float: right; margin-right: 5px" data-toggle="modal" data-target="#bet">1.54<br>必不OK</button>
	<div class="clearfix"></div>



	<!-- Tooltip  下注-->
	<div class="tooltip-content">
		<div class="modal fade features-modal" id="bet" tabindex="-1" role="dialog" aria-hidden="true" >
			<div class="modal-dialog" style="position: fixed; bottom: 0">
				<div class="modal-content text-center col-md-6 col-md-offset-3">
					<div class="modal-header" style=" padding-bottom: 5px; margin-bottom: 10px;">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<span >下注:</span><span >渣渣辉胜</span>
						<br>
						<span >赔率:</span><span >2.14</span>
					</div>
				
					<div class="center-block"  style="width: 70%; margin-top: 3px">
					  	<div class="input-group"><span id="addon1" class="input-group-addon">预期收益</span>
					    	<input id="loginname" type="text" class="form-control" disabled aria-describedby="addon1">
						</div>
						<br>	
					<div class="input-group"><span id="contentaddon1" class="input-group-addon">下注金额</span>
						<input id="betnum" type="number" class="form-control" aria-describedby="contentaddon1" autocomplete="off">
							<style>
								input::-webkit-outer-spin-button,
								input::-webkit-inner-spin-button {
									-webkit-appearance: none;
								}
								input[type="number"]{
									-moz-appearance: textfield;
								}
							</style>
					</div>
					</div>
					<br>
					<button type="button" class="btn btn-default center-block" style="width: 70%" value="btnlogin">确认</button><p>&nbsp;</p>
				</div>
			</div>
		</div>
	</div>


</body>
</html>
