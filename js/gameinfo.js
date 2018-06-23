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
    	
		players.forEach(v1=>{
			var playertmp = new Array();	//必须放在循环体内；
			if ( v1.id == games[i].playerR ){
				playertmp.name = v1.name;
				playertmp.playericon = v1.playericon;
				playertmp.nationIcon = v1.nationIcon;
				gameinfotemp.playerR = playertmp;
			}
			if (v1.id == games[i].playerL ){
				playertmp.name = v1.name;
				playertmp.playericon = v1.playericon;
				playertmp.nationIcon = v1.nationIcon;
				gameinfotemp.playerL = playertmp;
			}	//games表中设定的playerid，如果player表中不存在，此处出现空值
		});
		
		gamesinfo[i] = gameinfotemp;
		//console.log(gamesinfo);
		i = i+1;
	}); 
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
			data.push('<div class="container">');
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
			data.push(gamesinfo[currentGroup].playerR.playericon);
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
			data.push(gamesinfo[currentGroup].playerL.playericon);
			data.push('" width="50" height="50"></td><!--pl playerLeft--></tr>');
			data.push('<tr><td id="plName">');
			data.push(gamesinfo[currentGroup].playerL.name);
			data.push('</td></tr>');
			data.push('<tr><td><img id="plNation" alt="" src="');
			data.push(gamesinfo[currentGroup].playerL.nationIcon);
			data.push('"height="24"></td></tr>');
			data.push('</tbody></table>');
			data.push('</div></div></div>');
		//console.log(gamesinfo[currentGroup]);
		if (currentGroup<3) {
			document.getElementById("table"+currentGroup).innerHTML=data.join('');
		}
		else {
			document.getElementById("table"+currentGroup).innerHTML=data.join('');
		}
		
		currentGroup = currentGroup+1;
	}
	
	//console.log(games);
	//console.log(players);
}