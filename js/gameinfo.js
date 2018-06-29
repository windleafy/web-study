/* ----比赛信息处理---- */
/*--------------------*/

//单场比赛信息赋值
var gamesinfo = [];//定义前台可见的比赛信息数组
function getgameinfo(){
	//选取比赛
	'use strict';
	var i = 0;
	games.forEach(v=>{
		var gameinfotemp = [];	//必须放在循环体内，否则循环时回传值数组会全部置为最新值
		gameinfotemp.id = v.id;
		gameinfotemp.endTime = v.endTime;
		gameinfotemp.allBet = v.allBet;
		gameinfotemp.result = v.result;
		gameinfotemp.gamename = v.gamename;
		gameinfotemp.gameclass = v.gameclass;
		gameinfotemp.gamestarttime = v.gamestarttime;
		gameinfotemp.allBet1 = v.allBet1;
		gameinfotemp.allBet2 = v.allBet2;
		gameinfotemp.odds1_1 = v.odds1_1;
		gameinfotemp.odds1_2 = v.odds1_2;
		gameinfotemp.odds2_1 = v.odds2_1;
		gameinfotemp.odds2_2 = v.odds2_2;
		
		//console.log('gameinfo.js-v.gamestarttime');console.log(v.gamestarttime);
    	//console.log('gameinfo.js-gameinfotemp');console.log(gameinfotemp);
		players.forEach(v1=>{
			var playertmp = new Array();	//必须放在循环体内；
			if ( v1.id == games[i].playerR ){
				//console.log('gameinfo.js-playerR');
				playertmp.name = v1.name;
				playertmp.playerIcon = v1.playerIcon;
				playertmp.nationIcon = v1.nationIcon;
				playertmp.heitht = v1.height;
				playertmp.weitht = v1.weight;
				playertmp.win = v1.win;
				playertmp.lose = v1.lose;
				playertmp.KO = v1.KO;
				playertmp.id = v1.id;
				gameinfotemp.playerR = playertmp;
			}
			if (v1.id == games[i].playerL ){
				playertmp.name = v1.name;
				playertmp.playerIcon = v1.playerIcon;
				playertmp.nationIcon = v1.nationIcon;
				playertmp.heitht = v1.height;
				playertmp.weitht = v1.weight;
				playertmp.win = v1.win;
				playertmp.lose = v1.lose;
				playertmp.KO = v1.KO;
				playertmp.id = v1.id;
				gameinfotemp.playerL = playertmp;
			}	//games表中设定的playerid，如果player表中不存在，此处出现空值
		});
		
		gamesinfo[i] = gameinfotemp;
		//console.log(gamesinfo);
		i = i+1;
	}); //console.log('gameinfo.js:');console.log(gamesinfo);
}
//console.log(gamesinfo);
groupNum = 0;
currentGroup = 0;

