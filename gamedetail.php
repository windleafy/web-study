<!DOCTYPE HTML>  
<?php
session_start();
	
	if( isset($_SESSION['userName']) ){
		//print ($_SESSION['userName']."<br>");
	}
	else{
		header("location:login.html");
	}
?>

<html>  
<head>  
    <meta charset="utf-8">  
    <meta name="renderer" content="webkit|ie-comp|ie-stand">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />  
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" /> 
    <title>gamedetail.php</title>  
    <meta name="keywords" content="关键词,5个左右,单个8汉字以内">  
    <meta name="description" content="网站描述，字数尽量空制在80个汉字，160个字符以内！">  
  
    <link rel="stylesheet" href="css/style.css">  
    <link rel="stylesheet" href="css/bootstrap.css">  
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.js"></script>  

	<script type="text/javascript" src="php/getDbPlayers.php">/*此处取回players的值*/</script> 
	<script type="text/javascript" src="php/getDbGames.php">/*此处取回games的值*/</script> 
	<script type="text/javascript" src="js/gameinfo.js">/*此处取回gamesinfo的值*/</script> 
	<script type="text/javascript" src="php/getDbUsers.php">/*此处取回user的值*/</script> 
<!--	<script language="JavaScript">
		function myrefresh()
		{
		   window.location.reload();
		}
		setTimeout('myrefresh()',3000); //指定1秒刷新一次
	</script>-->
	
<script>
	$(document).ready(function(){
		$('#tpbet').on('hidden.bs.modal', function () {//关闭下注模态窗口时，输入框清空
			/*console.log('hello');	console.log(document.getElementById('betnum').value);*/
			document.getElementById('tpBetNum').value = '';
			document.getElementById('tpRevenue').value = '';
		});
		
		
		
		var betx;
		$("button").click(function () {
			var x = this.value;//console.log(x);
			if (x!=('tpbtncfm')){
				settooltip(x);//调用gamedetail.js中的函数
				betx = x;//x = 0 1 2 3四种下注方式
			}
			else{ 
				betnum = document.getElementById("tpBetNum").value;//输入为空不处理
				if ((betnum!='')&&(betnum!='0')){
					$.post("php/getDbUsers.php",{
						betnum:document.getElementById("tpBetNum").value,//用户下注金币
						bet:betx,
						gameId:id,
						playerL:pln,//左边运动员，从gamedetail取出，存入用户下注数据库
						playerR:prn //右边
					},
					function(data,status){
						//alert('数据: '+data +"\n状态: " + status);
						//console.log(data);
						switch (parseInt(data)){
							case 0:alert("钱不够");
							break;
							case 1:
								//window.location.reload();
								//console.log(games);
								alert("下注成功");								
							break;
						};
					})
				}
				//--前端按玩法刷新下注总额--
				var x = document.getElementById('game.allBet1').innerHTML;
				var y = document.getElementById('game.allBet2').innerHTML;
				//console.log(betx);
				if ((betx==0)||(betx==1)){
					//console.log('wind1');//刷新前端显示
					document.getElementById('game.allBet1').innerHTML = parseInt(betnum)+parseInt(x);
				}
				else{ 
					//console.log('wind2');
					document.getElementById('game.allBet2').innerHTML = parseInt(betnum)+parseInt(y);
				}//--前端按玩法刷新下注总额--				

				$('#tpbet').modal('hide');//点tooltip确认按钮，关闭窗口
			};
		});
	});
