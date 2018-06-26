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
  
    <link rel="stylesheet" href="css/style.css">  
    <link rel="stylesheet" href="css/bootstrap.css">  
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.js"></script>  

	<script type="text/javascript" src="/mytest/web-study-git/php/getDbPlayers.php">/*此处取回players的值*/</script> 
	<script type="text/javascript" src="/mytest/web-study-git/php/getDbGames.php">/*此处取回games的值*/</script> 
	<script type="text/javascript" src="/mytest/web-study-git/js/gameinfo.js">/*此处取回gamesinfo的值*/</script> 
	
<script>
	$(document).ready(function(){
	$('#bet').on('hidden.bs.modal', function () {
		/*console.log('hello');	console.log(document.getElementById('betnum').value);*/
		document.getElementById('tpBetNum').value = '';
		document.getElementById('tpRevenue').value = '';
		})
	
	$("button").click(function () {
		console.log(this.id);console.log(this.value);

		var x = this.value;
		switch (x){
			case '0'://下注左边胜
				document.getElementById('tpBetItem').innerHTML = document.getElementById("playerL.name").innerHTML+'胜';
				document.getElementById('tpBetRatio').innerHTML = document.getElementById("Lwin").innerHTML;
				//document.getElementById('tpRevenue').innerHTML = '';
				break;
			case '1'://下注右边胜
				document.getElementById('tpBetItem').innerHTML = document.getElementById("playerR.name").innerHTML+'胜';
				document.getElementById('tpBetRatio').innerHTML = document.getElementById("Rwin").innerHTML;
				break;
			case '2'://下注KO
				document.getElementById('tpBetItem').innerHTML = "出现KO";
				document.getElementById('tpBetRatio').innerHTML = document.getElementById("KO").innerHTML;
				break;
			case '3'://下注NKO
				document.getElementById('tpBetItem').innerHTML = "不出现KO";
				document.getElementById('tpBetRatio').innerHTML = document.getElementById("NKO").innerHTML;
				break;
 		}		
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
		<button id="btnLU" value="0" type="button" class="btn btn-lg btn-info" style="width: 106px; margin-left: 5px" data-toggle="modal" data-target="#bet">
			<span id="Lwin">2.14</span><br><span id="LwinName">渣渣辉</span>
		</button>
		<button id="btnRU" value="1" type="button" class="btn btn-lg btn-info" style="width: 106px;float: right; margin-right: 5px" data-toggle="modal" data-target="#bet">
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
		<button id="btnLD" value="2" type="button" class="btn btn-lg btn-primary" style="width: 106px; margin-left: 5px" data-toggle="modal" data-target="#bet">
			<span id="KO">3.14</span><br><span>定会OK</span>
		</button>
		<button id="btnRD" value="3" type="button" class="btn btn-lg btn-primary" style="width: 106px;float: right; margin-right: 5px" data-toggle="modal" data-target="#bet">
			<span id="NKO">3.14</span><br><span>必不OK</span>
		</button>
	
	
	<div class="clearfix"></div>
	<!-- Tooltip  下注-->
	<div class="tooltip-content">
		<div class="modal fade features-modal" id="bet" tabindex="-1" role="dialog" aria-hidden="true" >
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
					<button type="button" class="btn btn-default center-block" style="width: 70%" value="btnlogin">确认</button><p>&nbsp;</p>
				</div>
			</div>
		</div>
	</div>

<script language="javascript" type="text/javascript">
	
	//接受前一页面跳转时传来的值
	var loc = location.href;
	var n1 = loc.length;//地址的总长度
	var n2 = loc.indexOf("=");//取得=号的位置
	id = decodeURI(loc.substr(n2+1, n1-n2));//从=号后面的内容
	//console.log(id);
	
	
	getgameinfo();//console.log(gamesinfo);
	for (var i=0; i<gamesinfo.length; i++){
		if (id == gamesinfo[i].id){
			//alert('module-gamedetail.php-gameid:'+id);
			//比赛信息赋值
/*			console.log(gamesinfo[i]);
			console.log(gamesinfo[i].gamename);
			console.log(gamesinfo[i].gamestarttime);
			console.log(gamesinfo[i].gameclass);*/
			document.getElementById("game.name").innerHTML = gamesinfo[i].gamename;
			document.getElementById("game.gamestarttime").innerHTML = gamesinfo[i].gamestarttime;
			document.getElementById("game.class").innerHTML = gamesinfo[i].gameclass;
			
			document.getElementById("game.endTime1").innerHTML = gamesinfo[i].endTime;
			document.getElementById("game.endTime2").innerHTML = gamesinfo[i].endTime;
			document.getElementById("game.allBet1").innerHTML = gamesinfo[i].allBet1;
			document.getElementById("game.allBet2").innerHTML = gamesinfo[i].allBet2;
			
			document.getElementById("Lwin").innerHTML = gamesinfo[i].odds1_2;
			document.getElementById("Rwin").innerHTML = gamesinfo[i].odds1_1;
			document.getElementById("KO").innerHTML = gamesinfo[i].odds2_1;
			document.getElementById("NKO").innerHTML = gamesinfo[i].odds2_2;

			//console.log(gamesinfo[i].playerL);
			//console.log(gamesinfo[i].playerL.id);
			for (var j=0; j<players.length; j++){
				if (gamesinfo[i].playerR.id == players[j].id){
					//右侧运动员赋值
					console.log(players[j].playerIcon);
					document.getElementById("playerR.icon").src = players[j].playerIcon;
					document.getElementById("playerR.nationIcon").src = players[j].nationIcon;
					var prn = players[j].name;
					var prh = players[j].height;
					var prw = players[j].weight;
					var pri = players[j].win;
					var prl = players[j].lose;
					var prK = players[j].KO;	
					var pra = players[j].age;	
					
					document.getElementById("playerR.name").innerHTML = prn;
					document.getElementById("playerR.height").innerHTML = prh;
					document.getElementById("playerR.weight").innerHTML = prw;
					document.getElementById("playerR.win").innerHTML = pri;
					document.getElementById("playerR.lose").innerHTML = prl;
					document.getElementById("playerR.KO").innerHTML = prK;
					document.getElementById("playerR.age").innerHTML = pra;
				}
				if (gamesinfo[i].playerL.id == players[j].id){
					//左侧运动员赋值
					document.getElementById("playerL.icon").src = players[j].playerIcon;
					document.getElementById("playerL.nationIcon").src = players[j].nationIcon;
					var pln = players[j].name;
					var plh = players[j].height;
					var plw = players[j].weight;
					var pli = players[j].win;
					var pll = players[j].lose;
					var plK = players[j].KO;	
					var pla = players[j].age;
					
					document.getElementById("playerL.name").innerHTML = pln;
					document.getElementById("playerL.height").innerHTML = plh;
					document.getElementById("playerL.weight").innerHTML = plw;
					document.getElementById("playerL.win").innerHTML = pli;
					document.getElementById("playerL.lose").innerHTML = pll;
					document.getElementById("playerL.KO").innerHTML = plK;
					document.getElementById("playerL.age").innerHTML = pla;
				}
			}
			
			//下注按钮上的运动员名称
			document.getElementById("LwinName").innerHTML = pln+'胜';
			document.getElementById("RwinName").innerHTML = prn+'胜';
			
			//实力对比进度条赋值
			plh = plh*1;//字符串X1变为数字
			plw = plw*1;
			pli = pli*1;
			pll = pll*1;
			plK = plK*1;
			pla = pla*1;
			prh = prh*1;//console.log((prh+plh));
			prw = prw*1;
			pri = pri*1;
			prl = prl*1;
			prK = prK*1;
			pra = pra*1;
			//身高对比			
			document.getElementById("playerR.heightRatio").style.width = parseInt((prh/(prh + plh))*100)+'%';
			document.getElementById("playerL.heightRatio").style.width = 100-parseInt((prh/(prh + plh))*100)+'%';
			//体重对比	
			document.getElementById("playerR.weightRatio").style.width = parseInt((prw/(prw + plw))*100)+'%';
			document.getElementById("playerL.weightRatio").style.width = 100-parseInt((prw/(prw + plw))*100)+'%';
			//胜利场次对比
			document.getElementById("playerR.winRatio").style.width = parseInt((pri/(pri + pli))*100)+'%';
			document.getElementById("playerL.winRatio").style.width = 100-parseInt((pri/(pri + pli))*100)+'%';
			//失败场次对比
			document.getElementById("playerR.loseRatio").style.width = parseInt((prl/(prl + pll))*100)+'%';
			document.getElementById("playerL.loseRatio").style.width = 100-parseInt((prl/(prl + pll))*100)+'%';
			//KO场次对比
			document.getElementById("playerR.KORatio").style.width = parseInt((prK/(prK + plK))*100)+'%';
			document.getElementById("playerL.KORatio").style.width = 100-parseInt((prK/(prK + plK))*100)+'%';
			//年龄对比
			document.getElementById("playerR.ageRatio").style.width = parseInt((pra/(pra + pla))*100)+'%';
			document.getElementById("playerL.ageRatio").style.width = 100-parseInt((pra/(pra + pla))*100)+'%';
		}
	}
		//----预期收益input框实时动态赋值----
	$("#tpBetNum").bind('input propertychange',function () {
		var betNum = parseInt(document.getElementById('tpBetNum').value);
		var ratio = parseFloat(document.getElementById('tpBetRatio').innerHTML);
		//console.log(ratio);
		betNum = (betNum*ratio).toFixed(0);
		if (isNaN(betNum)){betNum = '';}
		document.getElementById("tpRevenue").value = betNum;
    });
</script>	
</body>
</html>