function createTable1() {
	'use strict';
	getgameinfo();//console.log(getgameinfo);console.log(gamesinfo[0].playerR);
	groupNum = gamesinfo.length;
	for (var i = 0; i < 3; i++) {
		if (currentGroup >= 3){i = 3};
		//console.log(currentGroup);
		var data = [];
		data.push('<div class="');//data.push('<div class="container">');
		data.push('container"');
		
		//----处理跳转链接----开始--
		//选中某比赛条目，跳转至对应比赛详情页
		data.push('onclick="location=');
		//alert('57 currentGroup'+currentGroup);
		//data.push("'welcome.php?txt=str'");
		data.push("'gamedetail.php?txt=");
		var s = gamesinfo[currentGroup].id;
		var str = encodeURI(s);
		data.push(str);//var str="gamedetail.php?"+"txt="+encodeURI(s);
		data.push("'");
		//location.href="gamedetail.php?"+"txt="+encodeURI(s);
		data.push('"');//alert(data.join(''));//onclick="location='gamedetail.php'"	
		//----处理跳转链接----结束		
		
		data.push('>');

		data.push('<div class="row">');
		data.push('<div class="pull-left">');
		data.push('<p id="endTime">');
		data.push(gamesinfo[currentGroup].endTime);
		data.push('</p>');
		data.push('<p id="gameResult">');
		data.push(gamesinfo[currentGroup].result);
		data.push('</p>');
		data.push('<p id="allBet">');
		data.push(gamesinfo[currentGroup].allBet);
		data.push('</p>');

		data.push('<input type="hidden" id="gameid" name="gameid" value="');
		//console.log(gamesinfo[currentGroup].id);记录比赛ID
		data.push(gamesinfo[currentGroup].id);
		data.push('">');

		data.push('</div>');
		data.push('<div class="pull-right ">');
		data.push('<table class="pull-right text-center" id="playerR" width="50" border="0">');
		data.push('<tbody>');
		data.push('<tr><td ><img id="prIcon" alt="" src="');
		data.push(gamesinfo[currentGroup].playerR.playerIcon);
		data.push('" width="50" height="50"></td><!--pr playerRight--></tr>');
		data.push('<tr><td id="prName">');
		data.push(gamesinfo[currentGroup].playerR.name);
		data.push('</td></tr>');
		data.push('<tr><td><img id="prNation" alt="" src="');
		data.push(gamesinfo[currentGroup].playerR.nationIcon);
		data.push('"height="24"></td></tr>');
		data.push('</tbody>');
		data.push('</table>');
		data.push('<table class="pull-right text-center" width="70" border="0"><tbody><tr><td><br><h1>VS</h1></td></tr></tbody></table>');
		data.push('<table class="pull-right text-center" id="playerL" width="50" border="0">');
		data.push('<tbody>');
		data.push('<tr><td ><img id="plIcon" alt="" src="');
		data.push(gamesinfo[currentGroup].playerL.playerIcon);
		data.push('" width="50" height="50"></td><!--pl playerLeft--></tr>');
		data.push('<tr><td id="plName">');
		data.push(gamesinfo[currentGroup].playerL.name);
		data.push('</td></tr>');
		data.push('<tr><td><img id="plNation" alt="" src="');
		data.push(gamesinfo[currentGroup].playerL.nationIcon);
		data.push('"height="24"></td></tr>');
		data.push('</tbody></table>');
		data.push('</div></div></div>');
		//console.log(gamesinfo);
		//alert('114 table'+currentGroup);
		//alert('115 '+data.join(''));
		document.getElementById("table"+currentGroup).innerHTML=data.join('');
		
		
		currentGroup = currentGroup+1;
	}
	
	//console.log(games);
	//console.log(players);
}

groupNum2 = 0;
currentGroup2 = 0;
function createTable2() {
	'use strict';
	//getgameinfo();//console.log(getgameinfo);console.log(gamesinfo[0].playerR);
	groupNum2 = userbet.length;
	//console.log(userbet);
	for (var i = 0; ((i < 3)&&(i < userbet.length)); i++) {
		//console.log(currentGroup2);
		if (currentGroup2 >= 2){i = 3};
		//console.log(currentGroup);
		var data = [];
		data.push('<div><div style="text-align: center; color: aliceblue; margin-left: -30px"><span>');
		data.push(userbet[currentGroup2].playerL);
		data.push('</span><span>VS</span><span>');
		data.push(userbet[currentGroup2].playerR);
		data.push('</span><span>');
		data.push('(玩法'+userbet[currentGroup2].bet+')');
		data.push('</span></div>');
		data.push('<div style="text-align: center; margin-left: -30px"><p style="font-size: 12px;">竞猜时间：<span>');
		data.push(userbet[currentGroup2].bettime);
		data.push('</span></p></div><div class="clearfix"></div>');
		data.push('<div class="record-div"><p class="record-p">竞猜选项：<span>');
		data.push(userbet[currentGroup2].bet);
		data.push('</span></p></div>');
		data.push('<div class="record-div"><p class="record-p">比赛结果：<span>');
		data.push(userbet[currentGroup2].result);
		data.push('</span></p></div><div class="clearfix"></div>');
		data.push('<div class="record-div"><p class="record-p">下注金额：<span>')
		data.push(userbet[currentGroup2].betnum);
		data.push('</span></p></div>');
		data.push('<div class="record-div"><p class="record-p">下注赔率：<span>');
		data.push(userbet[currentGroup2].odds);
		data.push('</span></p></div>');
		data.push('<div class="record-div"><p class="record-p">竞猜结果：<span>');
		data.push(userbet[currentGroup2].result);
		data.push('</span></p></div>');
		data.push('<div class="record-div"><p class="record-p">竞猜收益：<span>');
		data.push(userbet[currentGroup2].result);
		data.push('</span></p></div>');
		data.push('<div class="clearfix"></div><hr style="margin-bottom: 5px; margin-top: 5px"></div>');

		//console.log(userbet[i]);
		//console.log('table'+currentGroup2);
		//console.log(data.join(''));
		document.getElementById("table"+currentGroup2).innerHTML=data.join('');
		currentGroup2 = currentGroup2+1;
	}
	
	//console.log(games);
	//console.log(players);
}