</script>	
</head>  
<body style="background:transparent;">
<!--<body style = "background-color: #a0a0a0;">-->
<!--<p style="color:blueviolet;margin-bottom: -10px">hello world</p>-->
	
	<div class="text-center" style="width: 20%; height=80px; float:left">
		<img id="playerL.icon" src="module/images/kof-1.ico" alt="" style="width: 64px"/> 
	</div>
	<div class="text-center" style="width: 60%; height=80px; float:left; color: aliceblue">
	  <table border="0" style="width: 100%; margin-top:7px">
		  <tbody>
			<tr>
			  <td id="game.name">世界巡回赛-莫斯科站</td>
			</tr>
			<tr>
			  <td id="game.class">00KG</td>
			</tr>
			<tr>
			  <td id="game.gamestarttime">2018-07-08 19:40:58</td>
			</tr>
		  </tbody>
	  </table>
	</div>

	<div class="text-center" style="width: 20%; height=80px; float:left">
		<img id="playerR.icon" src="module/images/kof-2.ico" alt="" style="width: 64px"/> 
	</div>


	<div class="clearfix"></div><!--清除之前设定的浮动，重新开始-->
	<div style="color: aliceblue">
		<img id="playerL.nationIcon" src="module/images/CN@3x.png" alt="" style="width: 32px; margin-left: 5px"/> 
		<span id="playerL.name">渣渣辉</span>
	  	<img id="playerR.nationIcon" class="pull-right" src="module/images/gb@3x.png" alt="" style="width: 32px; margin-right: 5px; margin-left: 5px"/> 
		<span class="pull-right" id="playerR.name">古天乐</span>	
	</div>

	
	<div class="clearfix"></div><!--身高--清除之前设定的浮动，重新开始-->
	<div style="color: aliceblue">
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: left; margin-left: 5px">身高</span>
		</div>
		<div class="text-center" style="width: 60%; height=80px; float:left">
			<div class="progress" style="margin-bottom: 1px; height: 15px">
			  <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 50%;" id="playerL.heightRatio">
					<span class="pull-left" id="playerL.height">170cm</span>
				</div>
			  <div class="progress-bar progress-bar-info" role="progressbar" style="width: 50%;" id="playerR.heightRatio">
					<span class="pull-right" id="playerR.height">180cm</span>
				</div>
			</div>
		</div>
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: right;margin-right: 5px">身高</span>
		</div>
	</div>
	<div class="clearfix"></div><!--体重--清除之前设定的浮动，重新开始-->
	<div style="color: aliceblue">
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: left;margin-left: 5px">体重</span>
		</div>
		<div class="text-center" style="width: 60%; height=80px; float:left">
			<div class="progress" style="margin-bottom: 1px; height: 15px">
			  <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 50%;" id= "playerL.weightRatio">
					<span class="pull-left" id="playerL.weight">50KG</span>
				</div>
			  <div class="progress-bar progress-bar-info" role="progressbar" style="width: 50%; " id= "playerR.weightRatio">
					<span class="pull-right" id="playerR.weight">53KG</span>
				</div>
			</div>
		</div>
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: right;margin-right: 5px">体重</span>
		</div>
	</div>
	<div class="clearfix"></div><!--年龄--清除之前设定的浮动，重新开始-->
	<div style="color: aliceblue">
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: left;margin-left: 5px">年龄</span>
		</div>
		<div class="text-center" style="width: 60%; height=80px; float:left">
			<div class="progress" style="margin-bottom: 1px; height: 15px">
				<div class="progress-bar progress-bar-danger" role="progressbar" style="width: 50%;" id="playerL.ageRatio">
					<span class="pull-left" id="playerL.age">20</span>
				</div>
				<div class="progress-bar progress-bar-info" role="progressbar" style="width: 50%;" id="playerR.ageRatio">
					<span class="pull-right" id="playerR.age">30</span>
				</div>
			</div>
		</div>
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: right;margin-right: 5px">年龄</span>
		</div>
	</div>
	<div class="clearfix"></div><!--获胜--清除之前设定的浮动，重新开始-->
	<div style="color: aliceblue">
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: left;margin-left: 5px">获胜</span>
		</div>
		<div class="text-center" style="width: 60%; height=80px; float:left">
			<div class="progress" style="margin-bottom: 1px; height: 15px">
			  <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 50%;" id="playerL.winRatio">
					<span class="pull-left" id="playerL.win">5</span>
				</div>
			  <div class="progress-bar progress-bar-info" role="progressbar" style="width: 50%;" id="playerR.winRatio">
					<span class="pull-right" id="playerR.win">95</span>
				</div>
			</div>
		</div>
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: right;margin-right: 5px">获胜</span>
		</div>
	</div>
	<div class="clearfix"></div><!--失败--清除之前设定的浮动，重新开始-->
	<div style="color: aliceblue">
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: left;margin-left: 5px">失败</span>
		</div>
		<div class="text-center" style="width: 60%; height=80px; float:left">
			<div class="progress" style="margin-bottom: 1px; height: 15px">
			  <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 50%;" id="playerL.loseRatio">
					<span class="pull-left" id="playerL.lose">10</span>
				</div>
			  <div class="progress-bar progress-bar-info" role="progressbar" style="width: 50%;" id="playerR.loseRatio">
					<span class="pull-right" id="playerR.lose">90</span>
				</div>
			</div>
		</div>
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: right;margin-right: 5px">失败</span>
		</div>
	</div>
	<div class="clearfix"></div><!--KO--清除之前设定的浮动，重新开始-->
	<div style="color: aliceblue">
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: left;margin-left: 5px">KO</span>
		</div>
		<div class="text-center" style="width: 60%; height=80px; float:left">
			<div class="progress" style="margin-bottom: 1px; height: 15px">
			  <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 50%;" id="playerL.KORatio">
					<span class="pull-left" id="playerL.KO">5</span>
				</div>
			  <div class="progress-bar progress-bar-info" role="progressbar" style="width: 50%;" id="playerR.KORatio">
					<span class="pull-right" id="playerR.KO">20</span>
				</div>
			</div>
		</div>
		<div class="text-center" style="width: 20%; height=80px; float:left">
			<span style="float: right;margin-right: 5px">KO</span>
		</div>
	</div>
	
	<div class="clearfix"></div><!--玩法1--清除之前设定的浮动，重新开始-->
	<hr style="margin-bottom: 0px;margin-top: 0px">
	<div style="color: aliceblue">
	  <p style="margin-bottom: -5px; margin-left: 5px; color: aqua">猜胜负</p>
		<span class="pull-left" style="margin-left: 5px; font-size: 12px">下注总金额：</span>
		<span class="pull-left" id="game.allBet1" style="font-size: 12px">999999</span>
	  <span class="pull-right" style="margin-right: 5px; font-size: 12px" id="game.endTime1">2018-06-25</span>
		<span class="pull-right" style="font-size: 12px">下注截止时间：</span>
	</div>
	<div class="clearfix"></div>
		<button id="btnLU" value="0" type="button" class="btn btn-lg btn-info" style="width: 106px; margin-left: 5px" data-toggle="modal" data-target="#tpbet">
			<span id="Lwin">2.14</span><br><span id="LwinName">渣渣辉</span>
		</button>
		<button id="btnRU" value="1" type="button" class="btn btn-lg btn-info" style="width: 106px;float: right; margin-right: 5px" data-toggle="modal" data-target="#tpbet">
			<span id="Rwin">1.34</span><br><span id="RwinName">古天乐</span>
		</button>
	<div class="clearfix"></div>
	<br>
	<div style="color: aliceblue">
		<p style="margin-bottom: -5px; margin-left: 5px; color: aqua">是否KO</p>
		<span class="pull-left" style="margin-left: 5px; font-size: 12px">下注总金额：</span>
		<span class="pull-left" id="game.allBet2" style="font-size: 12px">999999</span>
		<span class="pull-right" style="margin-right: 5px; font-size: 12px" id="game.endTime2">2018-06-25</span>
		<span class="pull-right" style="font-size: 12px">下注截止时间：</span>
	</div>
	<div class="clearfix"></div>
		<button id="btnLD" value="2" type="button" class="btn btn-lg btn-primary" style="width: 106px; margin-left: 5px" data-toggle="modal" data-target="#tpbet">
			<span id="KO">3.14</span><br><span>定会OK</span>
		</button>
		<button id="btnRD" value="3" type="button" class="btn btn-lg btn-primary" style="width: 106px;float: right; margin-right: 5px" data-toggle="modal" data-target="#tpbet">
			<span id="NKO">3.14</span><br><span>必不OK</span>
		</button>
	
	
	<div class="clearfix"></div>
	<!-- Tooltip  下注-->
	<div class="tooltip-content">
		<div class="modal fade features-modal" id="tpbet" tabindex="-1" role="dialog" aria-hidden="true" >
			<div class="modal-dialog" style="position: fixed; bottom: 0">
				<div class="modal-content text-center col-md-6 col-md-offset-3">
					<div class="modal-header" style=" padding-bottom: 5px; margin-bottom: 10px;">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<span >下注:</span><span id="tpBetItem">渣渣辉</span>
						<br>
						<span >赔率:</span><span id="tpBetRatio">2.14</span>
					</div>
				
					<div class="center-block"  style="width: 70%; margin-top: 3px">
					  	<div class="input-group"><span id="addon1" class="input-group-addon">预期收益</span>
					    	<input id="tpRevenue" type="text" class="form-control" disabled aria-describedby="addon1">
						</div>
						<br>	
					<div class="input-group"><span id="contentaddon1" class="input-group-addon">下注金额</span>
						<input id="tpBetNum" type="number" class="form-control" aria-describedby="contentaddon1" autocomplete="off">
							<style>/*取消num输入框的spiner*/
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
					<button id="tpbtncfm" type="button" class="btn btn-default center-block" style="width: 70%" value="tpbtncfm">确认</button><p>&nbsp;</p>
				</div>
			</div>
		</div>
	</div>
	
	<script language="javascript" type="text/javascript" src="js/gamedetail.js"></script>
</body>
</html>
