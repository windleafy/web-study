// JavaScript Document

//接受gameinfo.php传来的值   	
var loc = location.href;
var n1 = loc.length;//地址的总长度
var n2 = loc.indexOf("=");//取得=号的位置
id = decodeURI(loc.substr(n2+1, n1-n2));//从=号后面的内容
//console.log(id);

getgameinfo();//console.log(gamesinfo);
//gamedetail.php页面显示元素赋值
for (var i=0; i<gamesinfo.length; i++){
	if (id == gamesinfo[i].id){
		//alert('module-gamedetail.php-gameid:'+id);
		//比赛信息赋值
/*		console.log(gamesinfo[i]);
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
				//console.log(players[j].playerIcon);
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

function settooltip(x){//设置tooltip页面的元素赋值
	//console.log(x);
	'use strict';
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
}